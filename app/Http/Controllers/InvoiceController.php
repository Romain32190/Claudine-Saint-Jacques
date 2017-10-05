<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
  public function index(){
    $invoices = invoices::all()->get();

  }
}
