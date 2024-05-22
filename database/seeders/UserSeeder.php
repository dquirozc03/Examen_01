<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Administrador';
        $user->email = 'administrador@prueba.com';
        $user->password = bcrypt('administrador');
        $user->save();

        $user = new User;
        $user->name = 'Vendedor';
        $user->email = 'vendor@prueba.com';
        $user->password = bcrypt('vendor');
        $user->save();
    }
}
