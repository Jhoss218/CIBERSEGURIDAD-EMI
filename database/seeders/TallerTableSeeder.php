<?php

namespace Database\Seeders;

use App\Models\Taller;
use Illuminate\Database\Seeder;

class TallerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Taller::create([
            'taller'    => 'Inicio a la programación',
            'encargado' => 'Ing. Flores',
            'cupo'      => 20
        ]);

        Taller::create([
            'taller'    => 'Ataques',
            'encargado' => 'Ing. Peña',
            'cupo'      => 10
        ]);

        Taller::create([
            'taller'    => 'Vulnerabilidades',
            'encargado' => 'Ing. Zoleto',
            'cupo'      => 30
        ]);

        Taller::create([
            'taller'    => 'Ransomeware',
            'encargado' => 'Ing. Tancara',
            'cupo'      => 20
        ]);

        Taller::create([
            'taller'    => 'CTF',
            'encargado' => 'Ing. Maldonado',
            'cupo'      => 25
        ]);
    }
}
