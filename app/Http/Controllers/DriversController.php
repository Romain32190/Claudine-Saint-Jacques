<?php

namespace App\Http\Controllers;

use App\address;
use App\vehicles;
use App\drivers;
use App\pilgrim;
use Illuminate\Http\Request;

class DriversController extends Controller
{
  public function index(){

    $addresses = address::all();
    $vehicles = vehicles::all();
    $drivers = drivers::all();

    return view('/driversList', compact('drivers', 'vehicles', 'address'));
  }

    public function create (){

      return view('CreateDrivers', ['drivers'=> Drivers::all(), 'vehicles'=>vehicles::all()]);
    }

    public function store(Request $request){

      $this -> validate(request(), [
          'street' => 'required',
          'zipcode' => 'required',
          'city' => 'required'
      ]);

      address::create(request(['number', 'street', 'zipcode', 'city', 'flatNumber', 'floor', 'flatName', 'phone', 'mobile']));


        $id_address = address::all()->last()->{'id'};

        $driver = new drivers();

          $driver->name = $request->name;
          $driver->firstname = $request->firstname;
          $driver->drivingLicence = $request->drivingLicence;
          $driver->id_vehicle = $request->vehicle;
          $driver->id_address = $id_address;

          $driver->save();
          return view('/driversList');
        }

}
