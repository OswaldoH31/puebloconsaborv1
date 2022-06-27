<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = Rol::create([
            'name'=> 'Administrador',
        ]);

        $Proveedor = Rol::create([
            'name'=> 'Proveedor',
        ]);

        $Usuario = Rol::create([
            'name'=> 'Usuario',
        ]);
    }
}
