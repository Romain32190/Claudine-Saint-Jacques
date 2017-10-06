<?php

namespace App\Http\Controllers;

use App\luggages;
use Illuminate\Http\Request;

class LuggagesController extends Controller
{
    public function index(){
      $luggages = luggages::all();

      return view
      ('/createRoadmap', compact('luggages'));
    }

    public function store(Request $request){
      $this -> validate(request(), [
          'numnber' => required(),
          'weight' => required()

      ]);

      Post::create(request()->all());
    }
      public function create(){
        return view ('luggage.create');
      }
}
