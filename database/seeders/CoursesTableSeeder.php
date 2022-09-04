<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'HTML Básico',
            'description' => 'Introducción a HTML desde 0',
            'date' => '25 de Noviembre del 2022',
            'url_img' => 'ruta',
            'maximum_person' => '20 personas',
            'speaker_id' => 1,
            'created_at' => now(),
        ]);
    }
}
