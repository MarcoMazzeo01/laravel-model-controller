<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function homepage()
    {
        $movies = Movie::all(); //prendo tutti i film dal db
        dd($movies);
        return view('home');
    }
}
