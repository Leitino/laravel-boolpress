@extends('layout')
@section('header')
  <h1>Modifica post</h1>

@endsection
@section('section')
  <div class="body_container">
    <form class="" action="{{route('edit', ['id'=>$post['id']])}}" method="post">
      {{ csrf_field() }}
      <div class="">
        <input type="submit" name="" value="modifica post">
      </div>

      <input type="text" name="titolo" value="{{$post['titolo']}}" placeholder="titolo post" required>
      <input type="text" name="sotto_titolo" value="{{$post['sotto_titolo']}}" placeholder="sotto titolo" required>
      <input type="text" name="slug" value="{{$post['slug']}}" placeholder="slug del post" required>
      <input type="text" name="autore" value="{{$post['autore']}}" placeholder="autore">
      <input type="text" name="immagine" value="{{$post['immagine']}}"placeholder="link immagine">
      <textarea name="content" value rows="8" cols="80" placeholder="testo del post">{{$post['content']}}</textarea>

    </form>

  </div>

@endsection
