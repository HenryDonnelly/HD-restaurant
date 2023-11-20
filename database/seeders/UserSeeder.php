<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::where('name','admin')->first();

        $role_user = Role::where('name','user')->first();

        $admin = new User();
        $admin->name='Henry';
        $admin->email='N00220105@iadt.ie';
        $admin->password=Hash::make('password');
        $admin->save();
        /* attach admin role to this user */
        $admin->roles()->attach($role_admin);

        $user=new User();
        $user->name ='Joany';
        $user->email='joany@gmail.ie';
        /* dont want password known, hash is used */
        $user->password=Hash::make('password');
        $user->save();
        /* attach user role to this user */
        $user->roles()->attach($role_user);
    }
}
