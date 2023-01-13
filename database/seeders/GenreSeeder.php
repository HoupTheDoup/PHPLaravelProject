<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' => 'Chalga',
            'slug' => 'chalga'
        ]);
        Genre::create([
            'name' => 'Rock',
            'slug' => 'rock'
        ]);
        Genre::create([
            'name' => 'Rap',
            'slug' => 'rap'
        ]);
        Genre::create([
            'name' => 'Hip-hop',
            'slug' => 'hip-hop'
        ]);
        Genre::create([
            'name' => 'Bulgarian music',
            'slug' => 'bulgarian_music'
        ]);
        Genre::create([
            'name' => 'Metal',
            'slug' => 'metal'
        ]);
    }
}
