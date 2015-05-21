@extends('app')
	
	@section('content')
		<h1>Profile</h1>

		
			<article>
				
				<div class="body">{{$profile->name}}
					<img src="{{$profile->profile_pic}}">
				</div>
				<a href="{{action('ProfileController@edit',$profile->id)}}">edit</a>
			</article>
		

	@stop