<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\HackathonTeam;
use App\Models\HackathonUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNan;

class HasTeam
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
        $user = Auth::user();
        $hackathonUser = $user->hackathonUser;
      
        if(is_null($hackathonUser)&& $request->route()->getName() !== 'hackathonDashboard'){
    
            return $next($request);
        }
        else if($hackathonUser && $request->route()->getName() == 'hackathonTeamPayment' || $hackathonUser && $request->route()->getName() == 'storeHackathonTeamPayment'){
            return $next($request);
        }
        else if($hackathonUser && $request->route()->getName() == 'hackathonDashboard'){
            return $next($request);
        }
        else if($hackathonUser && $request->route()->getName() == 'hackathonJoinGroup' ){
            if($hackathonUser->hackathonTeam->payment_status == "accepted"){

                return $next($request);
            }
            else{
                return redirect()->route('hackathonDashboard')->with('error', 'You need to finished your payment in order to join the group!');
            }
        }
        else if($hackathonUser && $request->route()->getName() !== 'hackathonDashboard'){
            return redirect()->route('hackathonDashboard')->with('error', 'You can"t create team anymore!');
        }
        else if(is_null($hackathonUser) && $request->route()->getName() == 'hackathonDashboard'){
            return redirect()->route('hackathonUserRegistration');
        }
        return redirect()->back()->with('error', 'You can"t create team anymore!');
    }
}
