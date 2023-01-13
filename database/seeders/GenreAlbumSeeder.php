<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_album')->insert([
            'album_id' => '1',
            'genre_id' => '1'
        ]);
        DB::table('genre_album')->insert([
            'album_id' => '2',
            'genre_id' => '1'
        ]);
        DB::table('genre_album')->insert([
            'album_id' => '3',
            'genre_id' => '1'
        ]);
        DB::table('genre_album')->insert([
            'album_id' => '4',
            'genre_id' => '2'
        ]);
        DB::table('genre_album')->insert([
            'album_id' => '5',
            'genre_id' => '2'
        ]);
        DB::table('genre_album')->insert([
            'album_id' => '5',
            'genre_id' => '6'
        ]);
        DB::table('genre_album')->insert([
            'album_id' => '6',
            'genre_id' => '2'
        ]);
        DB::table('genre_album')->insert([
            'album_id' => '7',
            'genre_id' => '3'
        ]);
        DB::table('genre_album')->insert([
            'album_id' => '8',
            'genre_id' => '5'
        ]);
    }
}
