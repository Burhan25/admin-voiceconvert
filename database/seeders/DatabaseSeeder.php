<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            PaketSeeder::class,
            UserSeeder::class,
            EventCategorySeeder::class,
            AlatSeeder::class,
            ProductSeeder::class,
        ]);
    }
}