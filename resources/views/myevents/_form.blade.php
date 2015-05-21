			<div class="form-group">
				{!!Form::label('start_date','Start Date:')!!}
				{!!Form::date('start_date', date('d-m-Y h:i:s a'),['class'=>'form-control'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('end_date','End Date:')!!}
				{!!Form::date('end_date', date('d-m-Y h:i:s a'),['class'=>'form-control'])!!}
			</div>
			
			<div class="form-group">
				{!!Form::label('event_title','Event Title:')!!}
				{!!Form::text('event_title', null, ['class'=>'form-control'])!!}
			</div>	

			<div class="form-group">
				{!!Form::label('description','Description:')!!}
				{!!Form::textarea('description', null, ['class'=>'form-control'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('location','Location:')!!}
				{!!Form::text('location', null, ['class'=>'form-control'])!!}
				{!! Form::hidden('event_LatLng',null) !!}
				{!! $map['html'] !!}
			</div>

			<div class="form-group">
				{!!Form::label('category','Category:')!!}
				{!!Form::text('category', null, ['class'=>'form-control'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('price','Price:')!!}
				{!!Form::text('price', null, ['class'=>'form-control'])!!}
			</div>			

			<div class="form-group">
				{!!Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control'])!!}
			</div>