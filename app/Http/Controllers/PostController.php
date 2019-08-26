<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', array('except' => 'index'));
    }

    public function show($id) {
      $post = Post::findOrFail($id); // findOrFail 見つからなかった時の例外処理

      $like = $post->likes()->where('user_id', Auth::user()->id)->first();

      return view('news.index')->with(array('post' => $post, 'like' => $like));
    }
}
