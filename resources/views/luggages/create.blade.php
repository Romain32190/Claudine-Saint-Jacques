@extends('layouts.app')

@section('luggage')

<div class="container">
  <form class="" action={{route('luggages.store')}} method="post">
    {{csrf_field()}}
    <label for="pilgrim">Pelerin</label>
    <select class="form-control" name="id_pilgrims">
      @foreach($pilgrims as $pilgrim)
      <option value="{{$pilgrim->id}}">{{$pilgrim->name}} {{$pilgrim->firstname}}</option>
      @endforeach
    </select><br>
    <label for="weight">Poids</label>
    <select class="form-control" name="weight">
      <?php
      for($i =0; $i<=14; $i++){
        echo "<option value=$i>$i</option>";
      };
      ?>
    </select><br>
    <div class="row">
    <div class='col-sm-6'>
        <div class="form-group">
          <label>Date de départ</label>
            <div class='input-group date' id='datetimepicker1'>
                    <input type='date' class="form-control" name="startDate"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <label for="start">Lieu départ</label>
    <select class="form-control" name="start" id="start">
      @foreach ($gites as $gite)
      <option value="{{$gite->name}}">{{$gite->name}}</option>
      @endforeach
    </select><br>
    <label for="goal">Lieu arrivée</label>
    <select class="form-control" name="goal" id="goal">
      @foreach ($gites as $gite)
      <option value="{{$gite->name}}">{{$gite->name}}</option>
      @endforeach
    </select><br>
    <button type="submit" name="button" class="btn btn-primary" >Envoyez</button>
  </form>
  @extends('layouts.errors')
</div>
</div>
</div>

@endsection

@section('script')
<script>
    $('#datetimepicker1').datepicker({
    format: "yyyy-mm-dd",
    orientation: "bottom-right",
    todayHighlight: true
  });
</script>
@endsection
