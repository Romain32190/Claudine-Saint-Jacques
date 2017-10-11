@extends('layouts.app')

@section('content')

  <form class="" action="{{route('drivers.store')}}" method="POST">
    {{csrf_field()}}

    <label for="name">Nom</label>
    <input type="text" name="name" id="name">

    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstanme"><br>

    <label for="drivingLicense">N° Permis de conduire</label>
    <input type="text" name="drivingLicence" id="drivingLicence"><br>

    <label for="number">N°</label>
    <input type="text" name="number" id="number">

    <label for="street">rue</label>
    <input type="text" name="street" id="street"><br>

    <label for="flatnumber">appartement n°</label>
    <input type="text" name="flatnumber" id="flatnumber">

    <label for="floor">Etage</label>
    <input type="text" name="floor" id="floor" >

    <label for="flatName">Batiment</label><br>
    <input type="text" name="flatName" id="flatName">

    <label for="zipcode">code postal</label>
    <input type="text" name="zipcode" id="zipcode">

    <label for="city">Ville</label><br>
    <input type="text" name="city" id="city" >

    <label for="phone">Téléphone fixe</label>
    <input type="text" name="phone" id="phone">

    <label for="mobile">Portable</label>
    <input type="text" name="mobile" id="mobile"><br>

    <label for="vehicle">Véhicule</label>
    <select class="" name="vehicle" id="vehicle">
      @foreach ($vehicles as $vehicle)
      <option value="{{$vehicle->id}}">{{$vehicle->type}}:{{$vehicle->vehicleRegistration}}</option>
      @endforeach
    </select><br>


    <button type="submit">créer</button>

  </form>

@endsection
