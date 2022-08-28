<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('menus')->insert([
            'title' => 'Complementos',
            'description' => 'Contiene las configuraciones grandes',
            'menu_parent' => 0,
            'order' => 1,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Roles',
            'description' => 'Configuración',
            'menu_parent' => 1,
            'order' => 2,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Menus',
            'description' => 'Menus',
            'menu_parent' => 1,
            'order' => 3,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Usuarios',
            'description' => 'Usuarios',
            'menu_parent' => 1,
            'order' => 4,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Configuración general',
            'description' => 'Configuración de logo, titulo de la página y etc.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);
    }
}
