<?php

namespace App\Http\Controllers;

use App\address;
use App\pilgrim;
use Illuminate\Http\Request;

class PilgrimController extends Controller
{
    public function index(){
      $pilgrims = pilgrim::all();
    }

    public function store(){

      $this -> validate(request(), [
        'street' => 'required',
        'zipcode' => 'required',
        'city' => 'required'
      ]);

      address::create(request(['number', 'street', 'zipcode', 'city', 'flatNumber', 'floor', 'flatName', 'phone', 'mobile']));
      return redirect('/storeIdentity');
    }

      //pilgrim::create(request(['name', 'firstname', 'id_address'=> $id_address]));

      public function create(){
        return view ('createPilgrim');
      }

    }
