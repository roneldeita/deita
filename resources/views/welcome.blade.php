@extends('layouts.app')

@section('styles')

    <link href="{!! asset('typed.js-master/css/css.css') !!}" rel="stylesheet">
    
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
                <p>I am a self-taught person. I never imagine that I will become a programmer because it is a job that doesn't work by using your natural instinct.
                    It requires you to keep a lot of things in your head at the same time. After being such for a lot of years, I unearth so many things.
                    I figure out that my brain is actually huge and I'm just using part of it, just ten percent. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center" style="background:transparent !important">
            <h1>Skills</h1>
                <div class="row skills" style="padding-top:50px">
                    <div class="col-sm-6 col-md-3">
                        <div class="progress-skill" data-value="0.90" data-grad="404040"></div>
                        <span class="text-primary"><strong>HTML</strong></span>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="progress-skill" data-value="0.75" data-grad="ff1a1a"></div>
                        <span class="text-primary"><strong>PHP</strong></span>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="progress-skill" data-value="0.60" data-grad="006699"></div>
                        <span class="text-primary"><strong>CSS</strong></span>
                    </div>
                     <div class="col-sm-6 col-md-3">
                        <div class="progress-skill" data-value="0.70" data-grad="408000"></div>
                        <span class="text-primary"><strong>JavaScript</strong></span>
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
    
    <script type="text/javascript" src="{!! asset('circle-progress/dist/circle-progress.min.js') !!}"></script>

    <script>
        $(function(){
            $("#typed").typed({
                stringsElement: $('#typed-strings'),
                contentType: 'html',
                typeSpeed: 80
            });

            $('.progress-skill').circleProgress({
                value: $(this).data('value'),
                size: 120,
                thickness: 15,
                lineCap: "square",
                fill: {
                  gradient: ["#ffff33", "#ffa31a", "#ff531a"]
                }
            });

        });

    </script>
    
@endsection