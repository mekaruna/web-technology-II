<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'type' => 1,
            'username' => 'imanilchaudhari',
            'mobile' => '9849643436',
            'email' => 'imanilchaudhari@gmail.com',
            'password' => Hash::make('123456'),
            'display_name' => 'Anil Chaudhari',
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        User::factory()->count(10)->create();
    }
}
