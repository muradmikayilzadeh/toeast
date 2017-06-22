<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
	protected $fillable = ['title', 'slug', 'content','img','status'];

    public function imgs(){
    	return $this->hasMany("App\Imgs","id");
    }

    public function user(){
        return $this->belongsTo('App\User','author');
    }
}
