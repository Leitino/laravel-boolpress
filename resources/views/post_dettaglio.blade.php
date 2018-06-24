@extends('layout')
@section('header')
  <h1>dettaglio del post</h1>
@endsection
@section('section')
  <div class="body_container">
    <div class="post-dettaglio">
      <div class="post-dettaglio_img">
        <img src="{{$post['immagine']}}" alt="">
      </div>
      <div class="post-dettaglio_testo">
        <h1>{{$post['titolo']}}</h1>
        <h3>{{$post['sotto_titolo']}}</h3>
        <p>{{$post['content']}}</p>
        <h5>{{$post['slug']}}</h5>
        <h5>{{$post['autore']}}</h5>

      </div>
    </div>
  </div>

@endsection
