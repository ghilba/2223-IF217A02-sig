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
            'nip' => '1197050066',
            'name' => 'Maulana Hamdani',
            'email' => 'super_admin@role.test',
            'password' => bcrypt('123123')
        ]);
        $superAdmin->assignRole('super_admin');

        $admin = User::create([
            'nip' => '441233',
            'name' => 'Admin',
            'email' => 'admin@role.test',
            'password' => bcrypt('123123')
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'nip' => '123456789',
            'dosen_id' => '3',
            'name' => 'Test User',
            'email' => 'user@role.test',
            'password' => bcrypt('123123')
        ]);
        $user->assignRole('user');
    }
}
