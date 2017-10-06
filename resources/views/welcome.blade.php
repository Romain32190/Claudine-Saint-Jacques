
@extends('layouts.app')

@section('content')
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Bagages
                </div>

                <div class="panel-body">
                    <form action="" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-sm-3">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>

                    <div class="panel-body">
                    </div>
                </div>
        </div>
         <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Pélerins
                </div>

                <div class="panel-body">
                    <form action="" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-sm-3">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>

                    <div class="panel-body">
                    </div>
                </div>
        </div>
        <div class="col-sm-3">

          @foreach ($drivers as $driver)
            <div class="panel panel-default">
              <div class="panel-heading">
                Voituriers
              </div>

              <div class="panel-body">


                <p>name : {{$driver->name}}</p>

                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          @endforeach

              
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Maps
                </div>

                <div class="panel-body">
                    <form action="" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-sm-3">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>

                    <div class="panel-body">
                    </div>
                </div>
        </div>

@endsection
