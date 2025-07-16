<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organization;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscriptionPlanIds = [1, 2, 3];

        Organization::create([
            'name' => 'TechCorp',
            'industry' => 'Technology',
            'size' => 500,
            'plan_id' => $subscriptionPlanIds[0],
        ]);

        Organization::create([
            'name' => 'EcoTech',
            'industry' => 'Technology',
            'size' => 150,
            'plan_id' => $subscriptionPlanIds[1],
        ]);

        Organization::create([
            'name' => 'HealthTech',
            'industry' => 'Technology',
            'size' => 200,
            'plan_id' => $subscriptionPlanIds[2],
        ]);
    }
}
