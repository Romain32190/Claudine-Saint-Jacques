<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilgrimController extends Controller
{
    public function index(){
      $pilgrims = Pilgrim::all()->get();
    }

    public function store(Request $request){
      $this -> validate(request(), [
          'name' => required(),
          'firstname' => required()
      ]);

      Post::create(request()->all());
    }

      public function create(){
        return view ('pilgrim.create');
      }
}
