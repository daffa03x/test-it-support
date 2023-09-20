<?php

namespace Database\Seeders;

use App\Models\Atasan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Atasan::create([
            'nama' => 'grade 1',
        ]);
        Atasan::create([
            'nama' => 'grade 2',
        ]);
        Atasan::create([
            'nama' => 'grade 3',
        ]);
    }
}
