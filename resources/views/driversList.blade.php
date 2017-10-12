@extends('layouts.app')

@section('content')
<div class="">

<table>

<tr>
  <td>nom</td>
  <td>prenom</td>
  <td>vehicule</td>
  <td>diponible</td>
</tr>
  @foreach($drivers as $driver)
  <tr>
  <td>
    {{$driver->name}}
  </td>
  <td>
    {{$driver->firstname}}
  </td>
    <td id="driver-{{$driver->id}}">
      {{$driver->id_vehicle}}
    </td>
</tr>


  @endforeach


</table>

</div>
@endsection
