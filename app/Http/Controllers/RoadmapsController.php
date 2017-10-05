<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoadmapsController extends Controller
{
    public function index(){
      $roadmaps = Roadmaps::all()->get(); 
    }
}
