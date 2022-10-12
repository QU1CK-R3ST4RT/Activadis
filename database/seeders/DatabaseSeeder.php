<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\RoleFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::factory(3)->create();
        \App\Models\Event::factory(15)->create();
        \App\Models\Reservation::factory(15)->create();
        \App\Models\User::factory(15)->create();
        \App\Models\User::factory()->create(['name' => 'admin', 'role_id' => 2, 'email' => 'admin@123.com', 'password' => Hash::make('admin123!')]);
        \App\Models\User::factory()->create(['name' => 'henk', 'role_id' => 1, 'email' => 'henk@123.com', 'password' => Hash::make('hallo')]);

    }
}
