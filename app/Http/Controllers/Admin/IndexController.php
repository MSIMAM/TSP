<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        return view('Admin.index');
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
