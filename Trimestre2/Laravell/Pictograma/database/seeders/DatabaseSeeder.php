<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PersonasTableSeeder::class);
        $this->call(ImagenesTableSeeder::class);
        $this->call(AgendaTableSeeder::class);
    }
}
