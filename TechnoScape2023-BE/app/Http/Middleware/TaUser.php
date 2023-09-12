<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TaUser
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
        if (isset(auth()->user()->TaUser->payment_status)) {
            $payment_status = auth()->user()->TaUser->payment_status;
            if ($payment_status == 'accepted') {
                return redirect(route('dashboard'));
            } elseif ($payment_status == 'paid') {
                return back()->with('error', 'You have already paid for this event.');
            }
        }
        return $next($request);
    }
}
