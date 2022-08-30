<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //here is for run all seeders
        $this->call([ActionsTableSeeder::class]);
        $this->call([ConfigurationsTableSeeder::class]);
        $this->call([MenusTableSeeder::class]);
        $this->call([RolesTableSeeder::class]);
        $this->call([RelrolmenuTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([CoursesTableSeeder::class]);
        
    }

}
