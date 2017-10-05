<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function index(){
      $vehicles = Vehicles::all()->get();
    }

    public function store(Request $request){
      $this -> validate(request(), [
          'brand' => required(),
          'type' => required(),
          'vehicleRegistration' => required(),
          'capacity' => required(),
          'maxLuggages' => required(),
          'minWeight' => required(),
          'maxWeight' => required(),
          'insuranceNumber' => required(),
          'technicalControl' => required()
      ]);

      Post::create(request()->all());
    }

      public function create(){
        return view ('vehicle.create');
      }
}
