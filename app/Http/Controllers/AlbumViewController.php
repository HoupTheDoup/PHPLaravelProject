<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumViewController extends Controller
{
    public function albums()
    {
        $genres_albums = DB::table('genre_album')->select('album_id','genre_id')->get();
        $genres = DB::table('genres')->select('id','name')->get();
        $songs = DB::table('songs')->select('album_id','name')->get();
        $albums = DB::table('albums')->select('id','name', 'year', 'image','artist_id')->get();
        $artists = DB::table('artists')->select('name', 'id')->get();
        return (
        view('album_view', ['albums' => $albums,'artists' => $artists, 'songs' => $songs, 'genres' => $genres, 'genres_albums' => $genres_albums] ));
    }
    public function searchh(Request $request)
    {
        $genres_albums = DB::table('genre_album')->select('album_id','genre_id')->get();
        $genres = DB::table('genres')->select('id','name')->get();
        $artists = DB::table('artists')->select('name', 'id')->get();
        $songs = DB::table('songs')->select('album_id','name')->get();
        $albums = DB::table('albums')->select('id','name', 'year', 'image','artist_id')->get();

//        $albums = Album::where([
//            ['name', '!=', Null],
//            [function ($query) use ($request) {
//                if (($s = $request->s)) {
//                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
//                          ->orWhere('year', 'LIKE', '%' . $s . '%')
//                        ->get();
//                }
//
//            }]
//        ])->paginate(6);

        $searchStr = $request->get('s');
        $albums = Album::orWhere('name', 'LIKE', '%' . $searchStr . '%')
            ->orWhere('year', 'LIKE', '%' . $searchStr . '%')
            ->orWhereHas('artist', function (Builder $query) use ($searchStr) {
                $query->where('name', 'like', '%' . $searchStr . '%');
            })->orWhereHas('songs', function (Builder $query) use ($searchStr) {
                $query->where('name', 'like', '%' . $searchStr . '%');
            })->orWhereHas('genres', function (Builder $query) use ($searchStr) {
                $query->where('name', 'like', '%' . $searchStr . '%');
            })->get();

        return view('album_view', ['albums' => $albums,'artists' => $artists, 'songs' => $songs, 'genres' => $genres, 'genres_albums' => $genres_albums]);
    }
}
