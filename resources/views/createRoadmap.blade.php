@extends('layouts.app')

@section('content')
  <div class="col-sm-2"  style="overflow:scroll; scrollbar force-overflow; height:100%;">

   @foreach ($luggages as $luggage)
      <div class="panel panel-default box navy" id="luggage-{{$luggage->id}}" draggable="true">
        <div class="panel-heading" style="background-color: #0000FF ; color:white;">
          {{$luggage->pilgrim['name']}}
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
<table class="table" style="width: 45em;" >
  <thead>
    <tr>
      <th>#</th>
      <th>Bagages</th>
      <th>Pelerins</th>
      <th>Camions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="row">1</th>
      <td data-drop-target="true"></td>
      <td data-drop-target="true"></td>
      <td data-drop-target="true"></td>
    </tr>
    <tr>
      <th class="row">2</th>
      <td data-drop-target="true"></td>
      <td data-drop-target="true"></td>
      <td data-drop-target="true"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td data-drop-target="true"></td>
      <td data-drop-target="true"></td>
      <td data-drop-target="true"></td>
    </tr>
  </tbody>
</div>
</table>
</div>
</div>


@endsection

@section('script')
  <script src={{asset('js/main.js')}} type="text/javascript"></script>
@endsection
