<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;

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
        User::create([
            'name' => 'admin1',
            'email' => 'aa@example.com',
            'password' => bcrypt('aaaaaa')
        ]);

        Order::factory(150)->create();
    }
}
