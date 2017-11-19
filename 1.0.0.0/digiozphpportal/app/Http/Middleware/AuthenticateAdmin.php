<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Role;

class AuthenticateAdmin
{
    protected $user;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user())
        {
            $userid = Auth::id();
            $roleadmin = Role::where('name', '=', 'Administrator')->first()->toarray();
            $userrole = UserRole::where('user_id', '=', $userid)->where('role_id', '=', $roleadmin['id'])->first();

            if ($userrole != null && count($userrole) > 0) {
                return $next($request);
            }
        }

        return redirect('/');

        //return $next($request);
    }
}
