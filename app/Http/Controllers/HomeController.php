<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function home () {

        // $newMovie = new Movie();
        // $newMovie->title = 'Il Padrino';
        // $newMovie->original_title = 'The Godfather';
        // $newMovie->nationality = 'american';
        // $newMovie->date = '1972-03-24';
        // $newMovie->vote = 9.2;

        // $newMovie->save();

        

        $moviesData = Movie::all();


        return view('home', compact('moviesData'));
    }
}
