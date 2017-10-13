@extends('layouts.app')

@php
	function randColor() {
			$color = '#';
			$colorHexLighter = array("3","4","5","6","7","8","9","A","B","C","D","E","F" );
			for($x=0; $x < 6; $x++):
				$color .= $colorHexLighter[array_rand($colorHexLighter, 1)]  ;
			endfor;
			return substr($color, 0, 9);
	}
@endphp

@section('content')
	<div class="container">
		<div class="col col-md-2">
			
		@foreach ($pilgrims as $pilgrim)
			@php 
			$col = randColor();
			@endphp
			<i style="color: {{$col}}" class="fa fa-users testid_{{ $pilgrim->id }}" aria-hidden="true" title="{{ $pilgrim->name }}"></i>
			<p>$pilgrim->address</p>
			@foreach ($pilgrim->luggages as $luggage)
			<i style="color: {{$col}}" class="fa fa-suitcase testid_{{ $pilgrim->id }}" aria-hidden="true" title="{{ $pilgrim->name }}"></i>				
			@endforeach
		</br>
		@endforeach

		</div>
		<div class="col col-md-8">

		</div>
	</div>
@endsection
@section('script')

@endsection