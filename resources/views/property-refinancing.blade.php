@extends('layouts.master')

@section('title', __('Contact Us'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
	@include('partials.header-banner', ["image"=>"banner-4-darken.jpg", "title"=>"加按套現"])
    <section class="py-5" style="background: #fafafa;">
    	<div class="container">
            <div class="mb-5">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-8" style="font-size: 1rem;">
                        <div>
                            <h2 style="text-align: left;" data-fontsize="34" data-lineheight="50">加按套現</h2>
                        </div>
                        <div class="separator" style="
                            margin-top: 15px;
                            margin-bottom: 35px;
                            width: 100%;
                            max-width: 170px;
                            min-height: 2px;
                            background: #dddddd;"></div>
                        <div class="mb-4">
                            <p>「加按」等於銀行再次按揭，貸款年期便與一般按揭相若，差不多達25至30年（視乎物業的估值及未嘗還的金額的多少不過「加按」的理念是以物業作為銀行抵押，因此最終得到的款金額也取決於物業當時的樓價而定。</p>
                        </div>
                    </div>
                    <div class="col-2">
                    </div>
                </div>
    		</div>
    	</div>
    </section>
	<section class="py-5" style="background: #fafafa;">
		<div class="container">
			<div class="mb-5">
				<div class="text-center">
					<div class="fusion-text">
						<h2 data-fontsize="34" data-lineheight="50">了解更多</h2>
					</div>
					<div class="separator" style="
						margin: auto;
						margin-top: 15px;
						margin-bottom: 35px;
						width: 100%;
						max-width: 170px;
						min-height: 2px;
						background: #dddddd;"></div>

					<div class="row">
						<div class="col-12 col-md-6 text-center mb-5">
							<div class="link-area-link-icon link-type-button icon-hover-animation-slide">
								<i class="fontawesome-icon circle-yes fa fa-mobile" aria-hidden="true" style="
									border: 3px solid #f44336;
									background-color: #f7f7f7;
									box-sizing: content-box;
									height: 100px;
									width: 100px;
									line-height: 100px;
									border-radius: 50%;
									color: #f44336;
									font-size: 80px;"></i>
							</div>
							<div style="
								font-size: 26px;
								line-height: 31px;
								font-weight: 700;
								line-height: 50px;
								letter-spacing: 0px;
								font-style: normal;
								margin-top: 4px;
								color: #3d405c;">一鍵電話查詢</div>
							<a href="tel://98765432">
								<button class="contact-now-buttons btn btn-primary btn-block mt-3" style="background-color: #D5382D;">立即致電</button>
							</a>
						</div>
						<div class="col-12 col-md-6 text-center mb-5">
							<div class="link-area-link-icon link-type-button icon-hover-animation-slide">
								<i class="fontawesome-icon circle-yes fa fa-whatsapp" aria-hidden="true" style="
									border: 3px solid #8bc34a;
									background-color: #f7f7f7;
									box-sizing: content-box;
									height: 100px;
									width: 100px;
									line-height: 100px;
									border-radius: 50%;
									color: #8bc34a;
									font-size: 50px;"></i>
							</div>
							<div style="
								font-size: 26px;
								line-height: 31px;
								font-weight: 700;
								line-height: 50px;
								letter-spacing: 0px;
								font-style: normal;
								margin-top: 4px;
								color: #3d405c;">一鍵WHATSAPP查詢</div>
							<a href="https://api.whatsapp.com/send?phone=85298765432&text=%E6%88%91%E6%83%B3%E4%BA%86%E8%A7%A3%E6%9B%B4%E5%A4%9A">
								<button class="contact-now-buttons btn btn-primary btn-block mt-3" style="background-color: green;">立即WHATSAPP</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('css')
    <style>
    </style>
@stop

@section('js')
	<script>
	$( document ).ready(function() {

	});
	</script>
@stop
