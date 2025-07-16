<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            ['name' => 'Dashboard', 'description' => 'Overview of compliance status and quick actions.'],
            ['name' => 'Assessments', 'description' => 'Run Cyber Essentials or ISO 27001 assessments.'],
            ['name' => 'Gap Analysis', 'description' => 'AI-powered compliance gap identification.'],
            ['name' => 'Policy Generator', 'description' => 'Generate compliance policies using AI.'],
            ['name' => 'Documents', 'description' => 'Upload and manage evidence documents.'],
            ['name' => 'Audit Reports', 'description' => 'Generate AI-powered audit summary reports.'],
            ['name' => 'Notifications', 'description' => 'Compliance reminders and alerts.'],
            ['name' => 'User Management', 'description' => 'Manage users and roles for your organization.'],
            ['name' => 'Settings', 'description' => 'Application and organization settings.'],
        ];

        foreach($modules as $module){
            Module::create($module);
        }
    }
}
