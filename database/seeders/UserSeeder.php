<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles if they don't exist
        // $adminRole = Role::firstOrCreate(['name' => 'is_admin']);
        // $customerRole = Role::firstOrCreate(['name' => 'customer']);
        $account_id = 'ID-' . rand(1000, 99999999);

        // // Create roles if they don't exist
        // $adminRole = Role::firstOrCreate(['name' => 'is_admin']);
        // $customerRole = Role::firstOrCreate(['name' => 'customer']);

        // // Example users
        // $users = [
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@gmail.com',
        //         'password' => Hash::make('1234'),
        //         'account_id' => $account_id,
        //         'role' => 'is_admin'
        //     ],
        //     [
        //         'name' => 'Admin 2',
        //         'email' => 'admin2@gmail.com',
        //         'password' => Hash::make('1234'),
        //         'account_id' => $account_id,
        //         'role' => 'is_admin'
        //     ],
        //     [
        //         'name' => 'Admin 3',
        //         'email' => 'admin3@gmail.com',
        //         'password' => Hash::make('1234'),
        //         'account_id' => $account_id,
        //         'role' => 'is_admin'
        //     ],
        //     [
        //         'name' => 'Regular customer',
        //         'email' => 'customer@gmail.com',
        //         'password' => Hash::make('1234'),
        //         'account_id' => $account_id,
        //         'role' => 'customer'
        //     ],
        //     [
        //         'name' => 'Regular customer 2',
        //         'email' => 'customer2@gmail.com',
        //         'password' => Hash::make('1234'),
        //         'account_id' => $account_id,
        //         'role' => 'customer'
        //     ],
        //     [
        //         'name' => 'Regular customer 3',
        //         'email' => 'customer3@gmail.com',
        //         'password' => Hash::make('1234'),
        //         'account_id' => $account_id,
        //         'role' => 'customer'
        //     ],
        //     [
        //         'name' => 'Regular customer 4',
        //         'email' => 'customer4@gmail.com',
        //         'password' => Hash::make('1234'),
        //         'account_id' => $account_id,
        //         'role' => 'customer'
        //     ],
        //     [
        //         'name' => 'Regular customer 5',
        //         'email' => 'customer5@gmail.com',
        //         'password' => Hash::make('1234'),
        //         'account_id' => $account_id,
        //         'role' => 'customer'
        //     ],
        // ];

        // // Create users and assign roles
        // foreach ($users as $userData) {
        //     $account_id = 'ID-' . rand(1000, 99999999);

        //     $user = User::create([
        //         'name' => $userData['name'],
        //         'email' => $userData['email'],
        //         'password' => $userData['password'],
        //         'account_id' => $account_id,
        //     ]);
        // }

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'account_id' =>$account_id,
            'role' =>'customer',
        ]);
        $user2 = User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('1234'),
            'role' =>'customer',
        ]);
        
        $user->assignRole('admin');
        $user2->assignRole('customer');
        // // Example users
        // $users = [
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@gmail.com',
        //         'password' => Hash::make('1234'),
        // 'account_id' => $account_id,
        //         'role' => $adminRole,
        //         'account_id' => $account_id,
        //     ],
        //     [
        //         'name' => 'Regular customer',
        //         'email' => 'customer@gmail.com',
        //         'password' => Hash::make('1234'),
        // 'account_id' => $account_id,
        //         'role' => $customerRole,
        //         'account_id' => $account_id,
        //     ],
        // ];

        // // Create users and assign roles
        // foreach ($users as $userData) {
        //     $user = User::create([
        //         'name' => $userData['name'],
        //         'email' => $userData['email'],
        //         'password' => $userData['password'],
        //         'account_id' => $userData['account_id'],
        //     ]);

        //     if (isset($userData['role'])) {
        //         $user->roles()->attach($userData['role']->id);
        //     } else {
        //         // Assign 'customer' role to users without a specific role
        //         $user->roles()->attach($customerRole->id);
        //     }
        // }

    }

}
