<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuggagesController extends Controller
{
    public function index(){
      $luggagges = Luggages::all()->get();
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
