<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Classification::insert([
            [
                'code' => 'ADM',
                'type' => 'Administrasi',
                'description' => 'Jenis surat yang berkaitan dengan administrasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'DINAS',
                'type' => 'Dinas',
                'description' => 'Jenis surat yang berkaitan dengan dinas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'NOTADINAS',
                'type' => 'Nota Dinas',
                'description' => 'Jenis surat yang berkaitan dengan nota dinas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'MEMO',
                'type' => 'Memo',
                'description' => 'Jenis surat yang berkaitan dengan memo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'SURATPENGANTAR',
                'type' => 'Surat Pengantar',
                'description' => 'Jenis surat yang berkaitan dengan surat pengantar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'SURATEDARAN',
                'type' => 'Surat Edaran',
                'description' => 'Jenis surat yang berkaitan dengan surat edaran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'SURATUNDANGAN',
                'type' => 'Surat Undangan',
                'description' => 'Jenis surat yang berkaitan dengan surat undangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'SURATTUGAS',
                'type' => 'Surat Tugas',
                'description' => 'Jenis surat yang berkaitan dengan surat tugas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'SURATKUASA',
                'type' => 'Surat Kuasa',
                'description' => 'Jenis surat yang berkaitan dengan surat kuasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'SURATPERNYATAAN',
                'type' => 'Surat Pernyataan',
                'description' => 'Jenis surat yang berkaitan dengan surat pernyataan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'SURATPENGUMUMAN',
                'type' => 'Surat Pengumuman',
                'description' => 'Jenis surat yang berkaitan dengan surat pengumuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'SURATKETERANGAN',
                'type' => 'Surat Keterangan',
                'description' => 'Jenis surat yang berkaitan dengan surat keterangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'BERITAACARA',
                'type' => 'Berita Acara',
                'description' => 'Jenis surat yang berkaitan dengan berita acara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
