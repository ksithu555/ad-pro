<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $requiredPlan = 0)
    {
        if (Auth::check()) {
            $userPlanStatus = Auth::user()->plan_status;

            // Check if the user has the required plan status
            if ($userPlanStatus >= $requiredPlan) {
                return $next($request);
            }

            // Redirect if the user doesn't meet the required plan status
            Session::flash('warning', 'この機能を使用するにはプランをアップグレードしてください');
            return redirect()->route('user.get.plans');
        }

        // Redirect to login page if the user is not authenticated
        return redirect()->route('user.show.login');
    }
}
