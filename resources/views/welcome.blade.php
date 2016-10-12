@extends('layouts.app')

@section('styles')

<link href="{!! asset('typed.js-master/css/css.css') !!}" rel="stylesheet">
<script src="https://use.fontawesome.com/e3f893d60b.js"></script>

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="cmd">
                <div class="panel panel-default panel-cmd">
                    <div class="panel-heading">

                        <span class="fa fa-gears" aria-hidden="true"></span> deita >_
                        <span class="fa fa-close pull-right" aria-hidden="true"></span>

                    </div>

                    <div class="panel-body">

                        <div id="typed-strings">
                            <p>Hi, my name is <strong>Ronel Deita</strong>.</p>
                            <p>I enjoy learning and eager to widen my skills.</p>
                        </div>

                        <span id="typed"></span>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center" style="background:transparent !important">
                <p style="line-height:10px">A little bit</p>
                <h1 style="line-height:20px">about me</h1>
                <div style="padding-top:50px">
                <p>I am a self-taught person. I never imagine to myself that I will become a programmer because I knew it was kind of a job that doesn't work in just a natural way of thinking 
                 and you'll have to keep a lot of things in your head all at the same time.
                    After years of doing such things, it changes my way of thinking. I figure out that my brain was actually big and I am just using ten percent of it. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center" style="background:transparent !important">
            <h1>Skills</h1>
                <div class="row" style="padding-top:50px">
                    <div class="col-sm-6 col-md-3">
                        <div class="html"></div><span>HTML</span>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="php"></div><span>PHP</span>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="css"></div><span>CSS</span>
                    </div>
                     <div class="col-sm-6 col-md-3">
                        <div class="js"></div><span>JavaScript</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript" src="{!! asset('typed.js-master/dist/typed.min.js') !!}"></script>

<script type="text/javascript" src="{!! asset('jquery-circle-progress-1.2.0/dist/circle-progress.min.js') !!}"></script>

<script>
    $(function(){
        $("#typed").typed({
             stringsElement: $('#typed-strings'),
            contentType: 'html',
            typeSpeed: 80
        });

        $('.html').circleProgress({
            value: 0.90,
            size: 120,
            thickness: 15,
            lineCap: "square",
            fill: {
              gradient: ["#cccccc", "#404040"]
            }
        });

        $('.php').circleProgress({
            value: 0.75,
            size: 120,
            thickness: 15,
            lineCap: "square",
            fill: {
              gradient: ["#ffb3b3", "#ff1a1a"]
            }
        });

        $('.css').circleProgress({
            value: 0.60,
            size: 120,
            thickness: 15,
            lineCap: "square",
            fill: {
              gradient: ["#99ddff", "#006699"]
            }
        });

        $('.js').circleProgress({
            value: 0.70,
            size: 120,
            thickness: 15,
            lineCap: "square",
            fill: {
              gradient: ["#ccff99", "#408000"]
            }
        });

    });

</script>
    
@endsection