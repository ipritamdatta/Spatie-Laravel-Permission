<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\User;
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
        // Role::create(['name'=>'writer']);
        // Permission::create(['name'=>'edit post']);
        // auth()->user()->givePermissionTo('edit post');
        // auth()->user()->assignRole('writer');

        // $role = Role::findById(1);
        // $permission = Permission::findById(2);
        // $role->givePermissionTo($permission);

        // return auth()->user()->permissions;

        // return auth()->user()->getDirectPermissions();
        // return auth()->user()->getPermissionsViaRoles();
        // return auth()->user()->getAllPermissions();

        // return User::role('writer')->get();

        // return User::permission('write post')->get();

        // auth()->user()->revokePermissionTo('edit post');
        // auth()->user()->removeRole('writer');
        return view('home');
    }
}
