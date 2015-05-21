@extends('app')
	
	@section('content')
		<h1>Events</h1>

		@foreach($events as $event)
			<article>
				<h2><a href="{{url('/events',$event->id)}}">{{$event->event_title}}</a></h2>
				
				<div class="body">{{$event->event_description}}</div>
			</article>
		@endforeach

	@stop