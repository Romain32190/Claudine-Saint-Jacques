@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <h1>Liste des pélerins</h1>
    </div>
    <div class="col-sm-2">
      <a href="{{ route ('pilgrims.create')}}" role="button" class="btn btn-lg btn-success">Ajouter</a>
    </div>

  </div>
</div>
<div class="container">
  <table class="table">

      <h3>Pélerins en marche</h3>

    <thead>
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Ville</th>
        <th>Telephone</th>
        <th>Baggages</th>
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
                <button type="submit" name="button" class="btn btn-success">En marche</button>
              </form>
              <a href="{{ route('pilgrims.edit', $pilgrim)}}" type="button" name="button" class="btn btn-sm btn-warning">Modifier</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  <table class="table table-bordered">

        <h3>Pélerins sortis</h3>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Addresse</th>
        <th>Telephone</th>
        <th>Date de sortie</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($inactives as $inactive)
          <tr>
            <td>
              <div class="panel panel-default">
              <div class="panel-heading">{{$inactive->name}}</div>
            </div>
            </td>
            <td>
              <div class="panel panel-default">
              <div class="panel-heading">{{$inactive->firstname}}</div>
            </div>
            </td>
            <td>
              <div class="panel panel-default">
              <div class="panel-heading">{{$inactive->address['number']}}  {{$inactive->address['street']}}</div>
              <div class="panel-heading">{{$inactive->address['flatNumber']}}  {{$inactive->address['flatName']}}</div>
              <div class="panel-heading">{{$inactive->address['zipcode']}}  {{$inactive->address['city']}}</div>
            </div>
            </td>
            <td>
               <div class="panel panel-default">
                <div class="panel-heading">{{$inactive->address['phone']}}</div>
                <div class="panel-heading">{{$inactive->address['mobile']}}</div>
              </div>              
            </td>
            <td>
              <div class="panel panel-default">
              <div class="panel-heading">{{$inactive->updated_at}}</div>
            </div>
            </td>
            <td>
              <form action="{{route('pilgrims.update', $inactive)}}" method="POST">
                {{ method_field('PATCH') }}
                {{csrf_field()}}
                <input type="hidden" name="active" value= 1 >
                <button type="submit" name="button" class="btn btn-info">indisponible</button>
              </form>
              <a href="{{ route ('pilgrims.edit',$inactive)}}" type="button" name="button" class="btn btn btn-warning">Modification</a>
              <form class="" action="{{route('pilgrims.destroy', $inactive)}}" method="POST">
                {{ method_field('DELETE') }}
                {{csrf_field()}}
                <button type="submit" name="button" class="btn btn-danger">Suppression</button>
              </form>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>


@endsection
