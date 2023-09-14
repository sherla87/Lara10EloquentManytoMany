<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return 100;
        $user = User::find(1);    
        echo $user->roles;
        //echo $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createRole()
    {
        $role1 = Role::create([
            'name'=> 'admin'
        ]);
        $role2 = Role::create([
            'name'=> 'kerani'
        ]);

        echo $role1; 
        echo $role2;
    }

    public function assignRole()
    {
       $user = User::find(1);    
        $roleIds = [1, 2];
        $user->roles()->attach($roleIds);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Role_user $role_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role_user $role_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role_user $role_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role_user $role_user)
    {
        //
    }


}