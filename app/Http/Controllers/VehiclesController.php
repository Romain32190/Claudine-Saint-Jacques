<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    puhblic function index(){
      $vehicles = Vehicles::all()->get();
    }
}
