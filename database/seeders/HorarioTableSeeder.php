<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Seeder;

class HorarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horario::create([
            'taller_id' => 1,
            'inicio'    => '2021-09-05 14:00',
            'fin'       => '2021-09-05 16:00'
        ]);

        Horario::create([
            'taller_id' => 2,
            'inicio'    => '2021-09-05 14:00',
            'fin'       => '2021-09-05 16:00'
        ]);

        Horario::create([
            'taller_id' => 3,
            'inicio'    => '2021-09-06 14:00',
            'fin'       => '2021-09-06 16:00'
        ]);

        Horario::create([
            'taller_id' => 4,
            'inicio'    => '2021-09-06 08:00',
            'fin'       => '2021-09-06 10:00'
        ]);
    }
}
