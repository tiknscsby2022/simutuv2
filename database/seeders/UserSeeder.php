<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::create([
            'department_id' => '1',
            'name' => 'admin',
            'password' => Hash::make('admin'),
            'is_admin' => true
        ]);
    }
}
