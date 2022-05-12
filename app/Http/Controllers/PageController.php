<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies= Movie::orderBy('title','asc')->get();

        $data=[
            "movie"=> new Movie(),//ctrl + spazio per creare use app\Movie
            "movies"=> $movies,
        ];
        return view('movies.index',$data);
    }
}
