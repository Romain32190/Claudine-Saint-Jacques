<?php

namespace App\Http\Controllers;

use App\drivers;
use App\pilgrim;
use App\luggages;
use App\vehicles;
use App\gites;
use App\address;
use App\roadmaps;
use App\Step;
use Illuminate\Http\Request;

class RoadmapsController extends Controller
{
    public function index(){
      $roadmaps = roadmaps::all();
      $drivers = drivers::all();
      $luggages = luggages::all();
      $pilgrims = pilgrim::all();
      $steps = Step::all();

      return view('/createRoadmap', compact('drivers','pilgrims','luggages','vehicles','gites','address','roadmaps','steps') );

    }

    public function store(){
      Post::create(request()->all());

      return redirect('/create/roadmap');
    }
}
