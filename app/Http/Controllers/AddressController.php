<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){

      $address = addresses::all()->get();
    }
}
