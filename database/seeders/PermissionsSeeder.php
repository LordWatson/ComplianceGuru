<?php

namespace Database\Seeders;

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
        $permissions = [
            ['name' => 'View Users', 'description' => 'Permission to view users', 'action' => 'view', 'module' => 'users'],
            ['name' => 'Edit Users', 'description' => 'Permission to edit users', 'action' => 'edit', 'module' => 'users'],
            ['name' => 'Delete Users', 'description' => 'Permission to delete users', 'action' => 'delete', 'module' => 'users'],
            ['name' => 'View Roles', 'description' => 'Permission to view roles', 'action' => 'view', 'module' => 'roles'],
            ['name' => 'Edit Roles', 'description' => 'Permission to edit roles', 'action' => 'edit', 'module' => 'roles'],
            ['name' => 'Delete Roles', 'description' => 'Permission to delete roles', 'action' => 'delete', 'module' => 'roles'],
            ['name' => 'View Permissions', 'description' => 'Permission to view permissions', 'action' => 'view', 'module' => 'permissions'],
            ['name' => 'Edit Permissions', 'description' => 'Permission to edit permissions', 'action' => 'edit', 'module' => 'permissions'],
            ['name' => 'Delete Permissions', 'description' => 'Permission to delete permissions', 'action' => 'delete', 'module' => 'permissions'],
        ];

        $adminRole = Role::where('name', 'Admin')->first();

        foreach ($permissions as $permissionData) {
            $permission = Permission::create($permissionData);

            // give all permissions to the admin role
            $adminRole->permissions()->attach($permission->id);
        }
    }
}
