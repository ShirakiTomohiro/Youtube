<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie2;
use Auth;


class Movie2Controller extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', array('except' => 'index'));
    }

    public function show($id) {
      $movie2 = Movie2::findOrFail($id);
     
           
      $like = $movie2->likes()->where('user_id', Auth::user()->id)->first();

      return view('news.index')
    }
}
