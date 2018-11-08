@extends('layouts.base')

@section('title', 'Home')
@section('content')
    <h1>MES SERIES</h1>
    <div class="tableau">
      <table>
        <tr>
          <th>Title</th>
          <th>Year</th>
          <th>Actors</th>
          <th>Genres</th>
          <th>Delete</th>
          <th>Update</th>
        </tr>
        @foreach($series as $serie)
          <tr>
            <td>{{ $serie->title }}</td>
            <td>{{ $serie->publication_year }}</td>
            <td>
              @foreach($serie->actors as $actor)
                {{ $actor->completeName() }}
              @endforeach
            </td>
            <td>
              @foreach($serie->genres as $genre)
                {{ $genre->name }}
              @endforeach
            </td>
            <td><form class=""  action="/deleteserie" method="POST"> @csrf <input type="hidden" name="id" value="{{ $serie->id }}"><input type="submit" name="" value="X"></form></td>
            <td><form class=""  action="/updateserie" method="POST"> @csrf <input type="hidden" name="id" value="{{ $serie->id }}"><!--<input placeholder="{{ $serie->title }}" type="text" name="title" value="">
            <input placeholder="{{ $serie->publication_year }}" type="number" name="publication_year" value="">--><input type="submit" name="" value="U"></form></td>

          </tr>
        @endforeach

      </table>
  </div>
@endsection
