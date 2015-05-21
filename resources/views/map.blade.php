@extends('app')

	@section('head')
		<script type='text/javascript'>var centreGot = false;</script> 
		<script type="text/javascript">
		function updateDatabase(location)
		{
			// make an ajax request to a PHP file
			// on our site that will update the database
			// pass in our lat/lng as parameters
			document.getElementById("newLat").value = location;
			document.getElementById("newLng").value = newLng;
			// $.post(
			// 	"/map/", 
			// 	{ 'newLat': newLat, 'newLng': newLng, 'var1': 'value1' }
			// )
			// .done(function(data) {
			// 	alert("Database updated");
			// });
		}
		</script>
		{!! $map['js'] !!}
	@stop
	
	@section('content')
		<input type='text' id='myPlaceTextBox' /> 
		{!! $map['html'] !!}
		<input type='text' id='newLat' />
		<input type='text' id='newLng' />
	@stop