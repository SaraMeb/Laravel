@extends('layouts.base')

@section('title', 'Home')
@section('content')
    <h1>ADD SERIE</h1>
    <form class=""  action="/insertserie" method="POST">
      @csrf
      <input required placeholder="Title" type="text" name="title" value="">
      <input required placeholder="Publication Year" type="number" name="publication_year" value="">
      <select class="" name="actors">
        @foreach ($actors as $actor)
          <option value="{{ $actor->id }}">{{ $actor->completeName() }}</option>
        @endforeach
      </select>
      <select class="" name="genres">
        @foreach ($genres as $genre)
          <option value="{{ $genre->id }}">{{ $genre->name }}</option>
        @endforeach
      </select>
      <input type="submit" name="" value="Insert">
    </form>

@endsection
