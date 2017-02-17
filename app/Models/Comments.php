<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //comments table in database
    public $guarded = [];
    //user who has commented
    public function author()
    {
    	return $this->belongsTo('App\User', 'from_user');
    }
    //returns post of any comment
    public function post()
    {
    	return $this->belongsTo('App\Posts', 'on_post');
    }
}
