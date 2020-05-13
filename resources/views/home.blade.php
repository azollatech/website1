@extends('layouts.master')

@section('title', __('Home'))

@section('navbar')
	<nav class="navbar navbar-expand-lg navbar-light py-3" style="
    position: fixed;
    z-index: 10000;
    width: 100%;
    top: 0;
    background: rgba(51, 52, 60, 0.91);
    background: linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(51, 52, 60, 0.91) 70%);
    ">
		<div class="container position-relative">
			<a class="navbar-brand" href="{{url('/')}}">
				<h1 class="text-white" style="
				    font-size: 1.7rem;
				    letter-spacing: 1px;
				    text-shadow: 0px 1px 4px rgba(0,0,0,0.3);">還原理財中心</h1>
			</a>
			<button class="hamburger d-block d-lg-none"><i class="material-icons md-32">menu</i></button>
			@include('partials.navbar')
		</div>
	</nav>

	<nav id="hidden-navbar" class="navbar navbar-expand-lg navbar-light" style="
    position: fixed;
	top: -86px;
    z-index: 1000;
	background: #fff;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    width: 100%;">
		<div class="container position-relative">
			<a class="navbar-brand" href="{{url('/')}}">
				<h1>還原理財中心</h1>
			</a>
			<button class="hamburger d-block d-lg-none" style="
		    margin: 0;
		    position: absolute;
		    top: 50%;
		    right: 0;
		    transform: translate(0, -50%);
			"><i class="material-icons md-32">menu</i></button>
			@include('partials.navbar')
		</div>
	</nav>
	{{-- @include('partials.sidenav') --}}
@stop

@section('content')
    <div id="banner" class="row position-relative">
		{{-- <ul class="cb-slideshow">
			<li>
				<span style="background-image: url({{url('/img/42521347552_07ffb97315_k.jpg')}})">Image 01</span>
			</li>
			<li>
				<span style="background-image: url({{url('img/1vfjxvkulpy.jpg')}})">Image 02</span>
			</li>
		</ul> --}}
        <div class="left-bg"></div>
        <div class="container">
            <div class="row">
                <div class="left-bg-ref col-4" style="
                    height: 100%;
                    padding-top: 180px;
                    padding-left: 20px;
                ">
                    <div class="banner-buttons-wrapper">
                        <div class="banner-button odd position-relative">
                            <div class="banner-button-diamond">
								<img src="{{url('img/icn-1.png')}}"/>
							</div>
                            <a class="banner-button-rect" href="#" style="background: #1C6678;">&nbsp;&nbsp;&nbsp;&nbsp;TU重組方案</a>
                        </div>
                        <div class="banner-button even position-relative">
                            <div class="banner-button-diamond">
								<img src="{{url('img/icn-2.png')}}"/>
							</div>
                            <a class="banner-button-rect" href="#" style="background: #D1AB59;">債務舒緩&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </div>
                        <div class="banner-button odd position-relative">
                            <div class="banner-button-diamond">
								<img src="{{url('img/icn-3.png')}}"/>
							</div>
                            <a class="banner-button-rect" href="#" style="background: #4A987C;">&nbsp;&nbsp;&nbsp;&nbsp;物業套現</a>
                        </div>
                        <div class="banner-button even position-relative">
                            <div class="banner-button-diamond">
								<img src="{{url('img/icn-4.png')}}"/>
							</div>
                            <a class="banner-button-rect" href="#" style="background: #4A6A9C;">加按套現&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </div>
                    </div>
                </div>
                <div class="tagline col-8" style="
                    color: white;
				    z-index: 2000;
                    text-align: left;
				    font-size: 2.8rem;
				    font-weight: 700;
                    letter-spacing: 2px;
                    text-shadow: 0px 1px 4px rgba(0,0,0,0.5);
                ">
					<p class="tagline" style="display: none;">
                    香港最全面銀行理財網絡</p>
                </div>

				<style>
					body{
						background-color: #121212;
					}

					p.tagline {
						border-right: solid 3px rgba(255,255,255,1);
						white-space: nowrap;
						overflow: hidden;
						font-size: 2.8rem;
						font-weight: 700;
						color: rgba(255,255,255,1);
					    margin-top: 340px;
						padding-left: 36px;
					}

					/* Animation */
					p.tagline.start {
						animation: animated-text 2s steps(29,end) 1s 1 normal both,
						animated-cursor 600ms steps(29,end) infinite;
					}

					/* text animation */

					@keyframes animated-text{
						from{width: 0;}
						to{width: 556px;}
					}

					/* cursor animations */

					@keyframes animated-cursor{
						from{border-right-color: rgba(255,255,255,1);}
						to{border-right-color: transparent;}
					}
				</style>
            </div>
        </div>
    </div>
	<div class="position-relative">
	</div>
	<div class="container">
	</div>
