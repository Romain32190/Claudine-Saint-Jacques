<?php

namespace App\Http\Controllers;

use App\pilgrim;
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

      pilgrim::create(request()->all());
    }

      public function create(){
        return view ('pilgrim.create');
      }
}
