<?php

namespace App\Http\Controllers;

use App\drivers;
use Illuminate\Http\Request;

class DriversController extends Controller
{
  public function index(){

    $drivers = drivers::all();

    return view('/welcome', compact('drivers'));
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
