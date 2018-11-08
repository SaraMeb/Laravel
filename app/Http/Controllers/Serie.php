<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serie extends Controller
{
  public function insertOne(Request $request)
  {
    // Recuperer les données du formulaire
      //dd($request);

    // Inserer une nouvelle série
    $serie = new \App\Serie;
    $serie->title = $request->input('title');
    $serie->publication_year = $request->input('publication_year');
    $serie->save();
    // Lier un acteur à la série
    // Lier un genre à la série
    // Rediriger vers la liste des séries
    $serie->actors()->attach($request->input('actors'));
    $serie->genres()->attach($request->input('genres'));
    return redirect('/SeriesList');

  }
  public function deleteOne(Request $request)
  {
    //dd($request->input('id'));
    \App\Serie::destroy($request->input('id'));
    return redirect('/SeriesList');

    /* //Autre méthode
    $id = $request->id;
      $Serie= \App\Serie::find($id);
      $Serie->delete();
      return back();*/

  }
  public function updateOne(Request $request)
  {
    // Load the serie
    $serie = \App\Serie::find($request->input('id'));
    // Update the values
    $serie->title = $request->input('title');
    $serie->publication_year = $request->input('publication_year');
    // Save the changes
    $serie->save();
    $serie->actors()->detach();
    $serie->genres()->detach();
    $serie->actors()->attach($request->input('actor'));
    $serie->genres()->attach($request->input('genres'));
    return redirect('/SeriesList');

  }

}
