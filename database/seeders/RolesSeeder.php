<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Admin',
            'description' => 'Administrator with full access',
            'level' => 1,
        ]);

        Role::create([
            'name' => 'User',
            'description' => 'Regular user with limited access',
            'level' => 2,
        ]);
    }
}
