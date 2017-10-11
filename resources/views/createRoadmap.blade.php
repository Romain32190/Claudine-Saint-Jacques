@extends('layouts.app')

@section('content')
<div  style="width : 25%; display:flex;">
  <div class="col-sm-2">
        <ul style="display:flex;" >
    @foreach ($luggages as $luggage)
        <div  id="luggage-{{$luggage->id}}" draggable="true" style="line-height: 2em; color:white;">
          <a href="#" data-toggle="tooltip" title="{{$luggage->pilgrim['name']}}" style="color:black;"><i class="fa fa-suitcase" aria-hidden="true" style="margin-left: 0.8em;"></i></a>
        </div>
    @endforeach
    </ul>

      <ul style="display:flex;"  >
  @foreach ($pilgrims as $key => $pilgrim)
  <div  draggable="true" id="pilgrims-{{$pilgrim->id}}"  style="line-height: 2em;">
    <a href="#" data-toggle="tooltip" title="{{$pilgrim->name}}" style="color:black;"><i class="fa fa-users" aria-hidden="true" style="margin-left: 0.8em;"></i></a>
  </div>
  @endforeach
</ul>

      <ul style="display:flex;">

      @foreach ($drivers as $key => $driver)
          <div   draggable="true" id="drivers-{{$driver->id}}" style="line-height: 2em;" >
            <a href="#" data-toggle="tooltip" title="{{$driver->name}}" style="color:black;"><i class="fa fa-truck" aria-hidden="true" style="margin-left: 0.8em;"></i></a>
          </div>
      @endforeach
    </ul>
  </div>
</div>
<!-- <div style="display:flex;">
<div data-drop-target="true" style="height : 39em; width: 10em;"></div>
<div data-drop-target="true" style="height : 39em; width: 10em;"></div>
<div data-drop-target="true" style="height : 39em; width: 10em;"></div>
<div data-drop-target="true" style="height : 39em; width: 10em;"></div>
</div> -->
<!-- </div> -->



@endsection

@section('script')
  <script src={{asset('js/main.js')}} type="text/javascript"></script>
  <script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection
