<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewMahasiswaSeeder extends Seeder
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
                'Nim' => 2141720143,
                'Nama' => 'Muhammad Ega Rama Fernanda',
                'Tanggal_Lahir' => '12 Juli 2002',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '082340194645',
                'Email' => '2141720143@polinema.ac.id'
            ],
            [
                'Nim' => 2141720057,
                'Nama' => 'Naresh Pratista',
                'Tanggal_Lahir' => '28 Maret 2003',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '087873083096',
                'Email' => '2141720057@polinema.ac.id'
            ],
            [
                'Nim' => 2141720170,
                'Nama' => 'Ibnu Hajar Askholani',
                'Tanggal_Lahir' => '20 Agustus 2001',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '083898045398',
                'Email' => '2141720170@polinema.ac.id'
            ],
            [
                'Nim' => 2141720076,
                'Nama' => 'Muhammad Dzaka Murran Rusid',
                'Tanggal_Lahir' => '12 Juni 2003',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081237856874',
                'Email' => '2141720076@polinema.ac.id'
            ],
            [
                'Nim' => 2141720055,
                'Nama' => 'Iemaduddin',
                'Tanggal_Lahir' => '13 Agustus 2002',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '082331311947',
                'Email' => '2141720055@polinema.ac.id'
            ],
        ];
        DB::table('mahasiswas')->insert($data);
    }
}
