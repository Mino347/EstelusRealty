<?php

namespace Database\Seeders;

//use App\Models\House;
use App\Models\User;
use App\UserRole;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
           // 'role' => UserRole::Admin,  // Set role as Admin

        ]);

        User::factory()->create([
            'name' => 'Customer',
            'email' => 'customer@customer.com',
            'password' => bcrypt('customer123'),
            //'role' => UserRole::Customer,  // Using enum case
        ]);





    }
}
