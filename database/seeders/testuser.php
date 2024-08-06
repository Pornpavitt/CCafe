<?php

namespace Database\Seeders;

use App\Models\reservetable;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class testuser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'role' => 0
        ]);
        reservetable::create([
            'id'=>1,
            'tableseats'=>4,
        ]);
        reservetable::create([
            'id'=>2,
            'tableseats'=>4,
        ]);
        reservetable::create([
            'id'=>3,
            'tableseats'=>4,
        ]);
        reservetable::create([
            'id'=>4,
            'tableseats'=>4,
        ]);
        reservetable::create([
            'id'=>5,
            'tableseats'=>6,
        ]);
        reservetable::create([
            'id'=>6,
            'tableseats'=>6,
        ]);
    }
}
