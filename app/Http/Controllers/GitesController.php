<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitesController extends Controller
{
  public function index(){
    $gites = Gites::all()->get();

    return view('gites.view', compact('gites'));
  }

  public function store(Request $request){
    $this -> validate(request(), [
        'name' => required()

    ]);

    Post::create(request()->all());
  }
    public function create(){
      return view ('gite.create');
    }
}
