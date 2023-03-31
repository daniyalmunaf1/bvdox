<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\deposit;
use App\Models\Detail;
use App\Models\investmentrequest;
use App\Models\plan;
use App\Models\pspercentage;
use App\Models\PtooPAcc;
use App\Models\ptoprequest;
use App\Models\User;
use App\Models\Role;
use App\Models\withdrawalrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Carbon\Carbon;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function dashboard()
    {
        $withdrawalrequests = withdrawalrequest::where('userid',Auth::user()->id)->where('status',1)->get();
        $id = Auth::user()->id;
        $user = User::find($id);
        // dd($user->nOfDeposit);
        $user->save();
        $users = User::all();
        $deposits = deposit::where('userid',$user->id)->get();
        $deposit = deposit::where('userid',$user->id)->first();
        $percent = 101;
        if($deposit)
        {
            $to = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deposit->created_at);
            $from = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deposit->expiry);
            $totaldays = $to->diffInDays($from);
            
            $to = Carbon::now();
            $from = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deposit->expiry);
            $remainingdays = $to->diffInDays($from);
            $spentdays = $totaldays-$remainingdays;
            $percent = ($spentdays*100)/$totaldays;
        }
        

        $announcement = Announcement::first();
        return view('user.dashboard')->with([
            'user'=>$user,
            'percent'=>$percent,
            'deposits'=>$deposits,
            'withdrawalrequests'=>$withdrawalrequests,
            'announcement'=>$announcement
        ]);
    }

    public function userdashboardgraph(Request $request)
    {
        $withdrawalrequests = withdrawalrequest::where('userid',Auth::user()->id)->where('status',1)->get();
        $id = Auth::user()->id;
        $user = User::find($id);
        // dd($user->nOfDeposit);
        $user->save();
        $users = User::all();
        $deposits = deposit::where('userid',$user->id)->get();
        $deposit = deposit::where('id',$request->graph)->first();
        
        $to = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deposit->created_at);
        $from = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deposit->expiry);
        $totaldays = $to->diffInDays($from);
        
        $to = Carbon::now();
        $from = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $deposit->expiry);
        $remainingdays = $to->diffInDays($from);
        $percent = ($remainingdays*100)/$totaldays;

        $announcement = Announcement::first();
        return view('user.dashboard')->with([
            'user'=>$user,
            'percent'=>$percent,
            'deposits'=>$deposits,
            'withdrawalrequests'=>$withdrawalrequests,
            'announcement'=>$announcement
        ]);
    }
   
    public function invest()
    {
        $investmentrequests = investmentrequest::where('userid',Auth::user()->id)->get();
        $data = investmentrequest::where('userid',Auth::user()->id)->count();
        $charge = Detail::first();
        $ptpaccounts = PtooPAcc::all();
        return view('user.invest')->with([
            'charge'=>$charge,
            'ptpaccounts'=>$ptpaccounts,
            'data'=>$data,
            'investmentrequests'=>$investmentrequests
            ]);
    }
    public function appeal(Request $request)
    {
        $image = app('App\Http\Controllers\UploadImageController')->storage_upload($request->ss,'/app/public/ss/');
        $req = new investmentrequest();
        $req->tid = $request->tid;
        $req->name = Auth::user()->name;
        $req->email = Auth::user()->email;
        $req->userid = Auth::user()->id;
        $req->ss = $image;
        $req->tid = $request->tid;
        $req->tamount = $request->tamount;
        $req->amount = $request->amount;
        $req->save();

        return  redirect()->route('invest')->with('message', 'Investment Request has been sent');   
    }
    public function submitwithdrawrequest(Request $request)
    {
        
        // dd($request);
        $detail = Detail::first();

        if($detail->activate==1)
        {
            if(Auth::user()->now<$detail->wtbr || Auth::user()->lud>0)
            {
                if(Auth::user()->nOfDeposit!=0)
                {
                    if($request->amountUSDT<=Auth::user()->profit+Auth::user()->rewardincome+Auth::user()->referralearnings+Auth::user()->teamprofitbonus)
                    {
                        if((Auth::user()->profit+Auth::user()->rewardincome+Auth::user()->referralearnings+Auth::user()->teamprofitbonus)>=$detail->minwithdrawal)
                        {
                            $req = new WithdrawalRequest();
                            $req->bank = $request->bank;
                            $req->accountname = $request->accountname;
                            $req->accountnumber = $request->accountnumber;
                            $req->userid = Auth::user()->id;
                            $req->status = 0;
                            $req->amountUSDT = $request->amountUSDT;
                            if(Auth::user()->country=='Pakistan'||Auth::user()->country=='pakistan'||Auth::user()->country=='PAKISTAN')
                            {
                                $req->amountPKR = $request->amountUSDT*$detail->usdtprice;
                            }
                            $req->save();
                            
                            return  redirect()->route('withdrawal')->with('message', 'Withdrawal Request has been sent');   
                        }
                        else
                        {
                            $message = 'Minimum withdrawal amount is '.$detail->minwithdrawal.'$';
                            return  redirect()->route('withdrawal')->with('message', $message);   
                        }
                    }
                    else
                    {
                        return  redirect()->route('withdrawal')->with('message', 'Insufficient Balance..!');   
                    }
                }
                else
                {
                    return  redirect()->route('withdrawal')->with('message', 'You can not withdraw amount until you invest once..!');   
                }
            }
            else
            {
                return  redirect()->route('withdrawal')->with('message', 'Refer someone and ask him/her to invest..!');   
            }
        }
        else
        {
            if(Auth::user()->nOfDeposit!=0)
            {
                if($request->amountUSDT<=Auth::user()->profit+Auth::user()->rewardincome+Auth::user()->referralearnings+Auth::user()->teamprofitbonus)
                {
                    if((Auth::user()->profit+Auth::user()->rewardincome+Auth::user()->referralearnings+Auth::user()->teamprofitbonus)>=$detail->minwithdrawal)
                    {
                        $req = new WithdrawalRequest();
                        $req->bank = $request->bank;
                        $req->accountname = $request->accountname;
                        $req->accountnumber = $request->accountnumber;
                        $req->userid = Auth::user()->id;
                        $req->status = 0;
                        $req->amountUSDT = $request->amountUSDT;
                        if(Auth::user()->country=='Pakistan'||Auth::user()->country=='pakistan'||Auth::user()->country=='PAKISTAN')
                        {
                            $req->amountPKR = $request->amountUSDT*$detail->usdtprice;
                        }
                        $req->save();
                        
                        return  redirect()->route('withdrawal')->with('message', 'Withdrawal Request has been sent');   
                    }
                    else
                    {
                        $message = 'Minimum withdrawal amount is '.$detail->minwithdrawal.'$';
                        return  redirect()->route('withdrawal')->with('message', $message);   
                    }
                }
                else
                {
                    return  redirect()->route('withdrawal')->with('message', 'Insufficient Balance..!');   
                }
            }
            else
            {
                return  redirect()->route('withdrawal')->with('message', 'You can not withdraw amount until you invest once..!');   
            }
        }
        
    }
    public function investptop($id)
    {
        $ptpaccount = PtooPAcc::where('id',$id)->first();
            return view('user.investptop')->with([
                'ptpaccount'=>$ptpaccount,
                'id'=>$id
        ]);   
    }
    public function chat()
    {
        return view('user.chat');
    }
    public function viewptop($id)
    {
        $ptpaccount = PtooPAcc::where('id',$id)->first();
        $ptoprequest = ptoprequest::where('userid',Auth::user()->id)->where('ptopid',$ptpaccount->id)->first();
        return view('user.investptop_')->with([
            'ptpaccount'=>$ptpaccount,
            'amountUSDT'=>$ptoprequest->amountusdt,
            'amountPKR'=>$ptoprequest->amountpkr,
        ]); 
    }
    public function investptop_(Request $request)
    {
        $ptpaccount = PtooPAcc::where('id',$request->id)->first();
        $amount = plan::min('min');
        $amountUSDT = $request->amountPKR/$ptpaccount->amountpkr;
        
        if($amountUSDT>=$amount)
        {
            if($request->amountPKR<$ptpaccount->min)
            {
                $message = 'Amount must be greater than '.$ptpaccount->min.' PKR';
                return  redirect()->back()->with('message', $message);   
            }
            elseif($request->amountPKR>$ptpaccount->max)
            {
                $message = 'Amount must be less than '.$ptpaccount->max.' PKR';
                return  redirect()->back()->with('message', $message);   
            }
            else
            {
                $ptoprequest = new ptoprequest();
                $ptoprequest->userid = Auth::user()->id;
                $ptoprequest->ptopid = $request->id;
                $ptoprequest->amountpkr = $request->amountPKR;
                $ptoprequest->amountusdt = $amountUSDT;
                $ptoprequest->status = '0';
                $ptoprequest->save();
                $ptpaccount->status = '1';
                $ptpaccount->userid = Auth::user()->id;
                $ptpaccount->save();
                return view('user.investptop_')->with([
                    'ptpaccount'=>$ptpaccount,
                    'amountUSDT'=>$amountUSDT,
                    'amountPKR'=>$request->amountPKR,
                ]);   
            }
        }
        else
        {
            $message = 'Minimum Deposit Amount is '.$amount.'$';
            return  redirect()->back()->with('message', $message);   
        }
    }
    public function investusdt(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric', 'max:100000000'],
        ]);
    
        // if(($request->amount-(($request->amount*4)/100))>=25)
        // ($request->amount-(($request->amount*4)/100))
        // dd($amount);
        $charge = Detail::first();

        if($request->amount>=$amount)
        {
            $detail = Detail::first();
            $charge = ($request->amount*$charge->trcCharge)/100;
            return view('user.investusdt')->with([
                'amount'=>$request->amount,
                'charge'=>$charge,
                'detail'=>$detail
        ]);   
        }
        else
        {
            $message = 'Minimum Deposit Amount is '.$amount.'$';
            return  redirect()->route('invest')->with('message', $message);   
        }
    }
    public function withdrawal()
    {
        $detail = Detail::first();
        return view('user.withdrawal')->with('detail',$detail);
    }
    public function reward()
    {
        return view('user.reward');
    }
    public function contact()
    {
        return view('user.contact');
    }

    // public function goldplan()
    // {
    //     $users = User::all();
    //     return view('user.goldplan')->with('users',$users);

    // }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


