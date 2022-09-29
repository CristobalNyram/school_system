<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cristobal',
            'first_surname' => 'Marín',
            'second_surname' => 'De los Santos',
            'role_id' => 1,
            'email' => 'admin@argon.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Alberto',
            'first_surname' => 'Gomez',
            'second_surname' => 'Olivares',
            'role_id' => 1,
            'email' => 'GomezAlbertOlivares@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('S1S73MK1R435859UM4'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Ari',
            'first_surname' => 'Mendes',
            'second_surname' => 'Mendes',
            'role_id' => 2,
            'email' => 'ari@mendes.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Antonio',
            'first_surname' => 'Tobias',
            'second_surname' => 'Huerta',
            'role_id' => 3,
            'email' => 'tobiashuerta12@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('root12p'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Francisco',
            'first_surname' => 'Flores',
            'second_surname' => 'Hernandez',
            'role_id' => 4,
            'email' => 'franciscohuerta@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('root12p'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Daniel',
            'first_surname' => 'Tenorio',
            'second_surname' => 'Hernandez',
            'role_id' => 5,
            'email' => 'danielhuerta12@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('root12p'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Marco',
            'first_surname' => 'Flores',
            'second_surname' => 'Hernandez',
            'role_id' => 6,
            'email' => 'marcohuerta12@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('root12p'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Roberto',
            'first_surname' => 'Castillo',
            'second_surname' => 'Hernandez',
            'role_id' => 7,
            'email' => 'robertohuerta12@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('root12p'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Emilio',
            'first_surname' => 'Flores',
            'second_surname' => 'Hernandez',
            'role_id' => 8,
            'email' => 'emiliohuerta12@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('root12p'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
