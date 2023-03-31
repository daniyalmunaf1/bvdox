<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\DeactivateDays;
use App\Models\deposit;
use App\Models\plan;
use App\Models\pspercentage;
use Illuminate\Support\Facades\Auth;


class admin
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
        
        if(Auth::user()->hasRole('admin'))
        {
            return $next($request);
        }

        return redirect()->route('user.dashboard');
    }
}
