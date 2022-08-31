<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Super admin',
            'description' => 'This user have access to all actions in the system',
            'level' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'This user have access only to the school ,not access to ',
            'level' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    /*
        DB::table('roles')->insert([
            'name' => 'Student',
            'description' => 'This user has acces only for student ',
            'level' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'foreigner',
            'description' => 'This for people that in not from of the university ',
            'level' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'Speaker',
            'description' => 'This person is who speakes in the event ',
            'level' => '5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'Charger',
            'description' => 'This person is reponsible for charging money ',
            'level' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'Entry checker',
            'description' => 'This person only check de the ticket ',
            'level' => '6',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        */


    }
}
