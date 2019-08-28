<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;

class Like extends Model
{
    //use CounterCache;

    // public $counterCacheOptions = [
    //     'Post' => [
    //         'field' => 'likes_count',
    //         'foreignKey' => 'post_id'
    //     ]
    // ];

    protected $fillable = ['user_id', 'movie2_id'];


    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function movie2()
    {
      return $this->belongsTo('App\Movie2');
    }

   
}
