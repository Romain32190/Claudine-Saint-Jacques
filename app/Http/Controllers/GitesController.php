<?php

namespace App\Http\Controllers;

use App\Step;
use App\gites;
use App\address;
use Illuminate\Http\Request;

class GitesController extends Controller
{
  
  public function index(){
    $gites = gites::all();

    return view('gites.view', compact('gites'));
  }

  public function edit(gites $gite) {
    return view('gites.edit', ['gite' => $gite ]);
  }
  public function store(Request $request){
    $this->validate(request(), [
        'giteName' => 'required',
        'step_id' => 'required',
        'street' => 'required',
        'zipcode' => 'required',
        'city' => 'required'        
    ]);

    address::create(request(['number', 'street', 'zipcode', 'city', 'flatNumber', 'floor', 'flatName', 'phone', 'mobile']));
    $id_address = address::all()->last()->{'id'};

    $gite = new gites();
    $gite->name = $request->giteName;
    $gite->step_id = $request->step_id;
    $gite->latitude = $request->gitelatitude;
    $gite->longitude = $request->gitelongitude;
    $gite->address_id = $id_address;
    $gite->save();
    return redirect()->back();
    // gites::create(request(['giteName','step_id','gitelatitude','gitelongitude']));
  }

  public function create(){
      return view ('gite.create');
    }

    public function update(Request $request, gites $gite)
    {


      $gite->address->number = $request->number;
      $gite->address->street = $request->street;
      $gite->address->zipcode = $request->zipcode;
      $gite->address->city = $request->city;
      $gite->address->flatNumber = $request->flatNumber;
      $gite->address->floor = $request->floor;
      $gite->address->flatName = $request->flatName;
      $gite->address->phone = $request->phone;
      $gite->address->mobile = $request->mobile;
      $gite->address->save();

      $gite->name = $request->giteName;
      // $gite->step_id = $request->step_id;
      $gite->latitude = $request->gitelatitude;
      $gite->longitude = $request->gitelongitude;
      // $gite->address_id = $id_address;

      $gite->save();
      return redirect(url('steps/create'));
    }

    public function destroy(gites $gite) {
      $gite->address->delete();
      $gite->delete();
      return redirect( url('steps/create') );
    }
}
