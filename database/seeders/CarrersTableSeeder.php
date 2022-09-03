<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carrers')->insert([
            'name' => 'TSU Tecnologías de la información Desarrollo de Software Multiplataforma',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrers')->insert([
            'name' => 'TSU Tecnologías de la información Redes y Ciberseguridad',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrers')->insert([
            'name' => 'ING: Desarrollo y Gestión de Software Multiplataforma',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrers')->insert([
            'name' => 'ING: Redes y Ciberseguridad',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
