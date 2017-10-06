<?php

namespace App\Http\Controllers;

use App\roadmaps;
use Illuminate\Http\Request;

class RoadmapsController extends Controller
{
    public function index(){
      $roadmaps = Roadmaps::all();
    }

    public function store(){
      Post::create(request()->all());

      return redirect('/create/roadmap');
    }
}
