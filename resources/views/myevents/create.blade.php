@extends('app')

@section('head')
		<script type='text/javascript'>var centreGot = false;</script> 
		<script type="text/javascript">
		function updateDatabase(location)
		{
			// make an ajax request to a PHP file
			// on our site that will update the database
			// pass in our lat/lng as parameters
			// document.getElementById("event_LatLng").value = location;
			
		}
		</script>
		{!! $map['js'] !!}
	@stop
	
	@section('content')
		<h1>Create a New Event</h1>

		{!!Form::open(['url' => 'myevents'])!!}
			@include('myevents/_form', ['submitButtonText' => 'Add Event'])
		{!!Form::close()!!}	

		@include('errors/list')

	@stop