<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Seeder;

class CiudadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create([
            'ciudad'    => 'La Paz'
        ]);

        Ciudad::create([
            'ciudad'    => 'Cochabamba'
        ]);

        Ciudad::create([
            'ciudad'    => 'Santa Cruz'
        ]);

        Ciudad::create([
            'ciudad'    => 'Pando'
        ]);

        Ciudad::create([
            'ciudad'    => 'Beni'
        ]);

        Ciudad::create([
            'ciudad'    => 'Oruro'
        ]);

        Ciudad::create([
            'ciudad'    => 'Potosí'
        ]);

        Ciudad::create([
            'ciudad'    => 'Chuquisaca'
        ]);

        Ciudad::create([
            'ciudad'    => 'Tarija'
        ]);

        Ciudad::create([
            'ciudad'    => 'Otro'
        ]);
    }
}
