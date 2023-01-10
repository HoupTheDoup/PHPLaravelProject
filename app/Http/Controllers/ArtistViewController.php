<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ArtistViewController extends Controller
{
    public function artists()
    {
        $artists = DB::table('artists')->select('name', 'group')->get();
        return (
        view('artist_view', ['artists' => $artists]));
    }

    public function albums()
    {
        $songs = DB::table('songs')->select('album_id','name')->get();
        $albums = DB::table('albums')->select('id','name', 'year', 'image')->get();
        return (
        view('album_view', ['albums' => $albums, 'songs' => $songs]));
    }

    public function genres()
    {
        $genres = DB::table('genres')->select('name')->get();
        return (
        view('genres_view', ['genres' => $genres]));

    }
}
