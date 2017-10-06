<?php

namespace App\Http\Controllers;

use App\address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){

      $address = addresses::all();

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
