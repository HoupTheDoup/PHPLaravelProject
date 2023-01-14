<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("albums")->insert([
            'name' => 'Da gori v lyobov',
            'year' => '2019',
            'artist_id' => '1',
            'image' => 'storage/albums/197d54c80342e85b4c0fdea68991d691.png'
        ]);
        DB::table("albums")->insert([
            'name' => 'Koy',
            'year' => '2015',
            'artist_id' => '2',
            'image' => 'storage/albums/d2d8f09b119f434fdd4b22a0df0cdb28.webp'
        ]);
        DB::table("albums")->insert([
            'name' => 'Emanuela',
            'year' => '2013',
            'artist_id' => '3',
            'image' => 'storage/albums/9cca423e9ac3a8eb0051b5d53876a894.jpg'
        ]);
        DB::table("albums")->insert([
            'name' => 'Immortalized',
            'year' => '2015',
            'artist_id' => '4',
            'image' => 'storage/albums/15258fd5278ae09d8e217138e7bacf43.jfif'
        ]);
        DB::table("albums")->insert([
            'name' => 'Indestructible',
            'year' => '2008',
            'artist_id' => '4',
            'image' => 'storage/albums/d92367a6472ccd0ef6e3b7eebf2daac8.jfif'
        ]);
        DB::table("albums")->insert([
            'name' => 'RECHARGED',
            'year' => '2013',
            'artist_id' => '5',
            'image' => 'storage/albums/ac685924afed7d3b7d24b65d09fa41d4.jpg'
        ]);
        DB::table("albums")->insert([
            'name' => 'Trap Chef',
            'year' => '2020',
            'artist_id' => '6',
            'image' => 'storage/albums/48c46f5735a070070357c5eb3f75da3b.jfif'
        ]);
        DB::table("albums")->insert([
            'name' => 'Legenda za lyobovta',
            'year' => '2019',
            'artist_id' => '7',
            'image' => 'storage/albums/e4ee99b6390b8d9e55b823ba85148b8c.jpg'
        ]);
    }
}
