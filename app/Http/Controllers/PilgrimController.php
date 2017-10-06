<?php

namespace App\Http\Controllers;

use App\pilgrims;
use Illuminate\Http\Request;

class PilgrimController extends Controller
{
    public function index(){
      $pilgrims = pilgrim::all();
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
