@extends('layouts.app')

@section('content')
<div class="">

  <form class="" action="/storeAddress" method="post">
    {{csrf_field()}}

    <label for="name">nom</label>
    <input type="text" name="name" id="name">

    <label for="firstname">prénom</label>
    <input type="text" name="firstname" id="firstname"><br>



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

    <button type="submit" name="button">créer</button>
  </form>

  @include('layouts.errors')

</div>
@endsection
