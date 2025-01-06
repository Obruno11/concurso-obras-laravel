<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Obra;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        Obra::factory(10)->create();
    }
}
