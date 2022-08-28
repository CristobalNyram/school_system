<?php


namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RelrolmenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //menu1
        DB::table('relrolmenus')->insert([
            'menu_id' => 1,
            'role_id' => 1,
            'menu' => 1,
            'status' => 2,
        ]);
        DB::table('relrolmenus')->insert([
            'menu_id' => 1,
            'role_id' => 2,
            'status' => 2,
        ]);

        //menu2
        DB::table('relrolmenus')->insert([
            'menu_id' => 2,
            'role_id' => 1,
            'status' => 2,
        ]);
        DB::table('relrolmenus')->insert([
            'menu_id' => 2,
            'role_id' => 2,
            'status' => 2,
        ]);

        //menu3
        DB::table('relrolmenus')->insert([
            'menu_id' => 3,
            'role_id' => 1,
            'status' => 2,
        ]);
        DB::table('relrolmenus')->insert([
            'menu_id' => 3,
            'role_id' => 2,
            'status' => 2,
        ]);


        //menu4
        DB::table('relrolmenus')->insert([
            'menu_id' => 4,
            'role_id' => 1,
            'status' => 2,
        ]);
        DB::table('relrolmenus')->insert([
            'menu_id' => 4,
            'role_id' => 2,
            'status' => 2,
        ]);

        //menu5
        DB::table('relrolmenus')->insert([
            'menu_id' => 5,
            'role_id' => 1,
            'status' => 2,
        ]);
        DB::table('relrolmenus')->insert([
            'menu_id' => 5,
            'role_id' => 2,
            'status' => 2,
        ]);

    }
}
