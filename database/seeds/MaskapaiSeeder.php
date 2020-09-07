<?php

use Illuminate\Database\Seeder;

class MaskapaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maskapai')->insert([
            'nama_maskapai' => 'Garuda Indonesia',
            'bandara_asal' => 'Soekarno-Hatta (CGK)',
            'bandara_tujuan' => 'Husein Sastranegara (BDO)',
            'harga' => 1500000,
            'pajak' => 0.15
        ]);
    }
}
