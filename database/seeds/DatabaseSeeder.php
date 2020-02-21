<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * when update table class table in function run() *** composer dump-autoload
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
//        $this->call([TasksTableSeeder::class]);
    }
}
