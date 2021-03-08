<?php

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
        // $this->call(UserSeeder::class);
<<<<<<< HEAD
        $this->call(UserSeeder::class);
=======
        $this->call(UsersTableSeeder::class);
>>>>>>> 6c2c9205aafde9a929123a665fc19cede54e1721
    }
}
