<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class TodosSeender extends Seeder
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

        $admin = User::create([
            'Nombre'=> 'Oswaldo',
            'Apellido_paterno'=> 'Hernandez',
            'Apellido_materno'=> 'Hernandez',
            'Telefono'=> '7712643939',
            'Genero'=> 'Masculino',
            'Fecha_nacimiento'=> '2001-01-31',
            'email'=> 'oz922802@gmail.com',
            'Usuario'=> 'Admin',
            'Rol_id'=> '1',
            'password'=> 'admin', 

        ]);


        $proveedor = User::create([
            'Nombre'=> 'Esmeralda',
            'Apellido_paterno'=> 'Mariano',
            'Apellido_materno'=> 'Hernandez',
            'Telefono'=> '7712643939',
            'Genero'=> 'Femenino',
            'Fecha_nacimiento'=> '2001-05-06',
            'email'=> 'emariano804@gmail.com',
            'Usuario'=> 'Esme',
            'Rol_id'=> '2',
            'password'=> '123456789', 

        ]);


        $user = User::create([
            'Nombre'=> 'Oswaldo',
            'Apellido_paterno'=> 'Hernandez',
            'Apellido_materno'=> 'Hernandez',
            'Telefono'=> '7712643939',
            'Genero'=> 'Masculino',
            'Fecha_nacimiento'=> '2001-05-06',
            'email'=> 'os310101@gmail.com',
            'Usuario'=> 'Oz',
            'Rol_id'=> '3',
            'password'=> '123456789', 

        ]);

        

    }
}
