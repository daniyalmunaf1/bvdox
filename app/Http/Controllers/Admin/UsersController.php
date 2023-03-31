<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\deposit;
use App\Models\Detail;
use App\Models\investmentrequest;
use App\Models\plan;
use App\Models\pspercentage;
use App\Models\PtooPAcc;
use App\Models\User;
use App\Models\Role;
use App\Models\rpercentage;
use App\Models\withdrawalrequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $plans = plan::all();
        return view('index')->with('plans',$plans);

    }
    public function plans()
    {
        return view('plan');
    }
    public function investmentrequest()
    {
        $investmentrequests = investmentrequest::all();
        $ptpaccounts = PtooPAcc::all();
        return view('admin.investmentrequest')->with([
            'investmentrequests'=>$investmentrequests,
            'ptpaccounts'=>$ptpaccounts
        ]);
    }
    public function editinvestmentrequest($id)
    {
        $investmentrequest = investmentrequest::find($id);
        return view('admin.editinvestmentrequest')->with('investmentrequest',$investmentrequest);
    }
    public function deleteinvestmentrequest($id)
    {
        $investmentrequest = investmentrequest::find($id)->delete();
        return redirect()->route('investmentrequest')->with('message', 'Request Deleted Successfully');   
    }
    public function deletewithdrawrequest($id)
    {
        $withdrawalrequest = withdrawalrequest::find($id);
        $withdrawalrequest->status = 2;
        $withdrawalrequest->save();
        return redirect()->route('withdrawalrequest')->with('message', 'Request Deleted Successfully');   
    }
    public function donewithdrawrequest($id)
    {
        $withdrawalrequest = withdrawalrequest::find($id);
        $withdrawalrequest->status = 1;
        $withdrawalrequest->save();
        $user = User::where('id',$withdrawalrequest->userid)->first();
        $user->profit = 0;
        $user->ltwithdrawal = $withdrawalrequest->amountUSDT;
        $user->teamprofitbonus = 0;
        $user->referralearnings = 0;
        $user->rewardincome = 0;
        $user->numberofwithdrawals += 1;
        $user->now += 1; 
        $user->save();
        return redirect()->route('withdrawalrequest')->with('message', 'Request Done..!!');   
    }
    public function submitinvestmentrequest(Request $request, $id)
    {
        $request->validate([
            'Amount' => ['required', 'numeric', 'max:1000000000000'],
        ]);
        $investmentrequest = investmentrequest::find($id);

        $plans = plan::all();
        foreach($plans as $plan)
        {
            if($request->Amount>=$plan->min&&$request->Amount<=$plan->max)
            {
                $months = $plan->months;
            }
        }
        $deposit = new deposit();
        $deposit->userid = $investmentrequest->userid;
        $deposit->amount = $request->Amount;
        $deposit->expiry = Carbon::now()->addDays($months*30);
        $deposit->save();
        $user = User::find($investmentrequest->userid);
        $user->investment += $request->Amount;
        $user->ltinvestment += $request->Amount;
        $user->nOfDeposit +=1;
        if($user->lastprofit==NULL)
        {
            $user->lastprofit = Carbon::now();
        }
        // dd($user->investment);
        foreach($plans as $plan)
        {
            if($user->investment>=$plan->min&&$user->investment<=$plan->max)
            {
                $user->package = $plan->name;
            }
        }
        $user->save();
        $detail = Detail::first();
        $ownership = ($user->ltinvestment*100)/$detail->companyTO;
        $user->ownership = $ownership;
        $user->save();

        if($user->ref_email)
        {
            $ruser = User::where('email',$user->ref_email)->first();
            $ruser->lud = 1;
            $ruser->now = 0;
            $ruser->save();
        }

        $rf = $user->ref_email;
        while($rf!=Null)
        {
            $ruser = User::where('email',$rf)->first();
            $ruser->teaminvestment += $request->Amount;
            $ruser->save();
            $rf = $ruser->ref_email;
        }

        $rp = rpercentage::first();
        $j = 1;
        
        // dd($rp->$i);
        $ref = $user->ref_email;
        while($ref!=Null&& $j<=10)
        {
            $i = 'lvl'.$j;
            $pro = ($user->investment*$rp->$i)/100;
            $ruser = User::where('email',$ref)->first();
            $ruser->referralearnings += $pro;
            $ruser->ltearnings += $pro; 
            $ruser->save();
            $ref = $ruser->ref_email;
            $j++;
        }
        // dd($j);
        $investmentrequest->delete();
        return redirect()->route('investmentrequest')->with('message', 'Request Completed Successfully');   
    }
    public function rewardrequest()
    {
        return view('admin.rewardrequest');
    }
    public function withdrawalrequest()
    {
        $withdrawalrequests = withdrawalrequest::where('status',0)->get();
        $users = User::all();
        return view('admin.withdrawalrequest')->with([
            'withdrawalrequests'=>$withdrawalrequests,
            'users'=>$users
        ]);
    }
    public function investmentaccounts()
    {
        $detail = Detail::first();
        $ptpaccounts = PtooPAcc::all();
        return view('admin.investmentaccounts')->with([
            'detail'=>$detail,
            'ptpaccounts'=>$ptpaccounts
        ]);
    }
    public function updateTrc(Request $request)
    {
        $detail = Detail::first();
        if($request->qrcode!=NULL)
        {
            $qr = app('App\Http\Controllers\UploadImageController')->storage_upload($request->qrcode,'/app/public/');
            $detail->qrcode = $qr;
        }
        $detail->wallet = $request->wallet;
        $detail->trcCharge = $request->trcCharge;
        $detail->save();
        return  redirect()->route('investmentaccounts')->with('message', 'Details Updated Successfully');   
    }

    public function dashboard()
    {
        $rp = rpercentage::first();
        $psp = pspercentage::first();
        $announcement = Announcement::first();
        $detail = Detail::first();
        $total = User::count()-1;
        $bronze = User::where('package','bronze')->count();
        $silver = User::where('package','silver')->count();
        $gold = User::where('package','gold')->count();
        $ruby = User::where('package','ruby')->count();
        $platinum = User::where('package','platinum')->count();
        $diamond = User::where('package','diamond')->count();
        $investmentrequests = investmentrequest::count();
        $withdrawalrequests = withdrawalrequest::count();
        $plans = plan::all();
        return view('admin.dashboard')->with([
            'rp'=>$rp,
            'psp'=>$psp,
            'plans'=>$plans,
            'detail'=>$detail,
            'total'=>$total,
            'bronze'=>$bronze,
            'silver'=>$silver,
            'gold'=>$gold,
            'ruby'=>$ruby,
            'platinum'=>$platinum,
            'diamond'=>$diamond,
            'investmentrequests'=>$investmentrequests,
            'withdrawalrequests'=>$withdrawalrequests,
            'announcement'=>$announcement
        ]);
    }
    public function submitplan(Request $request , $id)
    {
        $request->validate([
            'tper' => ['required', 'numeric', 'max:100'],
            'eper' => ['required', 'numeric', 'max:100'],
            'sper' => ['required', 'numeric', 'max:100'],
            'months' => ['required', 'numeric', 'max:100000'],
        ]);
        $plan = plan::find($id);
        $plan->tper = $request->tper;
        $plan->eper = $request->eper;
        $plan->sper = $request->sper;
        $plan->months = $request->months;
        $plan->save();
        return  redirect()->route('dashboard')->with('message', 'Plans Updated Successfully');   
    }

    public function usermanagement()
    {
        $users = User::where('id','!=',Auth::id())->get();
        $sno = 0;
        return view('admin.usermanagement')->with([
            'users'=>$users,
            'sno'=>$sno
        ]);

    }
    public function updatepsp(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'lvl1' => ['required', 'numeric', 'max:1000'],
            'lvl2' => ['required', 'numeric', 'max:1000'],
            'lvl3' => ['required', 'numeric', 'max:1000'],
            'lvl4' => ['required', 'numeric', 'max:1000'],
            'lvl5' => ['required', 'numeric', 'max:1000'],
            'lvl6' => ['required', 'numeric', 'max:1000'],
            'lvl7' => ['required', 'numeric', 'max:1000'],
            'lvl8' => ['required', 'numeric', 'max:1000'],
            'lvl9' => ['required', 'numeric', 'max:1000'],
            'lvl10' => ['required', 'numeric', 'max:1000'],
        ]);
        $rp = pspercentage::first();
        $rp->lvl1 = $request->lvl1;
        $rp->lvl2 = $request->lvl2;
        $rp->lvl3 = $request->lvl3;
        $rp->lvl4 = $request->lvl4;
        $rp->lvl5 = $request->lvl5;
        $rp->lvl6 = $request->lvl6;
        $rp->lvl7 = $request->lvl7;
        $rp->lvl8 = $request->lvl8;
        $rp->lvl9 = $request->lvl9;
        $rp->lvl10 = $request->lvl10;
        $rp->save();
        return  redirect()->route('dashboard')->with('message', 'ProfitShare Percentage Updated Successfully');   
    }
    public function updaterp(Request $request)
    {
        // dd($request->old_plan);
        $request->validate([
            'lvl1' => ['required', 'numeric', 'max:1000'],
            'lvl2' => ['required', 'numeric', 'max:1000'],
            'lvl3' => ['required', 'numeric', 'max:1000'],
            'lvl4' => ['required', 'numeric', 'max:1000'],
            'lvl5' => ['required', 'numeric', 'max:1000'],
            'lvl6' => ['required', 'numeric', 'max:1000'],
            'lvl7' => ['required', 'numeric', 'max:1000'],
            'lvl8' => ['required', 'numeric', 'max:1000'],
            'lvl9' => ['required', 'numeric', 'max:1000'],
            'lvl10' => ['required', 'numeric', 'max:1000'],
        ]);
        $rp = rpercentage::first();
        $rp->lvl1 = $request->lvl1;
        $rp->lvl2 = $request->lvl2;
        $rp->lvl3 = $request->lvl3;
        $rp->lvl4 = $request->lvl4;
        $rp->lvl5 = $request->lvl5;
        $rp->lvl6 = $request->lvl6;
        $rp->lvl7 = $request->lvl7;
        $rp->lvl8 = $request->lvl8;
        $rp->lvl9 = $request->lvl9;
        $rp->lvl10 = $request->lvl10;
        $rp->save();
        return  redirect()->route('dashboard')->with('message', 'Referral Percentage Updated Successfully');   
    }
    public function updateusdtprice(Request $request)
    {
        $detail = Detail::first();
        $detail->usdtprice = $request->usdtprice;
        $detail->save();
        return  redirect()->route('dashboard')->with('message', 'Usdt Price Updated Successfully');   
    }
    public function activate()
    {
        $detail = Detail::first();
        $detail->activate = 1;
        $detail->save();
        return  redirect()->route('dashboard')->with('message', 'Withdrawal Validation Activated Successfully');   
    }
    public function deactivate()
    {
        $detail = Detail::first();
        $detail->activate = 0;
        $detail->save();
        return  redirect()->route('dashboard')->with('message', 'Withdrawal Validation Deactivated Successfully');   
    }
    public function updateuwtbr(Request $request)
    {
        $detail = Detail::first();
        $detail->wtbr = $request->wtbr;
        $detail->save();
        return  redirect()->route('dashboard')->with('message', 'Withdrawal time before referral Updated Successfully');   
    }
    public function updateannouncement(Request $request)
    {
        $announcement = Announcement::first();
        $announcement->message = $request->message;
        $announcement->save();
        return  redirect()->route('dashboard')->with('message', 'Annnouncement Updated Successfully');   
    }
    
    public function updateminwithdrawal(Request $request)
    {
        $detail = Detail::first();
        $detail->minwithdrawal = $request->minwithdrawal;
        $detail->save();
        return  redirect()->route('dashboard')->with('message', 'Min Withdrawal Updated Successfully');   
    }
    public function updatecompanyTO(Request $request)
    {
        $detail = Detail::first();
        $detail->companyTO = $request->companyTO;
        $detail->save();
        return  redirect()->route('dashboard')->with('message', 'Company Turnover Updated Successfully');   
    }

    public function gotochangepassword()
    {
        return view('auth.change-password');
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {       
        $plans = plan::all();
        return view('admin.edit')->with([
            'user'=>$user,
            'plans'=>$plans,
        ]);

    }

    public function addhistory(Request $request)
    {
        $withreq = new withdrawalrequest();
        $withreq->userid = $request->id;
        $withreq->bank = $request->bankname;
        $withreq->accountname = $request->accountname;
        $withreq->accountnumber = $request->accountnumber;
        $withreq->amountUSDT = $request->amount;
        $withreq->status = 1;
        $withreq->save();

        return  redirect()->back()->with('message', 'History Added Successfully');   


    }
    public function update(Request $request, User $user)
    {
        // dd($request->old_plan);
        $request->validate([
            'investment' => ['required', 'numeric', 'max:100000000'],
            'ltinvestment' => ['required', 'numeric', 'max:100000000'],
            'profit' => ['required', 'numeric', 'max:100000000'],
            'ltwithdrawal' => ['required', 'numeric', 'max:100000000'],
            'rewardincome' => ['required', 'numeric', 'max:100000000'],
            'referralearnings' => ['required', 'numeric', 'max:100000000'],
            'totalreferrals' => ['required', 'numeric', 'max:100000000'],
            'referrals' => ['required', 'numeric', 'max:100000000'],
            'teaminvestment' => ['required', 'numeric', 'max:100000000'],
            'teamprofitbonus' => ['required', 'numeric', 'max:100000000'],
        ]);
        $user->investment = $request->investment;
        $user->ltinvestment = $request->ltinvestment;
        $user->ltearnings = $request->ltearnings;
        $user->profit = $request->profit;
        $user->package = $request->package;
        $user->ltwithdrawal = $request->ltwithdrawal;
        $user->rewardincome = $request->rewardincome;
        $user->referralearnings = $request->referralearnings;
        $user->referrals =  $request->referrals;
        $user->totalreferrals =  $request->totalreferrals;
        $user->teaminvestment =  $request->teaminvestment;
        $user->teamprofitbonus =  $request->teamprofitbonus;
        $user->created_at =  $request->created_at;
        $user->ownership =  $request->ownership;
        $user->save();
        
        return  redirect()->route('usermanagement')->with('message', 'Details Updated Successfully');   
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // $user->userid = Auth::user()->userid;
        // $user->six_digit_Id = Auth::user()->six_digit_Id;
        // $user->name = Auth::user()->name;
        // $user->email = Auth::user()->email;
        // $user->lock = Auth::user()->lock;
        // $user->number = Auth::user()->number;
        
        DB::table('users')
        ->where('id', Auth::user()->id)  // find your user by their email
        ->update(array('password' => Hash::make($request->password)));
        $user = Auth::user();
        if($user->hasRole('admin'))
        {
            return redirect()->route('dashboard')->with('message', 'Password Changed Successfully');
        }
        else
        {
            return redirect()->route('user.dashboard')->with('message', 'Password Changed Successfully');
        }
    }


    
    
    public function destroy(User $user)
    {
            $user->delete();
            return Redirect()->back()->with('message', 'User Account Deleted Successfully');   
        
        
    }
}
