@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <h1>Add one genre</h1>
    <form class="" action="/insertGenre" method="post">
      @csrf
      <input required type="text" name="name" placeholder="Genre">
      <input type="submit" name="" value="Insert">
    </form>
    <div class="tableau">
      <table>
        <tr>
          <th>Genre</th>
          <th>Delete</th>
          <th>Update</th>
        </tr>
        @foreach($genres as $genre)
          <tr>
            <td>{{ $genre->name }}</td>
            <td><form class=""  action="/deletegenre" method="POST"> @csrf <input type="hidden" name="id" value="{{ $genre->id }}"><input type="submit" name="" value="X"></form></td>
            <td><form class=""  action="/updategenre" method="POST"> @csrf <input type="hidden" name="id" value="{{ $genre->id }}"><input type="submit" name="" value="U"></form></td>

          </tr>
        @endforeach
      </table>
  </div>
@endsection
