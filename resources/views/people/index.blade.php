@extends('app')
	
	@section('content')
		<h1>People</h1>

		@foreach($people as $person)
			<article>
				<h2><a href="{{url('/people/index',$person->id)}}">{{$person->name}}</a></h2>
				
				<div class="body">{{$person->name}}</div>
			</article>
		@endforeach

	@stop