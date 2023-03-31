<?php

namespace App\Http\Middleware;

use App\Models\deposit;
use App\Models\plan;
use App\Models\pspercentage;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
