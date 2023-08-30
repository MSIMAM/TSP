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

        // $count_lyrics           = Music::count();

        return view('Admin.index');
    }

    public function showMembers()
    {
        $user= User::latest()->get();
        $role = Role::get();
        return view('Admin.users.index', [
            'users' =>  $user,
            'roles' =>  $role
        ]);
    }
    public function updateStatus(Request $request, User $user)
    {

        $user->roles;
        $user = User::where('id', $request->id)->update([
            'status' => $request->status
        ]);
        // $user->syncRoles($request->roles);

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
    public function destroy(Role $role, User $user)
    {
        $user->delete();
        toast('User Deleted', 'success');
        return redirect()->back();
    }
}
