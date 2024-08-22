<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndAdminSeeder extends Seeder
{
    public function run()
    {
        // Crear roles
        $adminRole = Role::create(['name' => 'admin']);
        $empleadoRole = Role::create(['name' => 'empleado']);
        $clienteRole = Role::create(['name' => 'cliente']);

        // Crear permisos
        Permission::create(['name' => 'view homepage']);
        Permission::create(['name' => 'view empleados']);
        Permission::create(['name' => 'view cliente']);
        Permission::create(['name' => 'view admin']);
        Permission::create(['name' => 'manage empleados']);
        Permission::create(['name' => 'manage clientes']);
        Permission::create(['name' => 'manage admin']);

        // Asignar permisos a roles
        $adminRole->givePermissionTo([
            'view homepage',
            'view empleados',
            'view cliente',
            'view admin',
            'manage empleados',
            'manage clientes',
            'manage admin'
        ]);

        $empleadoRole->givePermissionTo([
            'view homepage',
            'view empleados'
        ]);

        $clienteRole->givePermissionTo([
            'view homepage',
            'view cliente'
        ]);

        // Crear usuario administrador
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'melasoftcompany@gmail.com',
            'password' => bcrypt('sistemainformatico'),
        ]);

        // Asignar rol al usuario
        $admin->assignRole($adminRole);
    }
}
