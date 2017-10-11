@extends('layouts.app')

@section('content')

  {{csrf_field()}}

  <form class="" action="/storePilgrim" method="post">

    <label for="name">nom</label>
    <input type="text" name="name" id="name"><br>

    <label for="firstname">prénom</label>
    <input type="text" name="firstname" id="firstname"><br>

    <label for="number">N°</label>
    <input type="text" name="number" id="number"><br>

    <label for="street">rue</label>
    <input type="text" name="street" id="street"><br>

    <label for="zipcode">code postal</label>
    <input type="text" name="zipcode" id="zipcode"><br>

    <label for="town">Ville</label>
    <input type="text" name="town" id="town" ><br>

    <label for="flatnumber">appartement n°</label>
    <input type="text" name="flatnumber" id="flatnumber"><br>

    <button type="submit" name="button">créer</button>
  </form>

@endsection
