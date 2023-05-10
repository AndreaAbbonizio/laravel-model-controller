<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        return  view('home');
    }

    public function index()
    {

        $movies  = Movie::all();



        return view('movie/index', compact('movies'));
    }
}
