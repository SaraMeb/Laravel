@extends('layouts.base')

@section('title', 'Home')
@section('content')
    <h1>Update one actor</h1>
    <form class=""  action="/updateactoraction" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $actor->id }}">
      <input required type="text" name="first_name" value="{{ $actor->first_name }}">
      <input required type="text" name="last_name" value="{{ $actor->last_name }}">
      <input type="submit" name="" value="Update"></form>
@endsection
