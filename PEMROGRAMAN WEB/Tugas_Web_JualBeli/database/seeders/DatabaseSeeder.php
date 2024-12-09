<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(BarangSeeder::class);
        
        \App\Models\Barang::create([
            'nama' => 'Produk A',
            'stok' => 100,
            'harga' => 15000,
        ]);
        \App\Models\Barang::create([
            'nama' => 'Produk B',
            'stok' => 200,
            'harga' => 30000,
        ]);
    }
}
