@extends('layouts.app')

@section('content')
  <div class="col-sm-2"  style="overflow:scroll; scrollbar force-overflow; height:100%;">

    @foreach ($luggages as $key => $luggage)
      <div class="panel panel-default box navy" id="luggage-{{$luggage->id}}" draggable="true">
        <div class="panel-heading" style="background-color: #0000FF; color:white;">
          Bagages
        </div>

        <div class="panel-body">
          @foreach ($luggages as $luggage)

          <h3>{{$pilgrim->name}}</h3>
          <p>{{$luggage->start}}</p><p>{{$luggage->goal}}</p><br>
          <p>{{$luggage->weight}}</p>


           </p>
      </div>
      </div>
    @endforeach
</div>

<div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">

  @foreach ($pilgrims as $key => $pilgrim)
    <div class="panel panel-default box red" id="pilgrim-{{$pilgrim->id}}" draggable="true">
      <div class="panel-heading" style="background-color: #0000FF; color:white;">
        {{$pilgrim->name}}
      </div>
    </div>
  @endforeach
</div>

<div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">

      @foreach ($drivers as $key => $driver)
        <div draggable="true" id="drivers-{{$driver->id}}" class="panel panel-default box green">
          <div class="panel-heading"  style="background-color: #0000FF; color:white;">
            {{$driver->name}}
          </div>
      </div>
      @endforeach

</div>
<div data-drop-target="true" style="margin-left: 43.5em; height : 39em; width: 43em;"></div>
</div>


@endsection
