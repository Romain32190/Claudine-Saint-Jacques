@extends('layouts.app')

@php
  function randColor() {
      $color = '#';
      $colorHexLighter = array("3","4","5","6","7","8","9","A","B","C","D","E","F" );
      for($x=0; $x < 6; $x++):
        $color .= $colorHexLighter[array_rand($colorHexLighter, 1)]  ;
      endfor;
      return substr($color, 0, 7);
  }
@endphp

@section('content')
<div class="container" style="height: 85vh;">

  <style>
    @foreach($pilgrims as $pilgrim)
      @php
        $col = randColor();
      @endphp

      .color-{{$pilgrim->id}} {
        background-color:{{$col}};
      }
    @endforeach
  </style>

  <div class="col-sm-2 hideprint" id="divluggage" style="overflow-y:scroll; overflow-x: hidden; scrollbar force-overflow; height:100%;">
   @foreach ($pilgrims as $pilgrim)
    @php
      $col = randColor();
    @endphp
    @foreach ($pilgrim->luggages as $luggage)
      <div class="panel panel-default box navy color-{{$pilgrim->id}}  trashable" id="luggage-{{$luggage->id}}" draggable="true">
        <div class="panel-heading " style="color:white;">
          {{$luggage->pilgrim['name']}} - {{$luggage->id}} <i class="fa fa-trash" aria-hidden="true" style="margin-left: 0.5em;"></i>

        </div>
      </div>
      @endforeach
    @endforeach
</div>

<div class="col-sm-2 hideprint" id="divpilgrim" style="overflow-y:scroll; overflow-x: hidden; scrollbar force-overflow; height:100%;">

 @foreach ($pilgrims as $key => $pilgrim)
    <div class="panel panel-default box red trashable" id="pilgrim-{{$pilgrim->id}}" draggable="true">
      <div class="panel-heading color-{{$pilgrim->id}}" style=" color:white;">
        {{$pilgrim->name}} <i class="fa fa-trash" aria-hidden="true" style="margin-left: 0.5em;"></i>

      </div>
    </div>
  @endforeach
</div>

{{-- <div class="col-sm-2" id="divdriver" style="overflow:scroll; scrollbar force-overflow; height:100%;">

     @foreach ($drivers as $key => $driver)
        <div draggable="true" id="drivers-{{$driver->id}}" class="panel panel-default box green">
          <div class="panel-heading color-{{$pilgrim->id}}"  style="background-color: #0000FF ; color:white;" >
            {{$driver->name}}
          </div>
      </div>
      @endforeach

</div> --}}

<div class="col col-md-8 printscroll" style="overflow-y:scroll; overflow-x: hidden; scrollbar force-overflow;height: 100%;">
  <div class="printscroll">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Etapes et gîtes <a style="margin-left: 1em" href="{{url('createRoadmap')}}"><i class="fa fa-arrow-down" aria-hidden="true"></i></a><a style="margin-left: 1em" href="{{url('createRoadmap/reverse')}}"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></th>
        <th>Bagages+</th>
        <th>Bagages-</th>
        <th>Pelerins+</th>
        <th>Pelerins-</th>
        {{-- <th>Camions</th> --}}
      </tr>
    </thead>
    <tbody>

      @foreach($steps as $key => $step)

        <tr style="background-color: #B7FD9F"><td colspan="5">{{$step->name}}</td></tr>
        <tr><td><select class="form-control">

          @foreach($step->gites as $gite)
            <option value="{{$gite->name}}">{{$gite->name}}</option>
          @endforeach

        </select>
        </td><td data-drop-target="true"></td><td data-drop-target="true"></td><td data-drop-target="true"></td><td data-drop-target="true"></td></tr>
        <tr><td colspan="5"><i class="fa fa-plus-circle fa-2x addRow" data-stepid="{{$step->id}}" aria-hidden="true"></i></td></tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>


@endsection

@section('script')
  <script src={{asset('js/main.js')}} type="text/javascript"></script>
@endsection
