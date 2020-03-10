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
        $This->call(PetugasSeeder::class);
        $This->call(UserSEeder::class);
    }
}
