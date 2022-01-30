<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['guard_name' => 'Admin','name' => 'edit articles']);
        Permission::create(['guard_name' => 'Admin','name' => 'delete articles']);
        Permission::create(['guard_name' => 'Admin','name' => 'add articles']);
        Permission::create(['guard_name' => 'Admin','name' => 'archive articles']);
        Permission::create(['guard_name' => 'Admin','name' => 'restore articles']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['guard_name' => 'Admin','name' => 'writer']);
        $role->givePermissionTo('edit articles');
        $role->givePermissionTo('delete articles');
        $role->givePermissionTo('add articles');
        $role->givePermissionTo('archive articles');
        $role->givePermissionTo('restore articles');

        $role3 = Role::create(['guard_name' => 'Admin','name' => 'Super-Admin']);
        $role3->givePermissionTo(Permission::all());
       
        // $admin = \App\Models\Admin::create([
        //     'name' => 'mo sadoun',
        //     'email' => 'sadoun@gmail.com',
        //     'password' => Hash::make('123456'),
        // ]);
        // $admin->assignRole($role);
        // $admin = \App\Models\Admin::create([
        //     'name' => 'mostafa ek sayeed sadoun',
        //     'email' => 'mo@gmail.com',
        //     'password' => Hash::make('123456'),
        // ]);
        $admin=\App\Models\Admin::find(1);
        $admin->assignRole($role3);
    }
}