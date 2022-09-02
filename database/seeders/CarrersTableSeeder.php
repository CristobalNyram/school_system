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
            'name' => 'TSU Tecnologías de la Información',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('courses')->insert([
            'name' => 'Mecatrónica',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('courses')->insert([
            'name' => 'Agricultura Sustentable',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
