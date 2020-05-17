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
			<button class="hamburger d-block d-lg-none" style="
			    top: 2px;
			    padding: 0;
			    height: 32px;
			    width: 32px;"><i class="material-icons md-32">menu</i></button>
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
	@include('partials.sidenav')
@stop

@section('content')
	<div id="mobile-banner" class="d-block d-md-none" style="overflow: auto;">
		<ul class="cb-slideshow">
			<li>
				<span style="background-image: url({{url('img/bg-2.png')}})" data-string="香港最全面銀行理財網絡">Image 02</span>
			</li>
			<li>
				<span style="background-image: url({{url('/img/42521347552_07ffb97315_k.jpg')}})" data-string="遠離破產危機">Image 01</span>
			</li>
		</ul>
		<div class="position-absolute w-100">
			<p class="mobile-tagline">
				<span>香港最全面銀行理財網絡</span>
			</p>

			<div class="mobile banner-buttons-wrapper mb-4">
				<div>
					<div class="d-inline-block banner-button-wrapper-individual">
						<div class="banner-button odd position-relative">
							<div class="banner-button-diamond">
								<img src="{{url('img/icn-1.png')}}"/>
							</div>
							<a class="banner-button-rect" href="#" style="background: #1C6678;">&nbsp;&nbsp;&nbsp;&nbsp;TU重組方案</a>
						</div>
					</div>
					<div class="d-inline-block banner-button-wrapper-individual">
						<div class="banner-button even position-relative">
							<div class="banner-button-diamond">
								<img src="{{url('img/icn-2.png')}}"/>
							</div>
							<a class="banner-button-rect" href="#" style="background: #D1AB59;">債務舒緩&nbsp;&nbsp;&nbsp;&nbsp;</a>
						</div>
					</div>
				</div>
				<div>
					<div class="d-inline-block banner-button-wrapper-individual">
						<div class="banner-button odd position-relative">
							<div class="banner-button-diamond">
								<img src="{{url('img/icn-3.png')}}"/>
							</div>
							<a class="banner-button-rect" href="#" style="background: #4A987C;">&nbsp;&nbsp;&nbsp;&nbsp;物業套現</a>
						</div>
					</div>
					<div class="d-inline-block banner-button-wrapper-individual">
						<div class="banner-button even position-relative">
							<div class="banner-button-diamond">
								<img src="{{url('img/icn-4.png')}}"/>
							</div>
							<a class="banner-button-rect" href="#" style="background: #4A6A9C;">加按套現&nbsp;&nbsp;&nbsp;&nbsp;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div id="banner" class="desktop row position-relative d-none d-md-block">
		<ul class="cb-slideshow">
			<li>
				<span style="background-image: url({{url('img/bg-2.png')}})" data-string="香港最全面銀行理財網絡">Image 02</span>
			</li>
			<li>
				<span style="background-image: url({{url('/img/42521347552_07ffb97315_k.jpg')}})" data-string="遠離破產危機">Image 01</span>
			</li>
		</ul>
        <div class="left-bg"></div>
        <div class="container">
            <div class="row">
                <div class="left-bg-ref left-div col-12 col-md-4 col-lg-4">
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
                <div class="tagline col-12 col-md-8 col-lg-8">
					<p class="tagline">
						<span>香港最全面銀行理財網絡</span><br>
						<button class="btn text-white call-for-action mt-3">聯絡我們</button>
					</p>
                </div>

				<style>
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
    </style>
@stop

@section('js')
	<script>

	function fadeFrontSlide() {
		$(".desktop .cb-slideshow li:last span").addClass('fade-out');
		var text = $(".desktop .cb-slideshow li:last span").attr("data-string");
		$(".desktop p.tagline").addClass('fade-out');
		setTimeout(function() {
			$(".desktop p.tagline span").text(text);
			setTimeout(function() {
				$(".desktop p.tagline").removeClass('fade-out');
			}, 300);
		}, 300);
		setTimeout(function() {
			$(".desktop .cb-slideshow li:first").appendTo('.desktop .cb-slideshow');
			$(".desktop .cb-slideshow li span.fade-out").removeClass('fade-out');
		}, 3500);
	}

	function mobileFadeFrontSlide() {
		$("#mobile-banner .cb-slideshow li:last span").addClass('fade-out');
		var text = $("#mobile-banner .cb-slideshow li:last span").attr("data-string");
		$("p.mobile-tagline").addClass('fade-out');
		setTimeout(function() {
			$("p.mobile-tagline span").text(text);
			setTimeout(function() {
				$("p.mobile-tagline").removeClass('fade-out');
			}, 300);
		}, 300);
		setTimeout(function() {
			$("#mobile-banner .cb-slideshow li:first").appendTo('#mobile-banner .cb-slideshow');
			$("#mobile-banner .cb-slideshow li span.fade-out").removeClass('fade-out');
		}, 3500);
	}

	$( document ).ready(function() {
		// $(window).bind("load", function() {
			$("p.tagline, p.mobile-tagline").addClass('opaque');
			setTimeout(function() {
				$(".desktop .banner-button:nth(0), .mobile .banner-button:nth(0)").addClass('appear');
				setTimeout(function() {
					$(".desktop .banner-button:nth(1), .mobile .banner-button:nth(1)").addClass('appear');
					setTimeout(function() {
						$(".desktop .banner-button:nth(2), .mobile .banner-button:nth(2)").addClass('appear');
						setTimeout(function() {
							$(".desktop .banner-button:nth(3), .mobile .banner-button:nth(3)").addClass('appear');
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

			setInterval(function(){ fadeFrontSlide(); }, 6000);
			setInterval(function(){ mobileFadeFrontSlide(); }, 6000);
		// });
	});
	</script>
@stop
