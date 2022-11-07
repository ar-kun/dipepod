<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\News;
use App\Models\Newscategory;
use App\Models\Umkm;
use App\Models\Umkmcategory;
use App\Models\Wisata;
use GuzzleHttp\Promise\Create;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();

        Newscategory::create([
            'name' => 'Berita Terbaru',
            'slug' => 'berita-terbaru'
        ]);
        Newscategory::create([
            'name' => 'Agenda',
            'slug' => 'Agenda'
        ]);

        Umkmcategory::create([
            'name' => 'Makanan dan Minuman',
            'slug' => 'makanan-dan-minuman'
        ]);
        Umkmcategory::create([
            'name' => 'Kerajinan',
            'slug' => 'kerajinan'
        ]);
        Umkmcategory::create([
            'name' => 'Lain Lain',
            'slug' => 'lain-lain'
        ]);

        News::factory(10)->create();
        Umkm::factory(10)->create();
        Wisata::factory(10)->create();
    }
}