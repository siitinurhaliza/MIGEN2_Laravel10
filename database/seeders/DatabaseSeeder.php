<?php

namespace Database\Seeders;

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
        $this->call([
            TypeUserSeeder::class,
            ConsultationSeeder::class,
            ConfigPaymentSeeder::class,
            SpecialistSeeder::class,
        ]);
    }
}
