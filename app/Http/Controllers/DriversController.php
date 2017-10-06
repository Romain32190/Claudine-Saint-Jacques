<?php

namespace App\Http\Controllers;

use App\drivers;
use App\pilgrim;
use Illuminate\Http\Request;

class DriversController extends Controller
{
  public function index(){

    $drivers = drivers::all();
    $pilgrims = pilgrim::all();

    return view('/welcome', compact('drivers', 'pilgrims'));
  }

    public function create (){
      return view('driver.create');
    }

    public function store(Request $request){
      $this -> validate(request(), [
          'name' => required(),
          'firstName' => required(),
          'drinvingLicence' => required()
      ]);

      Post::create(request()->all());
    }

}
