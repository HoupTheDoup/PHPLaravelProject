<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $artists = DB::table('artists')->select('name','group')->get();

        return view('index', [
            'title' => 'Laravel Project',
            'text' => '<p>
                        {{ $artists }}
            </p>',
            'imgURL' => 'assets/images/about/about-part.jpg',
        ]);
    }
}
