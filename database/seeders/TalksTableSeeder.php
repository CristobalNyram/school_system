<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TalksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('talks')->insert([
            'name' => '¿Porque estudiar Programación?',
            'description' => 'Introducción a HTML desde 0',
            'date' => '25 de Noviembre del 2022',
            'time' => '25 de Noviembre del 2022',
            'url_img' => 'ruta',
            'speaker_id' => 1,
            'created_at' => now(),
        ]);
    }
}
