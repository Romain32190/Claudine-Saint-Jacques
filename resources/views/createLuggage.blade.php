@extends('layouts.app')

@section('luggage')

<div class="">
  <form class="" action="/storeLuggage" method="post">
    {{csrf_field()}}
    <label for="pilgrim">Pelerin</label>
    <select class="" name="id_pilgrims">
      @foreach($pilgrims as $pilgrim)
      <option value="{{$pilgrim->id}}">{{$pilgrim->name}} {{$pilgrim->firstname}}</option>
      @endforeach
    </select><br>
    <label for="weight">Poids</label>
    <select class="" name="weight">
      <?php
      for($i =0; $i<=14; $i++){
        echo "<option value=$i>$i</option>";
      };
      ?>
    </select><br>
    <label for="startDate">date de départ</label>
    <input type="date" name="startDate"  ><br>
    <label for="start">lieu départ</label>
    <select class="" name="start" id="start">
      @foreach ($gites as $gite)
      <option value="{{$gite->name}}">{{$gite->name}}</option>
      @endforeach
    </select><br>
    <label for="goal">lieu arrivée</label>
    <select class="" name="goal" id="goal">
      @foreach ($gites as $gite)
      <option value="{{$gite->name}}">{{$gite->name}}</option>
      @endforeach
    </select><br>
    <button type="submit" name="button">send</button>
  </form>
</div>

@endsection
