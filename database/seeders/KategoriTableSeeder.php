<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoris = [
            ['nama_kat' => 'Desain Grafis'],
            ['nama_kat' => 'Web Development'],
            ['nama_kat' => 'Fotografi'],
            ['nama_kat' => 'Videografi'],
            ['nama_kat' => 'Musik'],
        ];

        foreach ($kategoris as $kategori) {
            Kategori::create($kategori);
        }
    }
}
