@extends('app')
	
	@section('content')
		<h1>Edit: {!!$event->title!!}</h1>

		{!!Form::model($event, ['method' =>'PATCH','action' => ['MyEventsController@update',$event->id]])!!}
			@include('myevents/_form',['submitButtonText' => 'Update Event'])

		{!!Form::close()!!}	

		@include('errors/list')

	@stop