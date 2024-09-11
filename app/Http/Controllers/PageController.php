<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Recupera tutti i film dal database
        $movies = Movie::all();

        // Passa i film alla vista
        return view('home', compact('movies'));
    }

    public function filterByNationality($nationality)
    {
        // prende i film con la nazionalita
        $movies = Movie::where('nationality', $nationality)->get();

        // ritorna i film filtrati alla view home
        return view('home', compact('movies'));
    }

    public function filterByVote($vote)
    {
        // prende i film con voto maggiore o uguale a quello specificato
        $movies = Movie::where('vote', '>=', $vote)->get();

        // ritorna i film filtrati alla view
        return view('home', compact('movies'));
    }
}
