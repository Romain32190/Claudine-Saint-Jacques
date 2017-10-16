@extends('layouts.app')
@section('content')
<div class="container">
            <form action="{{ route('gites.update', $gite) }}" method="POST">
    <div class="row">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="giteName">Nom *</label>
                        <input required type="text" class="form-control" name="giteName" id="giteName" placeholder="nom du gite" value="{{$gite->name}}">
                    </div>
    {{--                 <div class="form-group">
                        <label for="parentStep">Etape parente *</label>
                        <input required type="text" class="form-control" name="parentStep" id="parentStep" placeholder="Conque" value="{{$gite->step->name}}">
                    </div> --}}
                    <div class="form-group">
                        <label for="gitelatitude">latitude</label>
                        <input  type="text" class="form-control" name="gitelatitude" id="gitelatitude" placeholder="0." value="{{$gite->latitude}}">
                    </div>
                    <div class="form-group">
                        <label for="gitelongitude">longitude</label>
                        <input  type="text" class="form-control" name="gitelongitude" id="gitelongitude" placeholder="0." value="{{$gite->longitude}}">
                    </div>
                        <input type="hidden" required class="form-control" name="step_id" id="step_id" value="{{$gite->step->id}}">
                </div>
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="number">N°</label>
                        <input class="form-control" type="text" name="number" id="number" value="{{$gite->address->number}}">
                    </div>
                    <div class="form-group">
                        <label for="street">Rue *</label>
                        <input required class="form-control" type="text" name="street" id="street" value="{{$gite->address->street}}">
                    </div>
                    <div class="form-group">
                        <label for="flatnumber">Appartement n°</label>
                        <input class="form-control" type="text" name="flatnumber" id="flatnumber" value="{{$gite->address->flatnumber}}">              
                    </div>
                    <div class="form-group">
                        <label for="floor">Etage</label>
                        <input class="form-control" type="text" name="floor" id="floor" value="{{$gite->address->floor}}">
                    </div>
                    <div class="form-group">
                        <label for="flatName">Batiment</label>
                        <input class="form-control" type="text" name="flatName" id="flatName" value="{{$gite->address->flatName}}">  
                    </div>
                </div>
                <div class="col col-md-4">              
                    <div class="form-group">
                        <label for="zipcode">Code postal *</label>
                        <input required class="form-control" type="text" name="zipcode" id="zipcode" value="{{$gite->address->zipcode}}">
                    </div>
                    <div class="form-group">
                        <label for="city">Ville *</label>
                        <input required class="form-control" type="text" name="city" id="city" value="{{$gite->address->city}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone fixe</label>
                        <input class="form-control" type="text" name="phone" id="phone" value="{{$gite->address->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Portable</label>
                        <input class="form-control" type="text" name="mobile" id="mobile" value="{{$gite->address->mobile}}">
                    </div>
                </div>
    </div>
                    <button type="submit" class="btn btn-default">Mettre à jour</button>
            </form>
            <form method="POST" action="{{route('gites.destroy', $gite)}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">supprimer</button>
            </form>

    @extends('layouts.errors')
</div>

@endsection