<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Registrar todos los permisos a utilizar en el sistema 
        // Evito el factory dado que no quiero crear registros falsos.

        // Permisos sobre el Módulo de Usuarios -- los usuarios al registrarse, autométicamente se crean
        Permission::create([
            'name'          => 'Listar todos los usuarios',
            'slug'          => 'users.index',
            'description'   => 'Muestra todos los usuarios registrados en el sistema'
        ]);
        Permission::create([
            'name'          => 'Mostrar detalle de un usuario',
            'slug'          => 'users.show',
            'description'   => 'Muestra los detalles específicos de un usuario registrado en el sistema'
        ]);
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Edita cualquier dato referente a un usuario registrado en el sistema'
        ]);
        Permission::create([
            'name'          => 'Eliminar usuarios',
            'slug'          => 'users.destroy',
            'description'   => 'Elimina cualquier usuario registrado en el sistema'
        ]);

        // Permisos sobre el Módulo Productos
        Permission::create([
            'name'          => 'Listar todos los productos',
            'slug'          => 'products.index',
            'description'   => 'Muestra todos los productos registrados en el sistema'
        ]);
        Permission::create([
            'name'          => 'Mostrar detalle de un producto',
            'slug'          => 'products.show',
            'description'   => 'Muestra los detalles específicos de un producto registrado en el sistema'
        ]);
        Permission::create([
            'name'          => 'Registraar productos',
            'slug'          => 'products.create',
            'description'   => 'Registra cualquier producto en el sistema'
        ]);
        Permission::create([
            'name'          => 'Edición de productos',
            'slug'          => 'products.edit',
            'description'   => 'Edita cualquier dato referente a un producto registrado en el sistema'
        ]);
        Permission::create([
            'name'          => 'Eliminar productos',
            'slug'          => 'products.destroy',
            'description'   => 'Elimina cualquier producto registrado en el sistema'
        ]);

        // Permisos sobre el Módulo Roles
        Permission::create([
            'name'          => 'Listar todos los roles',
            'slug'          => 'roles.index',
            'description'   => 'Muestra todos los roles registrados en el sistema'
        ]);
        Permission::create([
            'name'          => 'Mostrar detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Muestra los detalles específicos de un rol registrado en el sistema'
        ]);
        Permission::create([
            'name'          => 'Registraar roles',
            'slug'          => 'roles.create',
            'description'   => 'Registra cualquier rol en el sistema'
        ]);
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Edita cualquier dato referente a un rol registrado en el sistema'
        ]);
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Elimina cualquier rol registrado en el sistema'
        ]);
    }
}
