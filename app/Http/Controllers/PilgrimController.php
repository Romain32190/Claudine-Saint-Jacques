<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilgrimController extends Controller
{
    public function index(){
      $pilgrims = Pilgrim::all()->get();
    }
}
