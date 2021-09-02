<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Repository\Eloquent\UserRepository;
use App\Models\User;
use Exception;

class RolePermissionController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index()
    {
        // $users = $this->userRepository->with('roles')->get();
        $roles = Role::all();        
        return view('admin.roles.show_role' ,compact('roles'));
    }

    public function saveRole(Request $request)
    {
        try{
            $request->validate(['role_name' => 'required','string']);
            //$role = auth()->user()->assignRole($request->role_name);
             $role = Role::create(['name' => $request->role_name ]);
            
            ($role) 
            ? parent::successMessage("Role Created Successfully") 
            : parent::errorMessage("Something went wrong while creating you Role");
            return redirect()->back();
        } catch(Exception $e) {
            dd($e->getMessage());
        }

    }
    public function createPermissions()
    {
        $permissions = Permission::all();
        return view('admin.roles.show_permission',compact('permissions'));
    }
    public function savePermission(Request $request)
    {
        try{
            $request->validate(['permission_name' => 'required','string']);
             $permission = Permission::create(['name' => $request->permission_name ]);
            ($permission) 
            ? parent::successMessage("Permission Created Successfully") 
            : parent::errorMessage("Something went wrong while creating you Permission");
            return redirect()->back();
        } catch(Exception $e) {
            dd($e->getMessage());
        }
    }

    public function assignUserRole()
    {
        // $users = User::all();
        $users = User::with('roles')->get();
        
        return view('admin.roles.assign_role',compact('users'));
    }

    public function registeruser()
    {
        return view('admin.authenticate.register');

    }

    
}
