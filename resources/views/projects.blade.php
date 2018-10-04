@extends('layouts.app')

@section('content')

<div class="container">
	
	@foreach($projects as $project)
		<div class="row">
			<div class="col-12">
				<h2>{{$project->title}}</h2>
				<p>{{$project->summary}}</p>
				<a href="{{route('project', ['id'=>$project->id])}}">Bekijk project!</a>
				<hr>
			</div>
		</div>
	@endforeach
		
</div>

@endsection