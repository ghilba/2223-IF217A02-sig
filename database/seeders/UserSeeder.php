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
            'name' => 'Maulana Hamdani',
            'username' => 'kiriseka',
            'phone' => '08123456789',
            'email' => 'super_admin@role.test',
            'password' => bcrypt('123123')
        ]);
        $superAdmin->assignRole('super_admin');

        $admin = User::create([
            'name' => 'Admin',
            'username' => 'kirisekas',
            'phone' => '0812345789',
            'email' => 'admin@role.test',
            'password' => bcrypt('123123')
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Test User',
            'username' => 'werr',
            'phone' => '081234569',
            'email' => 'user@role.test',
            'password' => bcrypt('123123')
        ]);
        $user->assignRole('user');
    }
}
