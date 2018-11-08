<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Genre extends Controller
{
    public function insertGenre(Request $request)
    {

    $genre = new \App\Genre;
    $genre->name = $request->input('name');
    $genre->save();

    return redirect('/addGenre');

    }
    public function deleteOne(Request $request)
    {
      \App\Genre::destroy($request->input('id'));
      return redirect('/AddGenre');

    }
    public function updateGenre(Request $request)
    {
      // Load the genre
      $genre = \App\Genre::find($request->input('id'));
      // Update the values
      $genre->name = $request->input('name');
      // Save the changes
      $genre->save();

      return redirect('/AddGenre');

    }
}
