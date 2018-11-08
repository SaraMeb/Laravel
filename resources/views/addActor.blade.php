@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <h1>Add one actor</h1>
    <form class="" action="/insertActor" method="post">
      @csrf
      <input required type="text" name="first_name" placeholder="First Name">
      <input required type="text" name="last_name" placeholder="Last Name">
      <input type="submit" name="" value="Insert">
    </form>
    <div class="tableau">
      <table>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Delete</th>
          <th>Update</th>
        </tr>
        @foreach($actors as $actor)
          <tr>
            <td>{{ $actor->first_name }}</td>
            <td>{{ $actor->last_name }}</td>
            <td><form class=""  action="/deleteactor" method="POST"> @csrf <input type="hidden" name="id" value="{{ $actor->id }}"><input type="submit" name="" value="X"></form></td>
            <td><form class=""  action="/updateactor" method="POST"> @csrf <input type="hidden" name="id" value="{{ $actor->id }}"><input type="submit" name="" value="U"></form></td>

          </tr>
        @endforeach
      </table>
  </div>
@endsection
