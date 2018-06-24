@extends('layout')
@section('header')
  <h1>aggiungi o modifica</h1>

@endsection
@section('section')
  <div class="body_container">
    <div class="post-add">

    </div>
    <form class="" action="{{route('add')}}" method="post">
      {{ csrf_field() }}
      <div class="">
        <input type="submit" name="" value="aggiungi nuovo post">
      </div>

      <input type="text" name="titolo" value="" placeholder="titolo post" required>
      <input type="text" name="sotto_titolo" value="" placeholder="sotto titolo" required>
      <input type="text" name="slug" value="" placeholder="slug del post" required>
      <input type="text" name="autore" value="" placeholder="autore">
      <input type="text" name="immagine" value=""placeholder="link immagine">
      <textarea name="content" rows="8" cols="80" placeholder="testo del post"></textarea>

    </form>
    <div class="post-edit">
      <h1>modifica i post</h1>

    </div>
    @foreach ($posts as $post)
      <div class="post">
        <div class="post_img">
          <img src="{{$post['immagine']}}" alt="">
        </div>
        <div class="post_testo">
          <h3>{{$post['titolo']}}</h3>
          <p>{{$post['content']}}</p>
          <div class="modifica">
            <a href="{{route('edit', ['id'=> $post['id']])}}"><span>modifica</span></a>  <a href="{{route('delete', ['id'=>$post['id']])}}"><span>elimina</span></a>
          </div>


        </div>

      </div>
    @endforeach

  </div>

@endsection
