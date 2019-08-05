<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'rank' => 'required',
        'title' => 'required',
        'regist_num' => 'required',
        'views_num' => 'required',
        'video_num' => 'required',
        
        'ranking' => 'required',
        );
    
        
    
 }
