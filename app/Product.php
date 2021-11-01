<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['picture']; 


    public function category() {
        return $this->belongsTo('App\Category'); 
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
