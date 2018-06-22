<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class boolpressController extends Controller
{
    public function home(){
      $posts = post::all();
      return view ('home',['posts'=>$posts]);
    }
}
