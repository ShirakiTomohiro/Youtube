<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Movie2;

class YoutubeController extends Controller
{
    
    public function index(Request $request)
    {
        
        $posts = Movie2::all()->sortByDesc('updated_at');
        
       
        return view('news.index', ['posts' => $posts]);
    
    }
   
   
}
