<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Actor extends Controller
{
    public function insertActor(Request $request)
  {
    // Recuperer les données du formulaire
      //dd($request);

    // Inserer une nouvelle série
    $actor = new \App\Actor;
    $actor->first_name = $request->input('first_name');
    $actor->last_name = $request->input('last_name');
    $actor->save();

    return redirect('/addActor');

  }
  public function deleteOne(Request $request)
  {
    \App\Actor::destroy($request->input('id'));
    return redirect('/addActor');

  }
  public function updateActor(Request $request)
  {
    // Load the actor
    $actor = \App\Actor::find($request->input('id'));
    // Update the values
    $actor->first_name = $request->input('first_name');
    $actor->last_name = $request->input('last_name');
    // Save the changes
    $actor->save();

    return redirect('/addActor');

  }

}
