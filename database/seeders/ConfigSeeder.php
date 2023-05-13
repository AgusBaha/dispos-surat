<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Config::insert([
            [
                'code' => 'default_password',
                'value' => 'user',
            ],
            [
                'code' => 'page_size',
                'value' => '5',
            ],
            [
                'code' => 'app_name',
                'value' => 'Aplikasi Surat Menyurat',
            ],
            [
                'code' => 'institution_name',
                'value' => 'Institut Kesehatan dan Bisnis Surabaya',
            ],
            [
                'code' => 'institution_address',
                'value' => 'Jl. Medokan Semampir Indah No.27,',
            ],
            [
                'code' => 'institution_phone',
                'value' => '085238363336',
            ],
            [
                'code' => 'institution_email',
                'value' => 'info@ikbis.ac.id',
            ],
            [
                'code' => 'language',
                'value' => 'id',
            ],
            [
                'code' => 'pic',
                'value' => 'Agus Baharudin',
            ],
        ]);
    }
}
