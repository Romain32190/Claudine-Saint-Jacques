<?php

namespace App\Http\Controllers;

use App\pilgrim;
use Illuminate\Http\Request;

class PilgrimController extends Controller
{
    public function index(){
      $pilgrims = pilgrim::all();
    }

    public function store(){

      $this -> validate(request(), [
          'name' => required(),
          'firstname' => required()
      ]);

      Post::create(request(['name', 'firstname']));
      return redirect('/');
    }

      public function create(){
        return view ('createPilgrim');
      }
}
