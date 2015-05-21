@extends('app')
	
	@section('content')
		<h1>Events</h1>

		<a href="{{action('MyEventsController@create')}}">create</a>

		@foreach($events as $event)
			<article>
				<h2><a href="{{action('MyEventsController@show',$event->id)}}">{{$event->event_title}}</a></h2>
				
				<div class="body">{{$event->description}}
					<a href="{{action('MyEventsController@edit',$event->id)}}">edit</a>
				</div>
			</article>
		@endforeach

	@stop