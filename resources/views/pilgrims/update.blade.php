@extends('layouts.app')

@section('content')

<div class="container">

  <form class="" action="{{route('pilgrims.update', $pilgrim)}}" method="POST">
    {{ method_field('PATCH') }}
    {{csrf_field()}}
    <div class="row">
    <div class="col-sm-6">

    <label for="name">Nom</label>
    <input  class="form-control"
            type="text"
            name="name"
            id="name"
            value="{{$pilgrim->name }}">

    <label for="firstname">Prénom</label>
    <input  class="form-control"
            type="text"
            name="firstname"
            id="firstname"
            value="{{$pilgrim->firstname}}"><br>

    <label for="number">N°</label>
    <input  class="form-control"
            type="text"
            name="number"
            id="number"
            value="{{$pilgrim->address['number']}}">

    <label for="street">Rue</label>
    <input  class="form-control"
            type="text"
            name="street"
            id="street"
            value="{{$pilgrim->address['street']}}"><br>

    <label for="flatnumber">Appartement n°</label>
    <input  class="form-control"
            type="text"
            name="flatnumber"
            id="flatnumber"
            value="{{$pilgrim->address['flatNumber']}}">

  </div>
  <div class="col-sm-6">
    <label for="floor">Etage</label>
    <input  class="form-control"
            type="text"
            name="floor"
            id="floor"
            value="{{$pilgrim->address['floor']}}" >

    <label for="flatName">Batiment</label>
    <input  class="form-control"
            type="text"
            name="flatName"
            id="flatName"
            value="{{$pilgrim->address['flatName']}}"><br>

    <label for="zipcode">Code postal</label>
    <input  class="form-control"
            type="text"
            name="zipcode"
            id="zipcode"
            value="{{$pilgrim->address['zipcode']}}">

    <label for="city">Ville</label><br>
    <input  class="form-control"
            type="text"
            name="city"
            id="city"
            value="{{$pilgrim->address['city']}}" >

    <label for="phone">Téléphone fixe</label>
    <input  class="form-control"
            type="text"
            name="phone"
            id="phone"
            value="{{$pilgrim->address['phone']}}">

    <label for="mobile">Portable</label>
    <input  class="form-control"
            type="text"
            name="mobile"
            id="mobile"
            value="{{$pilgrim->address['mobile']}}"><br>

    <button class="btn btn-primary"type="submit">Mettre à jour</button>
  </div>
</div>
  </form>

@endsection
