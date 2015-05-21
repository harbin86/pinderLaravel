			<div class="form-group">
				{!!Form::label('start_date','Start Date:')!!}
				{!!Form::date('start_date', date('d-m-Y'),['class'=>'form-control'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('end_date','Published On:')!!}
				{!!Form::date('end_date', date('d-m-Y'),['class'=>'form-control'])!!}
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
				{!!Form::label('event_address','Event Address:')!!}
				{!!Form::text('event_address', null, ['class'=>'form-control'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('category','Category:')!!}
				{!!Form::text('category', null, ['class'=>'form-control'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('cost','Cost:')!!}
				{!!Form::text('cost', null, ['class'=>'form-control'])!!}
			</div>			

			<div class="form-group">
				{!!Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control'])!!}
			</div>