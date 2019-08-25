<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie2 extends Model 
{
    protected $guarded = array('user_id');
    
    protected $table = 'movie2';
        
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public static $rules = array(
        'body' => 'required',
        );
}
