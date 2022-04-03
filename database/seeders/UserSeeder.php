<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Demo user
        User::create([
            'name' => 'John Doe',
            'email' => 'demo@demo.com',
            'password' => Hash::make('demo'),
            'is_admin' => 1,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        // Fake users
        User::factory(9)->create();
    }
}
