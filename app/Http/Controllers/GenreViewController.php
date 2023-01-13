<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreViewController extends Controller
{
    public function genres()
    {
        $genres = DB::table('genres')->select('name')->get();
        $i = 1;
        return (
        view('genres_view', ['genres' => $genres, 'i' => $i]));

    }
}
