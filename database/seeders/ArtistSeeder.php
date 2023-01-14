<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artist::create([
            'name' => 'Preslava',
            'group' => 'no'
        ]);
        Artist::create([
            'name' => 'Galena',
            'group' => 'no'
        ]);
        Artist::create([
            'name' => 'Emanuela',
            'group' => 'no'
        ]);
        Artist::create([
            'name' => 'Disturbed',
            'group' => 'Disturbed'
        ]);
        Artist::create([
            'name' => 'Linkin Park',
            'group' => 'Linkin Park'
        ]);
        Artist::create([
            'name' => 'Sezy',
            'group' => 'Sezy'
        ]);
        Artist::create([
            'name' => 'Vesko Marinov',
            'group' => 'no'
        ]);
    }
}
