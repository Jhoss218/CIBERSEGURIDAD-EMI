<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CiudadTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(CarreraTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TallerTableSeeder::class);
        $this->call(HorarioTableSeeder::class);
    }
}
