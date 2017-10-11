@extends('layouts.app')

@section('content')
  <div class="col-sm-2"  style="overflow:scroll; scrollbar force-overflow; height:100%;">
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="width: 10em;"><i class="fa fa-suitcase" aria-hidden="true"></i>
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
    @foreach ($luggages as $luggage)
      <div class="panel panel-default box navy" id="luggage-{{$luggage->id}}" draggable="true">
        <div class="panel-heading" id="luggage-{{$luggage->id}}" draggable="true" style="background-color: #0000FF; color:white;">
          {{$luggage->pilgrim['name']}}
        </div>


        <div class="panel-body">

          <p>{{$luggage->start}}</p><p>{{$luggage->goal}}</p><br>
          <p>{{$luggage->weight}} kg</p>


           </p>
      </div>
      </div>
    @endforeach
  </ul>
  </div>
</div>

<div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">

  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="width: 10em;"><i class="fa fa-users" aria-hidden="true"></i>
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
  @foreach ($pilgrims as $key => $pilgrim)
  <div class="panel-heading" draggable="true" id="pilgrims-{{$pilgrim->id}}"  style="background-color: #0000FF; color:white; width:12em;">
    {{$pilgrim->name}}
  </div>
  @endforeach
</ul>
</div>
</div>

<div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="width: 10em;"><i class="fa fa-truck" aria-hidden="true"></i>
      <span class="caret"></span></button>
      <ul class="dropdown-menu">

      @foreach ($drivers as $key => $driver)
        <div draggable="true" id="drivers-{{$driver->id}}" class="panel panel-default box green">
          <div class="panel-heading"  style="background-color: #0000FF; color:white;">
            {{$driver->name}}
          </div>
      </div>
      @endforeach
    </ul>
    </div>

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
