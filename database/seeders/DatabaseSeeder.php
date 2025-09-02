<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Role::create([
            'role_name' => 'Super Admin'
        ]);
        Role::create([
            'role_name' => 'Admin'
        ]);
        Role::create([
            'role_name' => 'Writer'
        ]);
        User::create([
            'name' => 'Ilham Ramadan',
            'email' => 'ilhamramadan@smkprestasiprima.sch.id',
            'password' => bcrypt('PRESMA#4040'),
            'role_id' => 1,
            'image' => "default.jpg",
        ]);
    }
}
