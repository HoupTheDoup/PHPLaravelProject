<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $albums = DB::table('albums')->select('name','image', 'created_at')->get();
     //   $artists = DB::table('artists')->select('name', 'group')->get();

        $last_3 = DB::table('albums')->orderBy("created_at", 'desc')->select('name','image')->take(3)->get();


        return view('index', ['albums' => $albums,
                                    'last_3' => $last_3]);
    }
    public function artists()
    {
        $artists = DB::table('artists')->select('name', 'group')->get();
        return (
        view('index', ['artists' => $artists]));
    }


}
