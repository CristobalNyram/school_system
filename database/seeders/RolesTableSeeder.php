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

    }
}
