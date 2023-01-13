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

        return view('artist_view', ['albums' => $albums, 'artists' => $artists]);
    }
}
