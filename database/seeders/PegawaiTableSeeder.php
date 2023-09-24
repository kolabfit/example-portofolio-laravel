<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use App\Models\Portofolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nip' => '1234567890',
                'nama' => 'Andi',
                'nohp' => '081234567890',
                'alamat' => 'Jl. Jendral Sudirman No. 1, Jakarta Pusat',
                'porto_id' => 1,
            ],
            [
                'nip' => '9876543210',
                'nama' => 'Budi',
                'nohp' => '082134567890',
                'alamat' => 'Jl. Gatot Subroto No. 2, Jakarta Selatan',
                'porto_id' => 2,
            ],
            [
                'nip' => '1234567891',
                'nama' => 'Cici',
                'nohp' => '083134567890',
                'alamat' => 'Jl. Thamrin No. 3, Jakarta Barat',
                'porto_id' => 3,
            ],
            [
                'nip' => '9876543211',
                'nama' => 'Dedi',
                'nohp' => '084134567890',
                'alamat' => 'Jl. Merdeka No. 4, Jakarta Timur',
                'porto_id' => 4,
            ],
            [
                'nip' => '1234567892',
                'nama' => 'Edi',
                'nohp' => '085134567890',
                'alamat' => 'Jl. Juanda No. 5, Jakarta Utara',
                'porto_id' => 5,
            ],
        ];

        foreach ($data as $dataPegawai) {
            $portofolio = Portofolio::find($dataPegawai['porto_id']);

            $pegawai = new Pegawai();
            $pegawai->fill($dataPegawai);
            $pegawai->portofolio()->associate($portofolio);
            $pegawai->save();
        }
    }
}
