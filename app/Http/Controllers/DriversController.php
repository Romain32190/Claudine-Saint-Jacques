<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriversController extends Controller
{
  public function index(){
    $drivers = Drivers::all()->get();
  }

    public function create (){
      return view('driver.create')
    }


}
