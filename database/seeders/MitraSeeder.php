<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Mitra;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mitra::create([
            'name' => 'Mitra 1',
            'slug' => Str::slug('Mitra 1') . '-' . uniqid(),
            'status' => 'aktif',
            'business_type' => 'Retail',
        ]);

        Mitra::create([
            'name' => 'Mitra 2',
            'slug' => Str::slug('Mitra 2') . '-' . uniqid(),
            'status' => 'nonaktif',
            'business_type' => 'Wholesale',
        ]);

        Mitra::create([
            'name' => 'Mitra 3',
            'slug' => Str::slug('Mitra 3') . '-' . uniqid(),
            'status' => 'aktif',
            'business_type' => 'Distributor',
        ]);
    }
}
