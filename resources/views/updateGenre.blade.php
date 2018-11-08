@extends('layouts.base')

@section('title', 'Home')
@section('content')
    <h1>Update one genre</h1>
    <form class=""  action="/updategenreaction" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $genre->id }}">
      <input required type="text" name="name" value="{{ $genre->name }}">
      <input type="submit" name="" value="Update"></form>
@endsection
