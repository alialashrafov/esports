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
        // $this->call(UsersTableSeeder::class);
         $this->call(OyuncularTableSeeder::class);
         $this->call(KomandalarTableSeeder::class);
         $this->call(OyunlarTableSeeder::class);
         $this->call(TournamentsTableSeeder::class);
         $this->call(ChampionshipTableSeeder::class);
         $this->call(MukafatlarTableSeeder::class);

    }
}