@stop

@section('css')
    <style>
		body {
		    overflow-x: hidden;
		}

.cb-slideshow,
.cb-slideshow:after {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    z-index: 0;
}
/* .cb-slideshow:after {
    content: '';
    background: transparent url(../images/pattern.png) repeat top left;
} */
.cb-slideshow li span {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    color: transparent;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: none;
    z-index: 0;
	-webkit-backface-visibility: hidden;
}
.cb-slideshow li span.invisible {
	opacity: 0;
}
        #banner {
            height: 100vh;
            -moz-background-size:cover;
            -webkit-background-size:cover;
            -o-background-size:cover;
            background-size:cover;
            background: url({{url('/')}}/img/42521347552_07ffb97315_k.jpg) no-repeat center center;
        }
        .banner-buttons-wrapper {
        }
        .banner-button {
            margin-bottom: 80px!important;
			opacity: 0;
			transition: opacity 1.5s;
        }
		.banner-button.appear {
			opacity: 1;
		}
        .banner-button-rect {
		    z-index: 100;
            max-width: 240px;
            display: block;
            color: #444;
            text-shadow: 0px 1px 4px rgba(0,0,0,0.5);
            box-shadow: 0 3px 6px 1px rgba(0,0,0,0.2);
            cursor: pointer;
            vertical-align: middle;
            padding: 6px;
            text-align: center;
            font-size: 1.3rem;
            color: white;
            border-radius: 4px;
            height: 48px;
            line-height: 36px;
		    padding-left: 0;
			transition: all .5s;
			-webkit-transition: all .5s;
        }
        .banner-button-rect:hover {
            color: white;
		    box-shadow: 0 3px 6px 1px rgba(0,0,0,0.4);
		    text-shadow: 0px 1px 4px rgba(0,0,0,0.7);
        }
        .banner-button-diamond {
			cursor: pointer;
		    z-index: 200;
            background: white;
            width: 56px;
            height: 56px;
            border-radius: 6px;
            position: absolute;
            top: -4px;
            left: -24px;
            transform: rotate(45deg);
            border: 1px solid rgba(0,0,0,0.2);
            /* box-shadow: 0px 2px 16px 0px rgba(0,0,0,0.3); */
            box-shadow: 0px 2px 28px 0px rgba(0,0,0,0.6);
		    transform: rotate(45deg) scale(1);
			transition: transform .5s;
        }
		.banner-button:hover .banner-button-diamond {
			transform: rotate(45deg) scale(1.1);
		}
		.banner-button.odd:hover .banner-button-rect {
		    padding-left: 24px;
			-webkit-filter: brightness(120%);
			filter: brightness(120%);
		}
		.banner-button.even:hover .banner-button-rect {
			padding-right: 24px;
			-webkit-filter: brightness(120%);
			filter: brightness(120%);
		}
        .banner-button.odd {
            margin-left: 32px;
        }
        .banner-button.even .banner-button-diamond {
           left: 212px;
        }
		.banner-button .banner-button-diamond img {
		    width: 42px;
		    height: 42px;
		    transform: rotate(-45deg);
		    margin-left: 6px;
		    margin-top: 6px;
		}
        .left-bg {
			width: 0;
            background: rgba(51, 52, 60, 0.71);
            height: 100%;
            position: absolute;
			transition: width 1s;
        }
		footer {
			z-index: 1;
		}
    </style>
@stop

@section('js')
	<script>

	function changeBG() {
		setTimeout(function() {
			$(".cb-slideshow li span").addClass('invisible');
		}, 600);
	}

	$( document ).ready(function() {
		$(window).bind("load", function() {
			$("p.tagline").show();
			$("p.tagline").addClass("start");
			setTimeout(function() {
				$(".banner-button:nth(0)").addClass('appear');
				setTimeout(function() {
					$(".banner-button:nth(1)").addClass('appear');
					setTimeout(function() {
						$(".banner-button:nth(2)").addClass('appear');
						setTimeout(function() {
							$(".banner-button:nth(3)").addClass('appear');
						}, 200);
					}, 200);
				}, 200);
			}, 200);


		    var w = $(".left-bg-ref").position().left + $(".left-bg-ref").outerWidth();
		    $(".left-bg").css({'width': w+'px'});
		    $( window ).resize(function() {
		        var w = $(".left-bg-ref").position().left + $(".left-bg-ref").outerWidth();
		        $(".left-bg").css({'width': w+'px'});
		    });
		});
	});
	</script>
@stop
