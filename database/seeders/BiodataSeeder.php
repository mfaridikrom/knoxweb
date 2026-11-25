<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    public function run(): void
    {
        if (Biodata::count() > 0) {
            return;
        }

        Biodata::create([
            'nama' => 'M Farid Ikrom',
            'deskripsi' => '24010110220 merupakan master dari uts ini dengan tugas membuat front-end dan mengirimkannya ke grup',
            'foto' => 'images/farid.jpg',
        ]);

        Biodata::create([
            'nama' => 'Anas Haniif Naufal',
            'deskripsi' => 'dengan NIM 24010110206 merupakan pegawai dan mempunyai tugas mengerjakan back-end pada UTS ini',
            'foto' => 'images/anas.jpg',
        ]);
    }
}
