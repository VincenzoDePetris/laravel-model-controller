<?php

namespace App\Http\Controllers;

use App\models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function homepage()
    {
        $movies = Movie::all();
        return view('homepage', compact('movies'));
    }
}
