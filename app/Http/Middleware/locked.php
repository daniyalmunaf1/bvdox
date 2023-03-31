<?php

namespace App\Http\Middleware;

use App\Models\deposit;
use App\Models\plan;
use App\Models\pspercentage;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class locked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $users = User::all();
        foreach($users as $user)
        {
           
            $plans = plan::all();
            $deposits = deposit::where('userid',$user->id)->get();
            foreach($deposits as $deposit)
            {
                if($deposit->expiry<=Carbon::now())
                {
                    $user->investment -= $deposit->amount;
                    $user->package = '';
                    foreach($plans as $plan)
                    {
                        if($user->investment>=$plan->min&&$user->investment<=$plan->max)
                        {
                            $user->package = $plan->name;
                        }
                    }
                    $user->save();
                    $deposit->delete();
                }
            }
            if($user->investment>0)
            {
                if(Carbon::parse($user->lastprofit)->addDay(1) <= Carbon::now())
                {
                    $plan = plan::where('name',$user->package)->first();
                    $profit = (($user->investment*$plan->sper)/100)/30;
                    // dd($profit);
                    $user->profit += $profit;
                    $user->ltearnings += $profit;
                    $user->lastprofit = Carbon::parse($user->lastprofit)->addDay(1);
                    $user->save();
                    $psp = pspercentage::first();
                    $j = 1;
                    $ref = $user->ref_email;
                    while($ref!=Null&& $j<=10)
                    {
                        $i = 'lvl'.$j;
                        $pro = (($user->investment*$psp->$i)/100)/30;
                        $ruser = User::where('email',$ref)->first();
                        $ruser->teamprofitbonus += $pro;
                        $ruser->ltearnings += $pro; 
                        $ruser->save();
                        $ref = $ruser->ref_email;
                        $j++;
                    }
                }
                
            }
        }

            return $next($request);
        

    }
}
