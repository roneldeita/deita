@extends('layouts.app')


@section('content')

	<div class="container" style="margin-top:50px">

		<div class="row">

			<div class="col-md-8 col-md-offset-2">
				
				<p style="font-size:40px;" class="text-center">Contact Me</p>

				{!! Form::open(['route'=>['contact.store'], 'id'=>'contact-form']) !!}

					<div class="form-group">
						{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Your Name']) !!}
					</div>

					<div class="form-group">
						{!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Your Email']) !!}
					</div>

					<div class="form-group">
						{!! Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Your Subject']) !!}
					</div>

					<div class="form-group">
						{!! Form::textarea('message', null, ['class'=>'form-control', 'size'=>'30x8', 'placeholder'=>'Message']) !!}
					</div>

					<div class="form-group text-center">
						{!! Form::submit('Submit', ['class'=>'btn btn-info btn-contactus', 'style'=>'min-width:200px']) !!}
					</div>

				{!! Form::close() !!}

			</div>	

		</div>

		<div class="row">

			<div class="col-md-8 col-md-offset-2">

				<div class="error-msg alert"></div>

			</div>
			
		</div> 

	</div>

	
@endsection

@section('scripts')

	<script type="text/javascript">
		$(document).ready(function() {

			$('#contact-form').on('submit',function(e){
			    $.ajaxSetup({
			        header:$('meta[name="_token"]').attr('content')
			    })
			    e.preventDefault(e);

			        $.ajax({

			       		type:"POST",
			        	url:$(this).attr('action'),
			        	data:$(this).serialize(),
			        	dataType: 'json',
			        	beforeSend: function(){
							disableBtn('btn-contactus','Submitting');
						},
			        	success: function(data){
			            	//console.log(data);
			        	},
			        	error: function(data){
			        		//get the response
			        		var errors = data.responseJSON;
        					//empty the error container
        					$( ".error-msg" ).empty();
        					//loop the trough and display the error
        					$.each( errors, function( key, value ) {
        						$('<li class="text-danger">'+ value +'</li>').appendTo('.error-msg');
							});
			        	},
			        	complete: function() {
							resetBtn('btn-contactus','Submit');
						}

			    	})
			 });

		});

		function disableBtn(btnClass,btnText){
			if(btnText){
				$('.'+btnClass).val(btnText);
			}
			$('.'+btnClass).addClass('disabled');
			
		}
		function resetBtn(btnClass,btnText){
			if(btnText){
				$('.'+btnClass).val(btnText);
			}
			$('.'+btnClass).removeClass('disabled');
		}

	</script>

@endsection