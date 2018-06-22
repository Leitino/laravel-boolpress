@extends('layout')
@section('section')
  <div class="body_container">
    <form class="" action="{{route('add')}}" method="post">
      {{ csrf_field() }}
      <input type="text" name="titolo" value="" placeholder="titolo post" required>
      <input type="text" name="sotto_titolo" value="" placeholder="sotto titolo" required>
      <input type="text" name="slug" value="" placeholder="slug del post" required>
      <input type="text" name="autore" value="" placeholder="autore">
      <input type="text" name="immagine" value=""placeholder="link immagine">
      <textarea name="name" rows="8" cols="80" placeholder="testo del post"></textarea>


    </form>

  </div>

@endsection
