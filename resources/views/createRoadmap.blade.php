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

  <div class="col-sm-2" id="divluggage" style="overflow:scroll; scrollbar force-overflow; height:100%;">
   @foreach ($pilgrims as $pilgrim)
    @php
      $col = randColor();
    @endphp
    @foreach ($pilgrim->luggages as $luggage)
      <div class="panel panel-default box navy color-{{$pilgrim->id}}" id="luggage-{{$luggage->id}}" draggable="true">
        <div class="panel-heading " style="color:white;">
          {{$luggage->pilgrim['name']}} - {{$luggage->id}}
        </div>
      </div>
      @endforeach
    @endforeach
</div>

<div class="col-sm-2" id="divpilgrim" style="overflow:scroll; scrollbar force-overflow; height:100%;">

 @foreach ($pilgrims as $key => $pilgrim)
    <div class="panel panel-default box red" id="pilgrim-{{$pilgrim->id}}" draggable="true">
      <div class="panel-heading color-{{$pilgrim->id}}" style=" color:white;">
        {{$pilgrim->name}}
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
<div class="col col-md-8">
  <table class="table" >
    <thead>
      <tr>
        <th>#</th>
        <th>Bagages-</th>
        <th>Bagages+</th>
        <th>Pelerins-</th>
        <th>Pelerins</th>
        {{-- <th>Camions</th> --}}
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="row">1</th>
        <td data-drop-target="true"></td>
        <td data-drop-target="true"></td>
        <td data-drop-target="true"></td>
        <td data-drop-target="true"></td>
      </tr>
      <tr>
        <th class="row">2</th>
        <td data-drop-target="true"></td>
        <td data-drop-target="true"></td>
        <td data-drop-target="true"></td>
        <td data-drop-target="true"></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td data-drop-target="true"></td>
        <td data-drop-target="true"></td>
        <td data-drop-target="true"></td>
        <td data-drop-target="true"></td>
      </tr>
    </tbody>
  </table>
</div>
</div>


@endsection

@section('script')
  <script src={{asset('js/main.js')}} type="text/javascript"></script>
@endsection
