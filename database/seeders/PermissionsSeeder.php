<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = Module::all();
        $adminRole = Role::where('name', 'Admin')->first();

        if($modules->isEmpty() || !$adminRole) return;

        $permissionsData = [];

        foreach($modules as $module){
            $moduleNameLower = strtolower($module->name);

            foreach(['view', 'edit', 'delete'] as $action){
                $permissionsData[] = [
                    'name' => ucfirst($action) . ' ' . $module->name,
                    'description' => 'Permission to ' . $action . ' ' . $module->name,
                    'action' => $action,
                    'module' => $moduleNameLower,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        Permission::insert($permissionsData);

        $permissionIds = Permission::whereIn('name', array_column($permissionsData, 'name'))->pluck('id');
        $adminRole->permissions()->sync($permissionIds);
    }
}
