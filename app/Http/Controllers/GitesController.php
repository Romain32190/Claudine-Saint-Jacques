<?php

namespace App\Http\Controllers;

use App\gites;
use Illuminate\Http\Request;

class GitesController extends Controller
{
  public function index(){
    $gites = gites::all();

    return view('gites.view', compact('gites'));
  }

  public function store(Request $request){
    $this -> validate(request(), [
        'name' => required()

    ]);

    gites::create(request()->all());
  }
    public function create(){
      return view ('gite.create');
    }
}
