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
    public function add(Request $request){
      if ($request-> method()=='GET'){
        $posts = post::all();
        return view('add', ['posts' =>$posts]);
      }
      elseif ($request->method()=='POST') {
        $post = new post();
        $post->titolo = $request->input('titolo');
        $post->sotto_titolo = $request->input('sotto_titolo');
        $post->content = $request->input('content');
        $post->slug = $request->input('slug');
        $post->autore = $request->input('autore');
        $post->immagine = $request->input('immagine');
        $post->save();
        return redirect()->route('home');
      }
    }
    public function show($id){
      $postVisionato = post::where('id', $id)->first();
      if ($postVisionato == null)
        abort(404);
      return view('post_dettaglio',['post'=>$postVisionato]);
    }
    public function edit(Request $request, $id){
      $post = post::find($id);
      if ($request->method()=='GET') {
        return view('edit', ['post'=>$post]);
      }
      elseif ($request->method()=='POST') {
        $post->titolo = $request->input('titolo');
        $post->sotto_titolo = $request->input('sotto_titolo');
        $post->content = $request->input('content');
        $post->slug = $request->input('slug');
        $post->immagine = $request->input('immagine');
        $post->autore = $request->input('autore');

        $post->save();
        return redirect('home');

      }
    }
    public function delete(Request $request, $id){
      $post = post::find($id);

      $post->delete();
      return redirect('home');
    }
}
