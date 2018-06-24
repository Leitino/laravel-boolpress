@extends('layout')
@section('header')
  <h1>Boolpress Home</h1>
@endsection
@section('section')
  <div class="body_container">
    @foreach ($posts as $post)
        <div class="post">
          <div class="post_img">
            <img src="{{$post['immagine']}}" alt="">
          </div>
        <a href="{{route('show', ['id'=>$post['id']])}}">  <div class="post_testo">
            <h1>{{$post['titolo']}}</h1>
            <h3>{{$post['sotto_titolo']}}</h3>
            <p>{{!!$post['content']!!}}</p>
            <h5>{{$post['slug']}}</h5>
            <h5>{{$post['autore']}}</h5>
          </div></a>
        </div>
      @endforeach
  </div>

@endsection
