@extends('layouts.app')

@section('content')

<div class="container">
  <form class="" action="{{route('drivers.store')}}" method="POST">
    {{csrf_field()}}
    <div class="row">
    <div class="col-sm-6">

    <label for="name">Nom</label>
    <input class="form-control" type="text" name="name" id="name">

    <label for="firstname">Prénom</label>
    <input class="form-control" type="text" name="firstname" id="firstanme"><br>

    <label for="drivingLicense">N° Permis de conduire</label>
    <input class="form-control" type="text" name="drivingLicence" id="drivingLicence"><br>

    <label for="number">N°</label>
    <input class="form-control" type="text" name="number" id="number">

    <label for="street">Rue</label>
    <input class="form-control" type="text" name="street" id="street"><br>

    <label for="flatnumber">Appartement n°</label>
    <input class="form-control" type="text" name="flatnumber" id="flatnumber">

  </div>
    <div class="col-sm-6">
    <label for="floor">Etage</label>
    <input class="form-control" type="text" name="floor" id="floor" >

    <label for="flatName">Batiment</label><br>
    <input class="form-control" type="text" name="flatName" id="flatName">

    <label for="zipcode">Code postal</label>
    <input class="form-control" type="text" name="zipcode" id="zipcode">

    <label for="city">Ville</label><br>
    <input class="form-control" type="text" name="city" id="city" >

    <label for="phone">Téléphone fixe</label>
    <input class="form-control" type="text" name="phone" id="phone">

    <label for="mobile">Portable</label>
    <input class="form-control" type="text" name="mobile" id="mobile"><br>

    <label for="vehicle">Véhicule</label>
    <select class="form-control" name="vehicle" id="vehicle">
      @foreach ($vehicles as $vehicle)
      <option value="{{$vehicle->id}}">{{$vehicle->type}}:{{$vehicle->vehicleRegistration}}</option>
      @endforeach
    </select><br>


    <button class="btn btn-primary"type="submit">Créer</button>
  </div>
</div>
  </form>

@endsection
