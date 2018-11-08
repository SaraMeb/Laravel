<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie as Serie;
use App\Genre as Genre;
use App\Actor as Actor;

class View extends Controller
{
    public function home()
    {
      return view('welcome');

    }
    public function SeriesList()
    {
      // Get all series from series table via serie model
      $series = Serie::all();
      // Afficher l'acteur et le genre de la série
      //dd($series[0]->genres);
      //dd($series[0]->actors);
      return view('SeriesList', ['series' => $series]);

    }
    public function AddSerie()
    {
      // Charger tous les genres
      $genres = Genre::all();
      //dd($genres);
     // Charger tous les acteurs
      $actors = Actor::all();;
      //dd($actors);
      return view('AddSerie', [
        "actors" => $actors,
        "genres" => $genres,
      ]);
    }
    public function updateForm(Request $request)
    {
      $serie = Serie::find($request->input('id'));
      $genres = Genre::all();
      $actors = Actor::all();
      return view('update', [
        'serie' => $serie,
        "actors" => $actors,
        "genres" => $genres,
      ]);

    }
    public function addActor()
    {
      $actors = Actor::all();
      return view('addActor', [
        "actors" => $actors
      ]);
    }
    public function AddGenre()
    {
      $genres = Genre::all();
      return view('AddGenre', [
        "genres" => $genres,
      ]);
    }
    public function updateActor(Request $request)
    {
      $actor = Actor::find($request->input('id'));

      return view('updateactor', [
        "actor" => $actor,
      ]);

    }
    public function updateGenre(Request $request)
    {
      $genre = Genre::find($request->input('id'));

      return view('updategenre', [
        "genre" => $genre,
      ]);

    }
}
