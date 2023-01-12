<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ArtistViewController extends Controller
{
    public function artists() {
        $albums = DB::table('albums')->select('name','image', 'created_at')->get();
        $artists = DB::table('artists')->select('name', 'group')->get();

        $last_3 = DB::table('albums')->orderBy("created_at", 'desc')->select('name','image')->take(3)->get();


        return view('artist_view', ['albums' => $albums, 'artists' => $artists,
            'last_3' => $last_3]);
    }

    public function albums()
    {
        $genres_albums = DB::table('genre_album')->select('album_id','genre_id')->get();
        $genres = DB::table('genres')->select('id','name')->get();
        $songs = DB::table('songs')->select('album_id','name')->get();
        $albums = DB::table('albums')->select('id','name', 'year', 'image')->get();
        return (
        view('album_view', ['albums' => $albums, 'songs' => $songs, 'genres' => $genres, 'genres_albums' => $genres_albums] ));
    }

    public function genres()
    {
        $genres = DB::table('genres')->select('name')->get();
        return (
        view('genres_view', ['genres' => $genres]));

    }
}
