@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col col-md-4">
            <p class="lead">Creer étape</p>
            <form action={{route('steps.store')}} method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nom *</label>
                    <input required type="text" class="form-control" name="name" id="name" placeholder="St jean pied de port">
                </div>
                <div class="form-group">
                    <label for="latitude">latitude *</label>
                    <input required type="text" class="form-control" name="latitude" id="latitude" placeholder="0.">
                </div>
                <div class="form-group">
                    <label for="longitude">longitude *</label>
                    <input required type="text" class="form-control" name="longitude" id="longitude" placeholder="0.">
                </div>
                <div class="form-group">
                    <label for="steporder">position etape *</label>
                    <input required type="text" class="form-control" name="steporder" id="steporder">
                </div>
                <!--          <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
                </div> -->
                <!--          <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
                </div> -->
                <button type="submit" class="btn btn-default">Enregistrer</button>
            </form>
        </div>
        <div class="col col-md-4" style="height: 85vh;">
            <div style="overflow-y:scroll; height: 100%;">
            <p class="lead">Creer gite</p>
            <form action={{route('gites.store')}} method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="giteName">Nom *</label>
                    <input required type="text" class="form-control" name="giteName" id="giteName" placeholder="nom du gite">
                </div>
                <div class="form-group">
                    <label for="parentStep">Etape parente *</label>
                    <input required type="text" class="form-control" name="parentStep" id="parentStep" placeholder="Conque">
                </div>              
                <div class="form-group">
                    <label for="gitelatitude">latitude</label>
                    <input  type="text" class="form-control" name="gitelatitude" id="gitelatitude" placeholder="0.">
                </div>
                <div class="form-group">
                    <label for="gitelongitude">longitude</label>
                    <input  type="text" class="form-control" name="gitelongitude" id="gitelongitude" placeholder="0.">
                </div>
                    <input type="hidden" required class="form-control" name="step_id" id="step_id">

                <p>Adresse:</p>
                <div class="form-group">
                    <label for="number">N°</label>
                    <input class="form-control" type="text" name="number" id="number">
                </div>
                <div class="form-group">
                    <label for="street">Rue *</label>
                    <input required class="form-control" type="text" name="street" id="street">
                </div>
                <div class="form-group">
                    <label for="flatnumber">Appartement n°</label>
                    <input class="form-control" type="text" name="flatnumber" id="flatnumber">              
                </div>
                <div class="form-group">
                    <label for="floor">Etage</label>
                    <input class="form-control" type="text" name="floor" id="floor" >               
                </div>
                <div class="form-group">
                    <label for="flatName">Batiment</label>
                    <input class="form-control" type="text" name="flatName" id="flatName">  
                </div>
                <div class="form-group">
                    <label for="zipcode">Code postal *</label>
                    <input required class="form-control" type="text" name="zipcode" id="zipcode">
                </div>
                <div class="form-group">
                    <label for="city">Ville *</label><br>
                    <input required class="form-control" type="text" name="city" id="city" >
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone fixe</label>
                    <input class="form-control" type="text" name="phone" id="phone">
                </div>
                <div class="form-group">
                    <label for="mobile">Portable</label>
                    <input class="form-control" type="text" name="mobile" id="mobile">
                </div>

                <!--          <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
                </div> -->
                <!--          <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
                </div> -->

                <button type="submit" class="btn btn-default">Enregistrer</button>
            </form>
        </div>
        </div>
        <div class="col col-md-3" style="height: 85vh;">
            <div style="overflow-y:scroll; height: 100%;">
                <ul>

                @foreach ($steps as $key => $step)
                    <p style="line-height: 0.5em"><i title="inserer une etape ici" style="cursor: pointer;" data-id="{{$step->steporder}}" class="fa fa-plus-circle innerStep" aria-hidden="true"></i></p>
                    <p style="line-height: 0.5em" id="{{$step->id}}">&nbsp;|&nbsp;&nbsp;
                        <a title="editer etape" href="{{route('steps.edit',$step)}}">{{$step->name}}</a>
                    </p>

                    @foreach ($step->gites as $gite)
                        <p style="line-height: 0.5em" id="gite_{{$gite->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;
                            <a title="editer etape" href="{{route('gites.edit',$gite)}}">{{$gite->name}}</a>
                        </p>
                    @endforeach
                    <p style="line-height: 0.5em">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i title="inserer un gite" style="cursor: pointer;"  data-stepname="{{$step->name}}" data-stepid="{{$step->id}}" class="fa fa-plus-square innerGite" aria-hidden="true"></i>
                    </p>
                @endforeach
                <!-- last ?? -->
                </ul>
            </div>
        </div>
    </div>
        {{-- @extends('layouts.errors') --}}
</div>


@endsection
@section('script')
<script>
    function colorSelectedStep(){
        $('.innerStep').removeClass( "selectedStep" );
        var r = $('#steporder').val();
        $("[data-id="+r+"]").addClass('selectedStep');
    }

    function colorSelectedGite(){
        $('.innerGite').removeClass( "selectedStep" );
        var r = $('#step_id').val();
        console.log(r);
        $("[data-stepid="+r+"]").addClass('selectedStep');
    }

    $('.innerGite').on('click', function(e) {
        $('#parentStep').val($(this).data('stepname'));
        $('#step_id').val($(this).data('stepid'));
        colorSelectedGite();
    });

    $('.innerStep').on('click', function(e) {
        $('#steporder').val($(this).data('id'));
        colorSelectedStep();
    });

    $('#steporder').on('keyup', function(e) {
        colorSelectedStep();
    });
</script>
@endsection
