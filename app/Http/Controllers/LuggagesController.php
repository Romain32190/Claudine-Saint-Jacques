<?php

namespace App\Http\Controllers;

use App\luggages;
use App\drivers;
use App\pilgrim;
use App\vehicles;
use App\gites;
use App\address;
use App\roadmaps;
use App\Step;
use Illuminate\Http\Request;

class LuggagesController extends Controller
{
    public function index(){
      $luggages = luggages::all();

      return view
      ('/createRoadmap', compact('luggages'));
    }

    public function store(){

      $this -> validate(request(), [
          'id_pilgrims' => 'required',
          'start' => 'required',
          'goal' => 'required',
          'startDate' => 'required',
          'weight' => 'required'
      ]);

      luggages::create(request(['id_pilgrims','start','goal','startDate', 'weight']));
      return redirect('/');
    }

      public function create(){
        $pilgrims = pilgrim::all();
        $luggages = luggages::all();
        $gites = gites::all();

        return view ('createLuggage', compact('luggages', 'pilgrims', 'gites'));
      }
}
