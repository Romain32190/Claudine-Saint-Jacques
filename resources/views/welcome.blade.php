
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->

                    <!-- New Task Form -->
                    <form action="" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label"></label>

                            <div class="col-sm-6">
                            </div>
                        </div>

                        <!-- Add Task Button -->
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
    </div>
@endsection