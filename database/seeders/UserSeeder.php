<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // Tạo admin
        User::truncate();
        User::create([
            'id' => 1,
            'code' => 'SUPER ADMIN',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123123123'),
        	'name' => 'Admin',
        	'birthday' => '2000-10-22',
        	'phone_number' => '0563047024',
        	'address' => 'Đại học Công nghệ TP.HCM',
        	'gender' => 'Nam',
        ]);
    }
}
