<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\TeamUser;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Carbon\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }
    public function registerbyinvite($email)
    {
        $user = User::where('email',$email)->first();
        if($user!=Null && $user->nOfDeposit >0)
        {
            return view('auth.register-by-invite')->with('ref_email',$email);
        }
        else
        {
            return redirect()->route('register')->with('message','InValid Referral Link..!, Create account Directly');
        }
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'number' => ['required', 'numeric', 'max:100000000000000'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $ref = $request->ref_email;
        while($ref!=Null)
        {
            $ruser = User::where('email',$ref)->first();
            $ruser->totalreferrals+=1;
            $ruser->save();
            $ref = $ruser->ref_email;
        }
        if($request->ref_email!=NULL)
        {
            $user = User::where('email',$request->ref_email)->first();
            $user->referrals+=1;
            $user->save();
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->ref_email = $request->ref_email;
        $user->referrals = 0;
        $user->totalreferrals = 0;
        $user->investment = 0;
        $user->profit = 0;
        $user->ltinvestment = 0;
        $user->ltwithdrawal = 0;
        $user->rewardincome = 0;
        $user->referralearnings = 0;
        $user->teaminvestment = 0;
        $user->teamprofitbonus = 0;
        $user->ltearnings = 0;
        $user->number = $request->number;
        $user->ownership =  $request->ownership;
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make($request->password);
        $user->save();
        $role = Role::where('name','user')->first();
        $user->roles()->attach($role);
        
        event(new Registered($user));

        Auth::login($user);
        
        return redirect(RouteServiceProvider::HOME);
    }
    
}
