@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">
		<div class="col-12">
			<a href="{{route('projects')}}">Terug</a>
			<h2>{{$project->title}}</h2>
			<p>{{$project->summary}}</p>
		</div>
	</div>
		
</div>

@endsection