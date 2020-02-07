<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function directory(){
        return view('actores');
    }
    public function store(Request $req){
        $actorNuevo = new Actor();
        $actorNuevo->first_name = $req['first_name'];
        $actorNuevo->last_name = $req['last_name'];             
        $actorNuevo->rating = $req['rating'];
        $actorNuevo->favourite_movie_id = $req['favourite_movie_id'];
        $actorNuevo->save(); 
        return view('actors');

    }
}
