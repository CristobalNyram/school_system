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
            'name' => 'TSU Tecnologías de la información',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrers')->insert([
            'name' => 'Procesos Bioalimentarios',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrers')->insert([
            'name' => 'Mecatrónica',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrers')->insert([
            'name' => 'Contaduría',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrers')->insert([
            'name' => 'Procesos Industriales',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
