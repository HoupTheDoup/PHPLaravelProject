<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::create([
            'name' => 'Piyan',
            'album_id' => '1'
        ]);
        Song::create([
            'name' => 'Kradets na vreme',
            'album_id' => '1'
        ]);
        Song::create([
            'name' => 'Ne te zabravyam',
            'album_id' => '1'
        ]);
        Song::create([
            'name' => 'Havana Tropicana',
            'album_id' => '2'
        ]);
        Song::create([
            'name' => 'V tvoite ochi',
            'album_id' => '2'
        ]);
        Song::create([
            'name' => 'Ot moita usta',
            'album_id' => '3'
        ]);
        Song::create([
            'name' => 'The eye of the storm',
            'album_id' => '4'
        ]);
        Song::create([
            'name' => 'Inside the fire',
            'album_id' => '5'
        ]);
        Song::create([
            'name' => 'A LIGHT THAT NEVER COMES',
            'album_id' => '6'
        ]);
        Song::create([
            'name' => 'Chalgoteka',
            'album_id' => '7'
        ]);
        Song::create([
            'name' => 'Legenda za lyobovta',
            'album_id' => '8'
        ]);

    }
}
