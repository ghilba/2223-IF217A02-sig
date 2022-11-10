<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin =  User::create([
            'username' => 'superadmin',
            'name' => 'Super Admin',
            'email' => 'super_admin@role.test',
            'password' => bcrypt('123123')
        ]);
        $superAdmin->assignRole('super_admin');

        $admin = User::create([
            'username' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@role.test',
            'password' => bcrypt('123123')
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'username' => 'testuser',
            'phone' => '08123456789',
            'name' => 'Test User',
            'email' => 'user@role.test',
            'password' => bcrypt('123123')
        ]);

    }
    

}
