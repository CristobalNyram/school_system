<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsors')->insert([
            'name' => 'COOMING SOON',
            'slogan' => 'HAZLODIFERENTE',
            'url_img' => 'argon/sponsor/1665094651-Patrocinadores2.jpg',
            
        ]);
        DB::table('sponsors')->insert([
            'name' => 'COOMING SOON',
            'slogan' => 'HAZLODIFERENTE',
            'url_img' => 'argon/sponsor/1665094651-Patrocinadores2.jpg',
            
        ]);
        DB::table('sponsors')->insert([
            'name' => 'COOMING SOON',
            'slogan' => 'HAZLODIFERENTE',
            'url_img' => 'argon/sponsor/1665094651-Patrocinadores2.jpg',
            
        ]);
        DB::table('sponsors')->insert([
            'name' => 'COOMING SOON',
            'slogan' => 'HAZLODIFERENTE',
            'url_img' => 'argon/sponsor/1665094651-Patrocinadores2.jpg',
            
        ]);
        DB::table('sponsors')->insert([
            'name' => 'COOMING SOON',
            'slogan' => 'HAZLODIFERENTE',
            'url_img' => 'argon/sponsor/1665094651-Patrocinadores2.jpg',
            
        ]);

    }
}
