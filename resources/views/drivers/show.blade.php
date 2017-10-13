@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <h1>Liste des chauffeurs</h1>
    </div>
    <div class="col-sm-2">
      <a href="{{ route ('drivers.create')}}" role="button" class="btn btn-lg btn-success">ajouter</a>
    </div>

  </div>
</div>
<div class="container">
  <table class="table">

      <h3>chauffeurs actifs</h3>

    <thead>
      <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>vehicule</th>
        <th>ville</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($drivers as $driver)

          <tr>
            <td>
              {{$driver->name}}
            </td>
            <td>
              {{$driver->firstname}}
            </td>
            <td>
              {{$driver->vehicles['type']}}:{{$driver->vehicles['vehicleRegistration']}}
            </td>
            <td>
              {{$driver->address['city']}}
            </td>
            <td>
              <form class="" action="{{route('drivers.update', $driver)}}" method="POST">
                {{ method_field('PATCH') }}
                {{csrf_field()}}
                <input type="hidden" name="active" value= 0>
                <button type="submit" name="button" class="btn btn-sm btn-success">Disponible</button>
              </form>
              <a href="{{ route('drivers.edit', $driver)}}" type="button" name="button" class="btn btn-sm btn-warning">Modifier</a>
              <form class="" action="{{route('drivers.update', $driver)}}" method="POST">
                {{ method_field('PATCH') }}
                {{csrf_field()}}
                <input type="hidden" name="available" value= 0>
                <button type="submit" name="button" class="btn btn-sm btn-danger">Supprimer</button>
              </form>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  <table class="table">

        <h3>chauffeurs en repos</h3>
    <thead>
      <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>vehicule</th>
        <th>ville</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($inactives as $inactive)
          <tr>
            <td>
              {{$inactive->name}}
            </td>
            <td>
              {{$inactive->firstname}}
            </td>
            <td>
              {{$inactive->vehicles['type']}}
            </td>
            <td>
              {{$inactive->address['city']}}
            </td>
            <td>
            </td>
            <td>
              <form action="{{route('drivers.update', $inactive)}}" method="POST">
                {{ method_field('PATCH') }}
                {{csrf_field()}}
                <input type="hidden" name="active" value= 1 >
                <button type="submit" name="button" class="btn btn-sm btn-info">indisponible</button>
              </form>
              <a href="{{ route ('drivers.edit',$inactive)}}" type="button" name="button" class="btn btn-sm btn-warning">Modifier</a>
              <form class="" action="{{route('drivers.update', $inactive)}}" method="POST">
                {{ method_field('PATCH') }}
                {{csrf_field()}}
                <input type="hidden" name="available" value= 0>
                <button type="submit" name="button" class="btn btn-sm btn-danger">Supprimer</button>
              </form>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
