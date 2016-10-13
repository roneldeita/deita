$(document).ready(function() {

	$('#contact-form').on('submit',function(e){
		$.ajaxSetup({
   	 		headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		}
		});
		e.preventDefault(e);

		 $.ajax({

			type:"POST",
			url:$(this).attr('action'),
			data:$(this).serialize(),
			dataType: 'json',
			beforeSend: function(){
				//empty the error container
        		$( ".error-msg" ).empty();
        		//disable and change the value of button
				disableBtn('btn-contactus','Submitting');
			},
			success: function(data){
				console.log(data);
			},
			error: function(data){
			    //get the response
			    var errors = data.responseJSON;
        		//loop the trough and display the error
        		$.each( errors, function( key, value ) {
        			$('<li class="text-danger">'+ value +'</li>').appendTo('.error-msg');
				});
			},
			complete: function() {
				//enable and reset button
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
