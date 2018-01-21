<?php

use Illuminate\Database\Seeder;

class tugastemplate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        	['nama_bobotoh_aktif'=>'Robi','jumlah_poin'=>'356','nomor_KTA'=>'22544'],
        	['nama_bobotoh_aktif'=>'Gahtan','jumlah_poin'=>'450','nomor_KTA'=>'34344'],
        	['nama_bobotoh_aktif'=>'Dani','jumlah_poin'=>'615','nomor_KTA'=>'73535'],
        	['nama_bobotoh_aktif'=>'Daud','jumlah_poin'=>'743','nomor_KTA'=>'64576'],
        	['nama_bobotoh_aktif'=>'Loser','jumlah_poin'=>'256','nomor_KTA'=>'63765']
        ];
        DB::table('tugas')->insert($a);
    }
}
