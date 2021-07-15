<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use League\CommonMark\Environment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        if (\App::environment('production')) {
            $this->call([
                UserSeeder::class,
            ]);

            return;
        }

        $this->call([
            UserSeeder::class,
            // CustomerSeeder::class,
            // TicketSeeder::class,
        ]);
    }
}
