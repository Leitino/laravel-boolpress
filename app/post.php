<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function categories(){
      return $this->belongsToMany('App\categorie');
    }
}
