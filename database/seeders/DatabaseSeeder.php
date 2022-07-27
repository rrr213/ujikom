<?php

namespace Database\Seeders;
use App\Models\produk;
use App\Models\kategori;

use Illuminate\Database\Seeder;

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
        $kategori=kategori::create([
            'name'=>'makanan'
        ]);
        $kategori=kategori::create([
            'name'=>'minuman'
        ]);
        $kategori=kategori::create([
            'name'=>'aksesoris'
        ]);

        produk::create([
            'kategori_id'=>1,
            'name'=>'Apple Pro Max',
            'harga'=>2000000,
            'foto'=>'ip.jpg'
        ]);
    }
}
