@extends('app')
	
	@section('content')
		<h1>{{$event->event_title}}</h1>

		<article>
			<div class="body">{{$event->start_date}} {{$event->end_date}}</div>

			<div class="body">{{$event->location}}
				
			</div>

			<div class="body">{{$event->description}}</div>

			<div class="body">{{$event->price}}</div>

			<div class="body">{{$event->category}}</div>

			<a href="{{action('MyEventsController@edit',$event->id)}}">edit</a>

		</article>	
		
	@stop