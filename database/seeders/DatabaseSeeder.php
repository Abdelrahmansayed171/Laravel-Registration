<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Customer::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Customer::create([
        //     'full_name' => 'Abdelrahman Sayed',
        //     'username' => 'Orca',
        //     'email' => 'orcawy@gmail.com',
        //     'password' => '12345678',
        //     'address' => 'Giza',
        //     'birthdate' => '2002-09-23',
        //     'phone' => '01128717264'
        // ]);

        // Customer::create([
        //     'full_name' => 'Seif El-Din Mohammed',
        //     'username' => 'Luci',
        //     'email' => 'Lucifer@gmail.com',
        //     'password' => '12345678',
        //     'address' => 'Cairo',
        //     'birthdate' => '2002-09-27',
        //     'phone' => '01533717264'
        // ]);

        // Customer::create([
        //     'full_name' => 'omar Sayed',
        //     'username' => 'Eummar',
        //     'email' => 'Eummar@gmail.com',
        //     'password' => '12345678',
        //     'address' => 'Giza',
        //     'birthdate' => '2006-03-23',
        //     'phone' => '01533777264'
        // ]);
        
    }
}
