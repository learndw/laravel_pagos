<?php

namespace Database\Seeders;

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
        //Ejecutar los seeders
        $this->call(PaymentPlataformsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
