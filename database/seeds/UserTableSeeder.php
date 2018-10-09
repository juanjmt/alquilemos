<?php

use Illuminate\Database\Seeder;
use alquilemos\Role;
use alquilemos\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //obtenemos 
        $role_user= Role::where('name','user')->first();
        $role_admin= Role::where('name','admin')->first();

        $user=new User();
        $user->name='juan';
        $user->email='juan@gmail.com';
        $user->password=bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_user);

        $user=new User();
        $user->name='admin';
        $user->email='admin@gmail.com';
        $user->password=bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);



    }
}
