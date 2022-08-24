<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'name' => 'Super admin',
            'description' => 'This user have access to all actions in the system',
            'level' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
