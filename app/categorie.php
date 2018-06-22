<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
  public function posts(){
    return $this->belongsToMany('App\post');
  }
}
