@extends('layouts.base')

@section('title', 'Home')
@section('content')
    <h1>Update one serie</h1>
    <form class=""  action="/updateserieaction" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $serie->id }}">
      <input required type="text" name="title" value="{{ $serie->title }}">
      <input required type="number" name="publication_year" value="{{ $serie->publication_year }}">
      <select multiple class="" name="actors[]">
        @foreach ($actors as $actor)
          <option value="{{ $actor->id }}"
          @foreach ($serie->actors as $serieActor)
            @if($actor->id == $serieActor->id) selected @endif
          @endforeach
            >{{ $actor->completeName() }}</option>

        @endforeach
      </select>
      <select multiple class="" name="genres[]">
        @foreach ($genres as $genre)
          <option value="{{ $genre->id }}"
          @foreach ($serie->genres as $serieGenre)
            @if($genre->id == $serieGenre->id) selected @endif
          @endforeach
            >{{ $genre->name }}</option>

        @endforeach
      </select>

      <input type="submit" name="" value="Update"></form>
@endsection
