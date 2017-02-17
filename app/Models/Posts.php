<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //restricts columns from modifying
    protected $guarded = [];
    //posts has many comments
    //returns all comments on that post
    public function comments()
    {
    	return $this->hasMany('App\Comments', 'on_post');
    }
    //returns instance of user who is author of post
    public function author()
    {
    	return $this->belongsTo('App\User', 'author_id');
    }
}
