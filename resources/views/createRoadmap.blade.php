@extends('layouts.app')

@section('content')
  <div class="col-sm-2"  style="overflow:scroll; scrollbar force-overflow; height:100%;">

   @foreach ($luggages as $luggage)
      <div class="panel panel-default box navy" id="luggage-{{$luggage->id}}" draggable="true">
        <div class="panel-heading" style="background-color: #0000FF ; color:white;">
          Bagages
        </div>


       <div class="panel-body">


         <h3>{{$luggage->pilgrim['name']}}</h3>
          <p>{{$luggage->start}}</p><p>{{$luggage->goal}}</p><br>
          <p>{{$luggage->weight}} kg</p>


          </p>
      </div>
      </div>
    @endforeach
</div>

<div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">

 @foreach ($pilgrims as $key => $pilgrim)
    <div class="panel panel-default box red" id="pilgrim-{{$pilgrim->id}}" draggable="true">
      <div class="panel-heading" style="background-color: #0000FF ; color:white;">
        {{$pilgrim->name}}
      </div>
    </div>
  @endforeach
</div>

<div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">

     @foreach ($drivers as $key => $driver)
        <div draggable="true" id="drivers-{{$driver->id}}" class="panel panel-default box green">
          <div class="panel-heading"  style="background-color: #0000FF ; color:white;">
            {{$driver->name}}
          </div>
      </div>
      @endforeach

</div>
<div style="display:flex;">
<div data-drop-target="true" style="height : 39em; width: 10em;"></div>
<div data-drop-target="true" style="height : 39em; width: 10em;"></div>
<div data-drop-target="true" style="height : 39em; width: 10em;"></div>
<div data-drop-target="true" style="height : 39em; width: 10em;"></div>
</div>
</div>


@endsection

@section('script')
  <script src={{asset('js/main.js')}} type="text/javascript"></script>
@endsection
