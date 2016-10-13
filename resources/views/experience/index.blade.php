@extends('layouts.app')

@section('styles')


	<link href="{!! asset('timeline-me/src/jquery.timelineMe.css') !!}" rel="stylesheet">

@endsection

@section('content')
	
	<div class="container" style="margin-top:50px">

		<div class="row">

			<div class="col-md-8 col-md-offset-2">
					
				<p style="font-size:40px;" class="text-center">Experience</p>

			</div>

		</div>

		<div class="row">

			<div class="col-md-12" style="background-color:#d9d9d9">

				<div id="timeline-container-basic" type="text"></div>

			</div>

		</div>

	</div>

@endsection

@section('scripts')

	<script type="text/javascript" src="{!! asset('timeline-me/src/jquery.timelineMe.js') !!}"></script>

	<script type="text/javascript">

		$(function(){

			$('#timeline-container-basic').timelineMe({
			  items: [
			    {
			      type: 'smallItem',
			      picto: '<i class="fa fa-suitcase text-primary" style="font-size:22px" aria-hidden="true"></i>',
			      label: '2013',
			      shortContent: '<strong>CABLELINK</strong>',
			      fullContent: '<strong>CABLELINK</strong> & Holdings Corporation <br>PHP Programmer <br> 8210 Dr. A Santos Ave., San Isidro Sucat, Parañaque City <br><br> <strong> PHP | JavaScript | CSS | SmartWeb | CodeIgniter | Laravel</strong> <br> <div style="text-align: center;"><img class="app-logo" src="{{url("/images/cablelink.jpg")}}" alt="logo"></div>',
			      showMore: '<i class="fa fa-chevron-down" aria-hidden="true"></i>',
			      showLess: '<i class="fa fa-chevron-up" aria-hidden="true"></i>',
			    },
			    {
			      type: 'smallItem',
			      picto: '<i class="fa fa-book text-primary" style="font-size:22px" aria-hidden="true"></i>',
			      label: '2008-2012',
			      shortContent: '<strong>WMSU</strong>',
			      fullContent: '<strong>WESTERN MINDANAO STATE UNIVERSITY</strong> <br> Bachelor of Science in Computer Science <br> Ipil Heights, Ipil, Zamboanga Sibugay <br> <br> <strong>Fundamentals of Programming | HTML | PHP | Visual Basic | MySQL</strong> <br> <div style="text-align: center;"><img class="app-logo" src="{{url("/images/wmsu.png")}}" alt="logo"></div>',
			      showMore: '<i class="fa fa-chevron-down" aria-hidden="true"></i>',
			      showLess: '<i class="fa fa-chevron-up" aria-hidden="true"></i>'
				},
			    {
			      type: 'smallItem',
			      picto: '<i class="fa fa-book text-primary" style="font-size:22px" aria-hidden="true"></i>',
			      label: '2007-2008',
			      shortContent: '<strong>MEDINA COLLEGE</strong>',
			      fullContent: '<strong>MEDINA COLLEGE IPIL</strong> <br> Bachelor of Science in Information Technology <br> Don Andress, Ipil, Zamboanga Sibugay <br> <div style="text-align: center;"><img class="app-logo" src="{{url("/images/medina.png")}}" alt="logo"></div>',
			      showMore: '<i class="fa fa-chevron-down" aria-hidden="true"></i>',
			      showLess: '<i class="fa fa-chevron-up" aria-hidden="true"></i>'
				}
			    // },
			    // {
			    //   type: 'bigItem',
			    //   picto: '<i class="fa fa-book" aria-hidden="true"></i>',
			    //   label: '<span>my label 3</span>',
			    //   shortContent: 'short description',
			    //   fullContent: 'big description <br> with more lines <br> than the short one. <br> <div style="text-align: center;"><img src="https://assets-cdn.github.com/images/modules/logos_page/Octocat.png" style="width: 50%;" /></div>',
			    //   showMore: 'show more',
			    //   showLess: 'show less'
			    // }
			  ]

			});

		});

	</script>

@endsection