<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
            'mobile_number' => '123456',
            'role' => 1,
            'created_at' => time(),
            'updated_at' => time()
        ]);
    }
}
