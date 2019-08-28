<?php

namespace App;
use App\User;
use App\Like;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Movie2 extends Model 
{
    protected $guarded = array('id');
    
    protected $table = 'movie2';
        
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public static $rules = array(
        'body' => 'required',
        );
        

    public function likes()
    {
      return $this->hasMany('App\Like');
    }

    public function like_by()
    {
      return Like::where('user_id', Auth::user()->id)->first();
    }
}
