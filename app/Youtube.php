<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'rank' => 'required',
        
        );
 }
