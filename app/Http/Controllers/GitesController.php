<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitesController extends Controller
{
  public function index(){
    $gites = Gites::all()->get();
  }

    public function create(){
      return view ('gite.create');
    }
}
