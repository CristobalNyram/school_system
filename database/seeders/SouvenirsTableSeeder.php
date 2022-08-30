<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class SouvenirsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('souvenirs')->insert([
            'name' => 'Termo',
            'price' => '300',
            'description' => 'Termo de capacidad de 2L',
            'url_img' => 'url_img',
            
        ]);

        DB::table('souvenirs')->insert([
            'name' => 'Playera',
            'price' => '500',
            'description' => 'Playera mango corta con diseño de FreedomDay',
            'url_img' => 'url_img',
        ]);
    }
}
