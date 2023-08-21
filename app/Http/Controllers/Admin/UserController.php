<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Music;
use App\Models\Lyrics;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= User::latest()->get();
        $count_users            = User::count();
        $count_roles            = Role::count();
        $count_permissions      = Permission::count();
        // $count_lyrics           = Music::count();

        return view('Admin.index', compact('user', 'count_users', 'count_roles',  'count_permissions'));
    }

    public function showMembers()
    {
        $user= User::latest()->get();
        return view('Admin.users.index', [
            'users' =>$user
        ]);
    }
    public function updateStatus(Request $request, User $user)
    {
        //  return $request;
        User::where('uuid', $request->uuid)->update([
            'status' => $request->status
        ]);

        toast('Status Changed', 'success');
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('setting.user.new',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users',
            'password'=>'required|confirmed'
        ]);
        $user = User::create([
            'uuid'=>Str::orderedUuid(),
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
            'profile'=> 'user.avif',
            'status'=>'Active'
        ]);
        $user->syncRoles($request->roles);
        $user->assignRole('admin');
        toast('User Created', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $role = Role::get();
        $user->roles;
       return view('Admin.users.profile',['user'=>$user,'roles' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users,email,'.$user->id.',id',
        ]);



        if($request->password != null){
            $request->validate([
                'password' => 'required|confirmed'
            ]);
            $validated['password'] = bcrypt($request->password);
        }

        $user->update($validated);
        toast('Profile Updated', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        toast('Role Deleted', 'success');
        return redirect()->back();
    }
}
