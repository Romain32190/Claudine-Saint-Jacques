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

    $address = address::all();
    $vehicles = vehicles::all();
    $drivers = drivers::all()->where('active', 1)->where('available', 1);
    $inactives = drivers::all()->where('active', 0)->where('available', 1);

    return view('/drivers.show', compact('drivers', 'vehicles', 'address', 'inactives'));
  }

    public function create (){

      return view('drivers.create', ['drivers'=> Drivers::all(), 'vehicles'=>vehicles::all()]);
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
          return view('/driver.show');
        }



      public function edit($id){
          $driver = drivers::findOrFail($id);
          $address = address::all();
          $vehicles = vehicles::all();

          return view('drivers.update', compact('driver', 'vehicles', 'address'));
      }

        //update drivers data
        public function update($id, Request $request){

          $driver = drivers::findOrFail($id);
          $address = address::findOrFail($driver->id_address);
          $vehicles = vehicles::findOrFail($driver->id_vehicles);

          $address->update($request->all());
          $vehicles->update($request->all());
          $driver->update($request->all());

          return redirect(url('drivers'));
        }

        public function delete($id){
          $driver = drivers::find($id);
          return 'deleted';

        }
}
