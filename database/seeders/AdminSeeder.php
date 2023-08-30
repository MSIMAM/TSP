<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::create([
            'uuid'=>Str::orderedUuid(),
            'name'=>'Ms Imam',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('password'),
            'profile'=>'user.avif',
            'status'=>'Active'
        ]);

        $writer = User::create([
            'uuid'=>Str::orderedUuid(),
            'name'=>'writer',
            'email'=>'writer@writer.com',
            'password'=>bcrypt('password'),
            'profile'=>'user.avi',
            'status'=>'Active'
        ]);


        $super_admin_role = Role::create(['name' => 'super admin', 'created_by' => 'Mubarak salisu imam']);
        $admin_role = Role::create(['name' => 'admin', 'created_by' => 'Mubarak salisu imam']);
        $writer_role = Role::create(['name' => 'writer', 'created_by' => 'Mubarak salisu imam']);


        $permission = Permission::create(['name' => 'Role access', 'created_by' => 'Mubarak salisu imam']);
        $permission = Permission::create(['name' => 'Role edit', 'created_by' => 'Mubarak salisu imam']);
        $permission = Permission::create(['name' => 'Role create', 'created_by' => 'Mubarak salisu imam']);
        $permission = Permission::create(['name' => 'Role delete', 'created_by' => 'Mubarak salisu imam']);

        $permission = Permission::create(['name' => 'User access', 'created_by' => 'Mubarak salisu imam']);
        $permission = Permission::create(['name' => 'User edit', 'created_by' => 'Mubarak salisu imam']);
        $permission = Permission::create(['name' => 'User create', 'created_by' => 'Mubarak salisu imam']);
        $permission = Permission::create(['name' => 'User delete', 'created_by' => 'Mubarak salisu imam']);

        $permission = Permission::create(['name' => 'Permission access', 'created_by' => 'Mubarak salisu imam']);
        $permission = Permission::create(['name' => 'Permission edit', 'created_by' => 'Mubarak salisu imam']);
        $permission = Permission::create(['name' => 'Permission create', 'created_by' => 'Mubarak salisu imam']);
        $permission = Permission::create(['name' => 'Permission delete', 'created_by' => 'Mubarak salisu imam']);

        $permission = Permission::create(['name' => 'Programme access', 'created_by' => 'Mubarak Salisu Imam']);
        $permission = Permission::create(['name' => 'Programme edit', 'created_by' => 'Mubarak Salisu Imam']);
        $permission = Permission::create(['name' => 'Programme create', 'created_by' => 'Mubarak Salisu Imam']);
        $permission = Permission::create(['name' => 'Programme delete', 'created_by' => 'Mubarak Salisu Imam']);

        $permission = Permission::create(['name' => 'Schollar access', 'created_by' => 'Mubarak Salisu Imam']);
        $permission = Permission::create(['name' => 'Schollar edit', 'created_by' => 'Mubarak Salisu Imam']);
        $permission = Permission::create(['name' => 'Schollar create', 'created_by' => 'Mubarak Salisu Imam']);
        $permission = Permission::create(['name' => 'Schollar delete', 'created_by' => 'Mubarak Salisu Imam']);


        $permission = Permission::create(['name' => 'Lectures Create', 'created_by' => 'Mubarak salisu imam']);





        $super_admin->assignRole($super_admin_role);
        $writer->assignRole($writer_role);



        $super_admin_role->givePermissionTo(Permission::all());
    }
}
