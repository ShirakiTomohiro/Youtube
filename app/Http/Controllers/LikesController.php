<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Like;
use Auth;
use App\Movie2;

class LikesController extends Controller
{
    public function store(Request $request)
    {
      
        $like = new Like;
        
        $like->user_id = Auth::user()->id;
        $like->product_id = $request->id;
        
        $movie2 = Movie2::find($request->id);
        $user = User::find($movie2->user_id);
        
        $like->save();
        
        return view('news.index');
        
}
