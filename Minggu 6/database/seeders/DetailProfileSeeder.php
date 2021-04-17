<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Nganjuk',
            'nomor_tlp' => '085785473957',
            'ttl' => '2001-11-02',
            'foto' => 'picture.png'
        ]);
    }
}
