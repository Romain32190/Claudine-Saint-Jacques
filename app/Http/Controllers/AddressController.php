<?php

namespace App\Http\Controllers;
use App\pilgrim;
use App\address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){

      $address = address::all();

      return view('address.index', compact('address'));
    }

    public function store(Request $request){
      $this -> validate(request(), [
          'street' => 'required',
          'zipcode' => 'required',
          'city' => 'required'
      ]);

      address::create(request(['number', 'street', 'zipcode', 'city', 'flatNumber', 'floor', 'flatName', 'phone', 'mobile']));


        $id_address = address::all()->last()->{'id'};


        $pilgrim = new pilgrim;

          $pilgrim->name = $request->name;
          $pilgrim->firstname = $request->firstname;
          $pilgrim->id_address = $id_address;

          $pilgrim->save();

       return view ('/carte');
    }

    public function create(){

      return view('createAddress');

    }
}
