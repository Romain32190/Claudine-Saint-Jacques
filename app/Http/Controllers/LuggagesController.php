<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuggagesController extends Controller
{
    public function index(){
      $luggagges = Luggages::all()->get();
    }
}