<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){

      $address = addresses::all()->get();

      return view('address.index', compact('address'));
    }

    public function store(){
      $this -> validate(request(), [
          'street' => required(),
          'zipcode' => required(),
          'city' => required()
      ]);

      Post::create(request()->all();
    }

    public function create(){

      return view('address.create');

    }
}
