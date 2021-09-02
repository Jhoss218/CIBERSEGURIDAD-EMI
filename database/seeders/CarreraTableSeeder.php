<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Seeder;

class CarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create(['carrera' => 'Ingeniería de Sistemas']);
        Carrera::create(['carrera' => 'Ingeniería de Sistemas Electrónicos']);
        Carrera::create(['carrera' => 'Ingeniería en Telecomunicaciones']);
        Carrera::create(['carrera' => 'Ingeniería Comercial']);
        Carrera::create(['carrera' => 'Arquitectura']);
        Carrera::create(['carrera' => 'Ingeniería Ambiental']);
        Carrera::create(['carrera' => 'Ingeniería Industrial']);
        Carrera::create(['carrera' => 'Ingeniería Civil']);
        Carrera::create(['carrera' => 'Ingeniería Agronómica']);
        Carrera::create(['carrera' => 'Derecho']);
        Carrera::create(['carrera' => 'Otra']);
    }
}
