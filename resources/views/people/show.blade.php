@extends('app')
	
	@section('content')
		<h1>{{$event->event_title}}</h1>

		<article>
			<div class="body">{{$event->date_from}} {{$event->date_to}}</div>

			<div class="body">{{$event->event_address}}
				<!-- <a href="{{action('ArticlesController@edit',$article->id)}}">edit</a>
				<a href="{{action('ArticlesController@destroy',$article->id)}}">delete</a> -->
			</div>

			<div class="body">{{$event->description}}</div>

			<div class="body">{{$event->cost}}</div>

			<div class="body">{{$event->category}}</div>

		</article>	
		
	@stop