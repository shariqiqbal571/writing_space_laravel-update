<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $account_id = 'ID-' . rand(1000, 99999999);

        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1234'), // password
            'account_id' => $account_id, // password
        ])->assignRole('customer');
        User::create([
            'name' => 'customer 1',
            'email' => 'customer1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1234'), // password
            'account_id' => $account_id, // password
        ])->assignRole('customer');

        
    }
}
