<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombres'               => 'Charlie',
            'paterno'               => 'Seoane',
            'materno'               => 'Sánchez',
            'email'                 => 'charlie@hotmail.com',
            'ano_nacimiento'        => '1983',
            'password'              => bcrypt(Str::random('10')),
            'universidad'           => 'EMI',
            'telefono'              => 59167677566,
            'genero'                => 'm',
            'ciudad_id'             => 1,
            'pais_id'               => 3,
            'carrera_id'            => 1
        ]);

        User::create([
            'nombres'               => 'Carla',
            'paterno'               => 'Seoane',
            'email'                 => 'carla@hotmail.com',
            'ano_nacimiento'        => '2000',
            'password'              => bcrypt(Str::random('10')),
            'universidad'           => 'UMSA',
            'telefono'              => 59167677545,
            'genero'                => 'f',
            'ciudad_id'             => 3,
            'pais_id'               => 10,
            'carrera_id'            => 2
        ]);

        User::create([
            'nombres'               => 'Pedro',
            'email'                 => 'pedro@hotmail.com',
            'ano_nacimiento'        => '2002',
            'password'              => bcrypt(Str::random('10')),
            'universidad'           => 'EMI',
            'telefono'              => 59167237545,
            'genero'                => 'm',
            'ciudad_id'             => 4,
            'pais_id'               => 20,
        ]);
    }
}
