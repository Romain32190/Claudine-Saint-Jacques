@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col col-md-9">
			<form action="{{ route('steps.edit', $step) }}" method="POST">
				{{ method_field('PATCH') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Nom</label>
					<input required type="text" class="form-control" name="name" id="name" placeholder="St jean pied de porc" value="{{$step->name}}">
				</div>
				<div class="form-group">
					<label for="latitude">latitude</label>
					<input required type="text" class="form-control" name="latitude" id="latitude" placeholder="0." value="{{$step->latitude}}">
				</div>
				<div class="form-group">
					<label for="longitude">longitude</label>
					<input required type="text" class="form-control" name="longitude" id="longitude" placeholder="0." value="{{$step->longitude}}">
				</div>

				<!-- <blockquote>TODO: changer la position de l'etape</blockquote> -->
				<!-- 		  <div class="form-group">
				<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
				</div> -->
				<!-- 		  <div class="checkbox">
				<label>
				  <input type="checkbox"> Check me out
				</label>
				</div> -->
				<button type="submit" class="btn btn-default">Mettre à jour</button>
			</form>
		</div>

{{--		<div class="col col-md-3" style="height: 85vh;">
			<div style="overflow-y:scroll; height: 100%;">
				<ul>

				@foreach ($steps as $key => $step)
					<p style="line-height: 0.5em"><i title="inserer une etape ici" style="cursor: pointer;" data-id="{{$step->steporder}}" class="fa fa-plus-circle innerStep" aria-hidden="true"></i></p>
					<p style="line-height: 0.5em" id="{{$step->id}}">&nbsp;|&nbsp;&nbsp;<a title="editer etape" href="{{route('steps.edit',$step)}}">{{$step->name}}</a></p>
				@endforeach
				<!-- last ?? -->
				</ul>
			</div>
		</div> --}}
	</div>
	@extends('layouts.errors')
</div>


@endsection
@section('script')

@endsection
