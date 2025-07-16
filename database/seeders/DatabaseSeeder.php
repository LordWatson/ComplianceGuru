<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ModuleSeeder::class,
            SubscriptionPlanSeeder::class,
            OrganizationsSeeder::class,
            RolesSeeder::class,
            PermissionsSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
