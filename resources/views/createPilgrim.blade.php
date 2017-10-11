@extends('layouts.app')

@section('content')
<div class="container">

  <form class="" action="/storeAddress" method="post">
    {{csrf_field()}}

    <label for="name">Nom</label>
    <input class="form-control" type="text" name="name" id="name">

    <label for="firstname">Prénom</label>
    <input class="form-control" type="text" name="firstname" id="firstname"><br>



      <label for="number">N°</label>
      <input class="form-control" type="text" name="number" id="number">

      <label for="street">Rue</label>
      <input class="form-control" type="text" name="street" id="street"><br>

      <label for="flatnumber">Appartement n°</label>
      <input class="form-control" type="text" name="flatnumber" id="flatnumber">

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

    <button class="btn btn-primary" type="submit" name="button">Créer</button>
  </form>
</div>
  @include('layouts.errors')

</div>
@endsection
