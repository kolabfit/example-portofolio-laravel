<?php

namespace Database\Seeders;

use App\Models\Portofolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortofolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portofolios = [
            [
                'kategori_id' => 1,
                'judul_porto' => 'Portofolio Andi',
                'tahun' => 2022,
                'deskripsi' => 'Portofolio Andi berisi kumpulan karya-karyanya dalam bidang desain grafis.',
                'url' => 'https://www.andi.com/portofolio',
            ],
            [
                'kategori_id' => 2,
                'judul_porto' => 'Portofolio Budi',
                'tahun' => 2021,
                'deskripsi' => 'Portofolio Budi berisi kumpulan karya-karyanya dalam bidang web development.',
                'url' => 'https://www.budi.com/portofolio',
            ],
            [
                'kategori_id' => 3,
                'judul_porto' => 'Portofolio Cici',
                'tahun' => 2020,
                'deskripsi' => 'Portofolio Cici berisi kumpulan karya-karyanya dalam bidang fotografi.',
                'url' => 'https://www.cici.com/portofolio',
            ],
            [
                'kategori_id' => 4,
                'judul_porto' => 'Portofolio Dedi',
                'tahun' => 2019,
                'deskripsi' => 'Portofolio Dedi berisi kumpulan karya-karyanya dalam bidang videografi.',
                'url' => 'https://www.dedi.com/portofolio',
            ],
            [
                'kategori_id' => 5,
                'judul_porto' => 'Portofolio Edi',
                'tahun' => 2018,
                'deskripsi' => 'Portofolio Edi berisi kumpulan karya-karyanya dalam bidang musik.',
                'url' => 'https://www.edi.com/portofolio',
            ],
        ];

        foreach ($portofolios as $portofolio) {
            Portofolio::create($portofolio);
        }
    }
}
