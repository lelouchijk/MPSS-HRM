<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'createUser']);
        Permission::create(['name'=>'editUser']);
        Permission::create(['name'=>'deleteUser']);
        Permission::create(['name'=>'viewUser']);
        Permission::create(['name'=>'createRole']);
        Permission::create(['name'=>'editRole']);
        Permission::create(['name'=>'deleteRole']);
        Permission::create(['name'=>'viewRole']);
        Permission::create(['name'=>'createPermission']);
        Permission::create(['name'=>'editPermission']);
        Permission::create(['name'=>'deletePermission']);
        Permission::create(['name'=>'viewPermission']);

        Role::create(['name'=>'admin'])->givePermissionTo(Permission::all());


    }
}
