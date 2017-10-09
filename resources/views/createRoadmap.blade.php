@extends('layouts.app')

@section('content')
  <div class="col-sm-2"  style="overflow:scroll; scrollbar force-overflow; height:100%;">

    @foreach ($luggages as $luggage)
      <div class="panel panel-default box navy" id="box1" draggable="true">
        <div class="panel-heading" style="background-color: #0000FF; color:white;">
          Bagages
        </div>

        <div class="panel-body">


          <p>poids : {{$luggage->weight}}</p>
          <p>de : <select style="width: 100%; height:100%;" class="form-control form-control-sm" name="">
            @foreach ($steps as $step)
              <option value= {{$step->name}} > {{$step->name}} </option>
            @endforeach

          </select></p>
          <p>a :<select style="width: 100%; height: 100%" class="form-control form-control-sm" name="">
            @foreach ($steps as $step)
              <option value= {{$step->name}} > {{$step->name}} </option>
            @endforeach

          </select> </p>
      </div>
      </div>
    @endforeach
</div>

<div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">

  @foreach ($pilgrims as $pilgrim)
    <div class="panel panel-default box red" id="box2" draggable="true">
      <div class="panel-heading" style="background-color: #0000FF; color:white;">
        {{$pilgrim->name}}
      </div>
    </div>
  @endforeach
</div>

<div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">

      @foreach ($drivers as $driver)
        <div draggable="true" id="box3" class="panel panel-default box green">
          <div class="panel-heading"  style="background-color: #0000FF; color:white;">
            {{$driver->name}}
          </div>
      </div>
      @endforeach

</div>
<div data-drop-target="true" style="margin-left: 42em; height : 50em; width: 45em;"></div>
</div>


@endsection
