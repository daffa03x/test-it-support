<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jabatan::create([
            'nama' => 'manager'
        ]);
        Jabatan::create([
            'nama' => 'staff'
        ]);
        Jabatan::create([
            'nama' => 'kontrak'
        ]);
        Jabatan::create([
            'nama' => 'magang'
        ]);
    }
}
