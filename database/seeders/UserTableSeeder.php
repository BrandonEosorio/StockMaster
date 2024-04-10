<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $role_user = Role::where('Nombre', 'user')->first();
        $role_admin = Role::where('Nombre', 'admin')->first();

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->avatar='avatar/img.png';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->avatar='avatar/img.png';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
