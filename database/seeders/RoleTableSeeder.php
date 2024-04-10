<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role();
        $role->Nombre = 'admin';
        $role->descripcion = 'Administrator';
        $role->save();
        $role = new Role();
        $role->Nombre = 'user';
        $role->descripcion = 'User';
        $role->save();
    }
}
