<?php
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\UserRole;
use App\Http;

/**
 * Helper short summary.
 *
 * Helper description.
 *
 * @version 1.0
 * @author psohe
 */
function checkPermission($rolename){
    if (Auth::user())
    {
        $userid = Auth::id();
        $roleadmin = Role::where('name', '=', $rolename)->first()->toarray();
        $userrole = UserRole::where('user_id', '=', $userid)->where('role_id', '=', $roleadmin['id'])->first();

        if ($userrole != null && count($userrole) > 0) {
            return true;
        }
    }
    return false;
}