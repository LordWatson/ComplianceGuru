<?php

namespace Database\Seeders;

use App\Models\Organization;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $adminRole = Role::where('name', 'Admin')->first();
        $userRole = Role::where('name', 'User')->first();

        // get the orgs
        $organizations = Organization::all();

        // admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'org_id' => 1,
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
            'email_verified_at' => now(),
        ]);

        // seed a bunch of regular users into different orgs
        foreach (range(1, 10) as $index) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('password'),
                'role_id' => $userRole->id,
                'org_id' => $faker->randomElement($organizations)->id,
                'email_verified_at' => now(),
                'remember_token' => null,
            ]);
        }
    }
}
