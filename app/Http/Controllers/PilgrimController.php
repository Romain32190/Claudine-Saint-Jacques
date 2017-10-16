<?php

namespace App\Http\Controllers;

use App\luggages;
use App\address;
use App\pilgrim;
use Illuminate\Http\Request;

class PilgrimController extends Controller
{
  // show all
  public function index(){
    $pilgrims = pilgrim::all()->where('active',1);
    $inactives = pilgrim::all()->where('active',0);
    $address = address::all();
    $luggages = luggages::all();


    return view('pilgrims.index', compact('pilgrims', 'inactives', 'address', 'luggages'));
  }
// route to form to create
  public function create(){
    return view ('pilgrims.create');
  }
// storage
  public function store(Request $request){

    $this -> validate(request(), [
      'street' => 'required',
      'zipcode' => 'required',
      'city' => 'required'
    ]);

    address::create(request(['number', 'street', 'zipcode', 'city', 'flatNumber', 'floor', 'flatName', 'phone', 'mobile']));


    $id_address = address::all()->last()->{'id'};

    $pilgrim = new pilgrim();

    $pilgrim->name = $request->name;
    $pilgrim->firstname = $request->firstname;
    $pilgrim->id_address = $id_address;

    $pilgrim->save();
    return redirect(url("/pilgrims"));
  }

    public function edit($id){
      $pilgrim = pilgrim::findOrFail($id);
      $address = address::all();
      $luggages = luggages::all();

      return view('pilgrims.update', compact('pilgrim', 'luggages', 'address'));

    }

    public function update($id, Request $request){

      $pilgrim = pilgrim::findOrFail($id);
      $address = address::findOrFail($pilgrim->id_address);

      $pilgrim->update($request->all());
      $address->update($request->all());

      return redirect(url('pilgrims'));
    }

    public function destroy($id){


      $pilgrim = pilgrim::findOrFail($id);
      $pilgrim->delete();

      return redirect(route;
    }
  }
