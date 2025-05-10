<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        Usuario::insert([
            [
                'nombre' => 'Diego',
                'apellido' => 'Moya',
                'edad' => 28,
                'requerimiento' => 'Soporte técnico para computadora HP',
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Martínez',
                'edad' => 32,
                'requerimiento' => 'Instalación de software antivirus.',
            ],
            [
                'nombre' => 'Luis',
                'apellido' => 'Gómez',
                'edad' => 25,
                'requerimiento' => 'Mantenimiento preventivo switches Cisco',
            ],
            [
                'nombre' => 'Carla',
                'apellido' => 'Rodríguez',
                'edad' => 29,
                'requerimiento' => 'Revisión de parámetros de Palo Alto.',
            ],
        ]);
    }
}

