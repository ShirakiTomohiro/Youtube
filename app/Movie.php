<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //protected $primaryKey = 'null';
    //public $incrementing = false;
    protected $table = 'movie';
    protected $fillable = array('rank','thumbnail','title','regist_num','views_num','video_num','channel_url','channelId');
    
   
}
