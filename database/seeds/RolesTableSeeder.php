<?php

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Se requiere de al menos un rol registrado para poder trabajar correctamente con el paquete Shinobi
        // Los roles con permisos especiales, pueden tener todo el acceso (permisos) o ninguno.
        Role::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'description' => 'Administrador/root del sistema',
            'special' => 'all-access'       // ver la estructura de la tabla roles -- campo enum
        ]);
    }
}
