<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CoinsTableSeeder::class);
         $this->call(ExchangesTableSeeder::class);
         $this->call(MarginsTableSeeder::class);
    }
}
