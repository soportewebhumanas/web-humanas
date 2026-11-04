<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create default permissions
        Permission::create(['name' => 'list programas']);
        Permission::create(['name' => 'view programas']);
        Permission::create(['name' => 'create programas']);
        Permission::create(['name' => 'update programas']);
        Permission::create(['name' => 'delete programas']);

        Permission::create(['name' => 'list publicacion']);
        Permission::create(['name' => 'view publicacion']);
        Permission::create(['name' => 'create publicacion']);
        Permission::create(['name' => 'update publicacion']);
        Permission::create(['name' => 'delete publicacion']);

        Permission::create(['name' => 'list llamadosSeleccion']);
        Permission::create(['name' => 'view llamadosSeleccion']);
        Permission::create(['name' => 'create llamadosSeleccion']);
        Permission::create(['name' => 'update llamadosSeleccion']);
        Permission::create(['name' => 'delete llamadosSeleccion']);

        Permission::create(['name' => 'list pasantias']);
        Permission::create(['name' => 'view pasantias']);
        Permission::create(['name' => 'create pasantias']);
        Permission::create(['name' => 'update pasantias']);
        Permission::create(['name' => 'delete pasantias']);

        Permission::create(['name' => 'list noticias']);
        Permission::create(['name' => 'view noticias']);
        Permission::create(['name' => 'create noticias']);
        Permission::create(['name' => 'update noticias']);
        Permission::create(['name' => 'delete noticias']);

        Permission::create(['name' => 'list modalidades']);
        Permission::create(['name' => 'view modalidades']);
        Permission::create(['name' => 'create modalidades']);
        Permission::create(['name' => 'update modalidades']);
        Permission::create(['name' => 'delete modalidades']);

        Permission::create(['name' => 'list lugares']);
        Permission::create(['name' => 'view lugares']);
        Permission::create(['name' => 'create lugares']);
        Permission::create(['name' => 'update lugares']);
        Permission::create(['name' => 'delete lugares']);

        Permission::create(['name' => 'list tiposeventos']);
        Permission::create(['name' => 'view tiposeventos']);
        Permission::create(['name' => 'create tiposeventos']);
        Permission::create(['name' => 'update tiposeventos']);
        Permission::create(['name' => 'delete tiposeventos']);

        Permission::create(['name' => 'list tiposcursos']);
        Permission::create(['name' => 'view tiposcursos']);
        Permission::create(['name' => 'create tiposcursos']);
        Permission::create(['name' => 'update tiposcursos']);
        Permission::create(['name' => 'delete tiposcursos']);

        Permission::create(['name' => 'list eventos']);
        Permission::create(['name' => 'view eventos']);
        Permission::create(['name' => 'create eventos']);
        Permission::create(['name' => 'update eventos']);
        Permission::create(['name' => 'delete eventos']);

        Permission::create(['name' => 'list cursos']);
        Permission::create(['name' => 'view cursos']);
        Permission::create(['name' => 'create cursos']);
        Permission::create(['name' => 'update cursos']);
        Permission::create(['name' => 'delete cursos']);

        // Create user role and assign existing permissions
        $currentPermissions = Permission::all();
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo($currentPermissions);

        // Create admin exclusive permissions
        Permission::create(['name' => 'list roles']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        Permission::create(['name' => 'list permissions']);
        Permission::create(['name' => 'view permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // Create admin role and assign all permissions
        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole->givePermissionTo($allPermissions);

        $user = \App\Models\User::whereEmail('admin@admin.com')->first();

        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}
