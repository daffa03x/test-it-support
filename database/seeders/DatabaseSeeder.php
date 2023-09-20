<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\Atasan::factory()->create([
        //     'name' => 'Test User',
        // ]);
        $this->call(AtasanSeeder::class);
        $this->call(JabatanSeeder::class);
    }
}
