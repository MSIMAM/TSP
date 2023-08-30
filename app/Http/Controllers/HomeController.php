<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $count_users = User::count();
        $count_users            = User::count();
        $count_roles            = Role::count();
        $count_permissions      = Permission::count();
        return view('Admin.index', [
            'count_users' => $count_users,
            'count_roles' => $count_roles,
            'count_permissions' => $count_permissions
        ]);
    }


}
