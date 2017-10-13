@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <h1>Liste des pélerins</h1>
    </div>
    <div class="col-sm-2">
      <a href="{{ route ('pilgrims.create')}}" role="button" class="btn btn-lg btn-success">ajouter</a>
    </div>

  </div>
</div>
<div class="container">
  <table class="table">

      <h3>Pélerins en marche</h3>

    <thead>
      <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>ville</th>
        <th>telephone</th>
        <th>baggages</th>
      </tr>
    </thead>
    <tbody>
        @foreach($pilgrims as $pilgrim)

          <tr>
            <td>
              {{$pilgrim->name}}
            </td>
            <td>
              {{$pilgrim->firstname}}
            </td>
            <td>
              {{$pilgrim->address['city']}}
            </td>
            <td>
              <ul>
                <li>{{$pilgrim->address['phone']}}</li>
                <li>{{$pilgrim->address['mobile']}}</li>
              </ul>
            </td>
            <td>
              <form class="" action="{{route('pilgrims.update', $pilgrim)}}" method="POST">
                {{ method_field('PATCH') }}
                {{csrf_field()}}
                <input type="hidden" name="active" value= 0>
                <button type="submit" name="button" class="btn btn-sm btn-success">En marche</button>
              </form>
              <a href="{{ route('pilgrims.edit', $pilgrim)}}" type="button" name="button" class="btn btn-sm btn-warning">Modifier</a>
              <form class="" action="{{route('pilgrims.update', $pilgrim)}}" method="POST">
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

        <h3>Pélerins sortis</h3>
    <thead>
      <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>addresse</th>
        <th>telephone</th>
        <th>date de sortie</th>
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
              {{$inactive->address['number']}}" "{{$inactive->address['street']}}<br>
              {{$inactive->address['flatNumber']}}" "{{$inactive->address['flatName']}}<br>
              {{$inactive->address['zipcode']}}" "{{$inactive->address['city']}}<br>
            </td>
            <td>
              {{$inactive->updatedAt}}
            </td>
            <td>
            </td>
            <td>
              <form action="{{route('pilgrims.update', $inactive)}}" method="POST">
                {{ method_field('PATCH') }}
                {{csrf_field()}}
                <input type="hidden" name="active" value= 1 >
                <button type="submit" name="button" class="btn btn-sm btn-info">indisponible</button>
              </form>
              <a href="{{ route ('pilgrims.edit',$inactive)}}" type="button" name="button" class="btn btn-sm btn-warning">Modifier</a>
              <form class="" action="{{route('pilgrims.update', $inactive)}}" method="POST">
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
