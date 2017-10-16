@extends('layouts.app')

@section('content')

<div class="container">

  <form class="" action="{{route('drivers.update', $driver)}}" method="POST">
    {{ method_field('PATCH') }}
    {{csrf_field()}}
    <div class="row">
    <div class="col-sm-6">

    <label for="name">Nom</label>
    <input  class="form-control"
            type="text"
            name="name"
            id="name"
            value="{{$driver->name }}">

    <label for="firstname">Prénom</label>
    <input  class="form-control"
            type="text"
            name="firstname"
            id="firstname"
            value="{{$driver->firstname}}"><br>

    <label for="drivingLicense">N° Permis de conduire</label>
    <input  class="form-control"
            type="text"
            name="drivingLicence"
            id="drivingLicence"
            value="{{$driver->drivingLicence}}"><br>

    <label for="number">N°</label>
    <input  class="form-control"
            type="text"
            name="number"
            id="number"
            value="{{$driver->address['number']}}">

    <label for="street">Rue</label>
    <input  class="form-control"
            type="text"
            name="street"
            id="street"
            value="{{$driver->address['street']}}"><br>

    <label for="flatNumber">Appartement n°</label>
    <input  class="form-control"
            type="text"
            name="flatNumber"
            id="flatNumber"
            value="{{$driver->address['flatNumber']}}">

  </div>
    <div class="col-sm-6">
    <label for="floor">Etage</label>
    <input  class="form-control"
            type="text"
            name="floor"
            id="floor"
            value="{{$driver->address['floor']}}" >

    <label for="flatName">Batiment</label>
    <input  class="form-control"
            type="text"
            name="flatName"
            id="flatName"
            value="{{$driver->address['flatName']}}"><br>

    <label for="zipcode">Code postal</label>
    <input  class="form-control"
            type="text"
            name="zipcode"
            id="zipcode"
            value="{{$driver->address['zipcode']}}">

    <label for="city">Ville</label><br>
    <input  class="form-control"
            type="text"
            name="city"
            id="city"
            value="{{$driver->address['city']}}" >

    <label for="phone">Téléphone fixe</label>
    <input  class="form-control"
            type="text"
            name="phone"
            id="phone"
            value="{{$driver->address['phone']}}">

    <label for="mobile">Portable</label>
    <input  class="form-control"
            type="text"
            name="mobile"
            id="mobile"
            value="{{$driver->address['mobile']}}"><br>

    <label for="vehicle">Véhicule</label>
    <select class="form-control" name="id_vehicles" id="vehicle">
      <option value="{{$driver->vehicles['id']}}">{{$driver->vehicles['type']}}:{{$driver->vehicles['vehicleRegistration']}} </option>
      @foreach ($vehicles as $vehicle)
      <option value="{{$vehicle->id}}">{{$vehicle->type}}:{{$vehicle->vehicleRegistration}}</option>
      @endforeach
    </select><br>

    <button class="btn btn-primary"type="submit">Mettre à jour</button>
  </div>
</div>
  </form>

@endsection
