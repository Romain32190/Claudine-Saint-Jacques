@extends('layouts.app')

@section('content')
  <div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">

    @foreach ($luggages as $luggage)
      <div class="panel panel-default">
        <div class="panel-heading">
          Baggages
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
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-6">
              </div>
            </div>
          </form>
        </div>
      </div>
    @endforeach
</div>

<div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">

  @foreach ($pilgrims as $pilgrim)
    <div class="panel panel-default">
      <div class="panel-heading">
        {{$pilgrim->name}}
      </div>

      <div class="panel-body">


        <p>nom : {{$pilgrim->name}}</p>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
            </div>
          </div>
        </form>
      </div>
    </div>
  @endforeach
</div>

<div class="col-sm-2" style="overflow:scroll; scrollbar force-overflow; height:100%;">

      @foreach ($drivers as $driver)
        <div class="panel panel-default">
          <div class="panel-heading">
            {{$driver->name}}
          </div>

          <div class="panel-body">


            <p>name : </p>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                </div>
              </div>
            </form>
          </div>
        </div>
      @endforeach

</div>
</div>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkOzOLLwUvc8nJvyTm2KJPNFD6bPDKtWk&callback=initMap">
    </script>
@endsection
