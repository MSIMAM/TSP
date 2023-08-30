<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        $count_users            = User::count();
        $count_roles            = Role::count();
        $count_permissions      = Permission::count();

        return view('Admin.index', [
            'count_users' => $count_users,
            'count_roles' => $count_roles,
            'count_permissions' => $count_permissions
        ]);
    }
    public function edit(User $user)
    {
        return view('Admin.users.profile');
    }


    public function update(Request $request)
    {
        $user = Auth::user();

        $validate = $request->validate([
            'profile' => 'required'
        ]);


        if($request->hasFile('profile')){
            $file = $request->file('profile');
            $path = $file->store('public/images');

            if ($user->profile) {
                Storage::delete($user->profile);
            }
            $user->profile = $path;
            $user->update();

        }
        toast('Profile Picture Updated', 'success');
        return redirect()->back();
    }

}
