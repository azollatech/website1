@extends('layouts.master')

@section('title', __('主頁'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
	<div id="mobile-banner" class="d-block d-md-none" style="overflow: auto;">
		<ul class="cb-slideshow">
			<li>
				<span style="background-image: url({{url('img/bg-2-min.png')}})" data-string="香港最全面銀行理財網絡">Image 02</span>
			</li>
			<li>
				<span style="background-image: url({{url('/img/42521347552_07ffb97315_k-min.jpg')}})" data-string="遠離破產危機">Image 01</span>
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
							<div class="banner-button-diamond" data-href="{{url('tu-debt-restructuring')}}">
								<img src="{{url('img/icn-1.png')}}"/>
							</div>
							<a class="banner-button-rect" href="{{url('tu-debt-restructuring')}}" style="background: #1C6678;">&nbsp;&nbsp;&nbsp;&nbsp;TU重組方案</a>
						</div>
					</div>
					<div class="d-inline-block banner-button-wrapper-individual">
						<div class="banner-button even position-relative">
							<div class="banner-button-diamond" data-href="{{url('debt-relief-loan')}}">
								<img src="{{url('img/icn-2.png')}}"/>
							</div>
							<a class="banner-button-rect" href="{{url('debt-relief-loan')}}" style="background: #D1AB59;">債務舒緩&nbsp;&nbsp;&nbsp;&nbsp;</a>
						</div>
					</div>
				</div>
				<div>
					<div class="d-inline-block banner-button-wrapper-individual">
						<div class="banner-button odd position-relative">
							<div class="banner-button-diamond" data-href="{{url('mortgage-loan')}}">
								<img src="{{url('img/icn-3.png')}}"/>
							</div>
							<a class="banner-button-rect" href="{{url('mortgage-loan')}}" style="background: #4A987C;">&nbsp;&nbsp;&nbsp;&nbsp;貸款產品</a>
						</div>
					</div>
					<div class="d-inline-block banner-button-wrapper-individual">
						<div class="banner-button even position-relative">
							<div class="banner-button-diamond" data-href="{{url('property-refinancing')}}">
								<img src="{{url('img/icn-5.png')}}"/>
							</div>
							<a class="banner-button-rect" href="{{url('property-refinancing')}}" style="background: #4A6A9C;">加按套現&nbsp;&nbsp;&nbsp;&nbsp;</a>
						</div>
					</div>
				</div>
				<div>
					<div class="d-inline-block banner-button-wrapper-individual">
						<div class="banner-button odd position-relative">
							<div class="banner-button-diamond" data-href="{{url('bankruptcy-consultation')}}">
								<img src="{{url('img/icn-4.png')}}"/>
							</div>
							<a class="banner-button-rect" href="{{url('bankruptcy-consultation')}}" style="background: #D18059;">&nbsp;&nbsp;&nbsp;&nbsp;破產諮詢</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div id="banner" class="desktop row position-relative d-none d-md-block">
		<ul class="cb-slideshow">
			<li>
				<span style="background-image: url({{url('img/bg-2-min.png')}})" data-string="香港最全面銀行理財網絡">Image 02</span>
			</li>
			<li>
				<span style="background-image: url({{url('/img/42521347552_07ffb97315_k-min.jpg')}})" data-string="遠離破產危機">Image 01</span>
			</li>
		</ul>
        <div class="left-bg"></div>
        <div class="container">
            <div class="row">
                <div class="left-bg-ref left-div col-12 col-md-4 col-lg-4">
                    <div class="banner-buttons-wrapper">
                        <div class="banner-button odd position-relative">
                            <div class="banner-button-diamond" data-href="{{url('tu-debt-restructuring')}}">
								<img src="{{url('img/icn-1.png')}}"/>
							</div>
                            <a class="banner-button-rect" href="{{url('tu-debt-restructuring')}}" style="background: #1C6678;">&nbsp;&nbsp;&nbsp;&nbsp;TU重組方案</a>
                        </div>
                        <div class="banner-button even position-relative">
                            <div class="banner-button-diamond" data-href="{{url('debt-relief-loan')}}">
								<img src="{{url('img/icn-2.png')}}"/>
							</div>
                            <a class="banner-button-rect" href="{{url('debt-relief-loan')}}" style="background: #D1AB59;">債務舒緩&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </div>
                        <div class="banner-button odd position-relative">
                            <div class="banner-button-diamond" data-href="{{url('mortgage-loan')}}">
								<img src="{{url('img/icn-3.png')}}"/>
							</div>
                            <a class="banner-button-rect" href="{{url('mortgage-loan')}}" style="background: #4A987C;">&nbsp;&nbsp;&nbsp;&nbsp;貸款產品</a>
                        </div>
                        <div class="banner-button even position-relative">
                            <div class="banner-button-diamond" data-href="{{url('property-refinancing')}}">
								<img src="{{url('img/icn-5.png')}}"/>
							</div>
                            <a class="banner-button-rect" href="{{url('property-refinancing')}}" style="background: #4A6A9C;">加按套現&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </div>
                        <div class="banner-button odd position-relative">
                            <div class="banner-button-diamond" data-href="{{url('bankruptcy-consultation')}}">
								<img src="{{url('img/icn-4.png')}}"/>
							</div>
                            <a class="banner-button-rect" href="{{url('bankruptcy-consultation')}}" style="background: #D18059;">&nbsp;&nbsp;&nbsp;&nbsp;破產諮詢</a>
                        </div>
                    </div>
                </div>
                <div class="tagline col-12 col-md-8 col-lg-8">
					<p class="tagline" style="line-height: inherit;">
						<span>香港最全面銀行理財網絡</span><br>
						<button class="btn text-white call-for-action mt-3" data-href="https://api.whatsapp.com/send?phone=85298765432&amp;text=%E6%88%91%E6%83%B3%E4%BA%86%E8%A7%A3%E6%9B%B4%E5%A4%9A">
						<i class="fa fa-whatsapp" aria-hidden="true" style="font-size: 18px;"></i> WhatsApp聯絡</button>
						<button class="btn text-white call-for-action secondary mt-3" data-href="{{url('/contact-us')}}">
						<i class="fa fa-mobile" aria-hidden="true" style="font-size: 20px;"></i> 其他聯絡方式</button>
					</p>
                </div>

				<style>
				</style>
            </div>
        </div>
    </div>

	<section class="py-5" style="background: #fafafa;">
		<div class="container">
			<div class="my-5">
				<div class="text-center">
					<div>
						<h2>全方位線上線下服務</h2>
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
						<div class="col-12 col-md-4 text-center mb-5">
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
							    color: #3d405c;">電話查詢</div>
							<div>最直接的方式，同時我們的顧問可作出專業解答及方案</div>
							<a href="tel://98765432">
								<button class="contact-now-buttons btn btn-primary btn-block mt-3" style="background-color: #D5382D;">立即致電</button>
							</a>
						</div>
						<div class="col-12 col-md-4 text-center mb-5">
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
							    color: #3d405c;">WHATSAPP查詢</div>
							<div>無論何時何地，只要一機在手，都可以隨時作出查詢，隱密度更高。</div>
							<a href="https://api.whatsapp.com/send?phone=85298765432&text=%E6%88%91%E6%83%B3%E4%BA%86%E8%A7%A3%E6%9B%B4%E5%A4%9A">
								<button class="contact-now-buttons btn btn-primary btn-block mt-3" style="background-color: green;">立即WHATSAPP</button>
							</a>
						</div>
						<div class="col-12 col-md-4 text-center mb-5">
							<div class="link-area-link-icon link-type-button icon-hover-animation-slide">
								<i class="fontawesome-icon circle-yes fa fa-whatsapp" aria-hidden="true" style="
								    border: 3px solid #03a9f4;
								    background-color: #f7f7f7;
								    box-sizing: content-box;
								    height: 100px;
								    width: 100px;
								    line-height: 100px;
								    border-radius: 50%;
								    color: #03a9f4;
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
							    color: #3d405c;">電郵查詢</div>
							<div>相對比較簡接，但同時可將所需文件發出，節省更多時間</div>
							<a href="mailto:contact@example.com"><button class="contact-now-buttons btn btn-primary btn-block mt-3" style="background-color: #028ecf;">立即EMAIL</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
			{{--<div class="fusion-text">
				<h2 style="text-align: center;" data-fontsize="34" data-lineheight="50">全方位線上線下服務</h2>
			</div>
			<div class="separator" style="border-color:#ef9a3d;border-top-width:1px;margin-left: auto;margin-right: auto;margin-top:15px;margin-bottom:35px;width:100%;max-width:170px;"></div>
			<div class="row" data-animationoffset="100%" style="margin-top:0px;margin-bottom:60px;">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="heading heading-with-icon icon-left">
						<a class="heading-link" href="tel://+85251666526" target="_self">
							<div class="icon"><i style="border-color:#f44336;border-width:3px;background-color:#f7f7f7;box-sizing:content-box;height:100px;width:100px;line-height:100px;border-radius:50%;color:#f44336;font-size:50px;" class="fontawesome-icon fa-mobile-alt fas circle-yes"></i></div>
							<h2 class="content-box-heading" style="font-size:26px;line-height:31px;" data-inline-fontsize="26px" data-inline-lineheight="31px" data-fontsize="26" data-lineheight="31">電話查詢</h2>
						</a>
					</div>
					<div class="content-container" style="color:#7e8890;">
						<p style="text-align: center;">最直接的方式, 同時我們的顧問可作出專業解答及方案</p>
					</div>
					<a class="read-more-button" href="tel://+85251666526" target="_self">
						<span class="button-text">立即致電</span>
					</a>
				</div>

				<div class="fusion-column content-box-column content-box-column content-box-column-2 col-lg-4 col-md-4 col-sm-4 fusion-content-box-hover "><div class="col content-box-wrapper content-wrapper-background link-area-link-icon link-type-button icon-hover-animation-slide" style="background-color:#faf9f8;" data-animationoffset="100%"><div class="heading heading-with-icon icon-left"><a class="heading-link" href="http://dsc.com.hk/%e8%81%af%e7%b5%a1%e6%88%91%e5%80%91/" target="_self"><div class="icon"><i style="border-color:#8bc34a;border-width:3px;background-color:#f7f7f7;box-sizing:content-box;height:100px;width:100px;line-height:100px;border-radius:50%;color:#8bc34a;font-size:50px;" class="fontawesome-icon fa-whatsapp fab circle-yes"></i></div><h2 class="content-box-heading" style="font-size:26px;line-height:31px;" data-inline-fontsize="26px" data-inline-lineheight="31px" data-fontsize="26" data-lineheight="31">WHATSAPP、微信查詢</h2></a></div><div class="fusion-clearfix"></div><div class="content-container" style="color:#7e8890;">
					<p style="text-align: center;">無論何時何地, 只要一機在手, 都可以隨時作出查緝. 讓隱密度更高</p>
				</div><div class="fusion-clearfix"></div><a class="fusion-read-more-button fusion-content-box-button fusion-button button-default button-large button- button-flat" href="http://dsc.com.hk/%e8%81%af%e7%b5%a1%e6%88%91%e5%80%91/" target="_self"><span class="fusion-button-text">了解更多</span></a><div class="fusion-clearfix"></div></div></div><div class="fusion-column content-box-column content-box-column content-box-column-3 col-lg-4 col-md-4 col-sm-4 fusion-content-box-hover content-box-column-last content-box-column-last-in-row"><div class="col content-box-wrapper content-wrapper-background link-area-link-icon link-type-button icon-hover-animation-slide" style="background-color:#faf9f8;" data-animationoffset="100%"><div class="heading heading-with-icon icon-left"><a class="heading-link" href="http://dsc.com.hk/%e8%81%af%e7%b5%a1%e6%88%91%e5%80%91/" target="_self"><div class="icon"><i style="border-color:#03a9f4;border-width:3px;background-color:#f7f7f7;box-sizing:content-box;height:100px;width:100px;line-height:100px;border-radius:50%;color:#03a9f4;font-size:50px;" class="fontawesome-icon fa-envelope-open far circle-yes"></i></div><h2 class="content-box-heading" style="font-size:26px;line-height:31px;" data-inline-fontsize="26px" data-inline-lineheight="31px" data-fontsize="26" data-lineheight="31">電郵查詢</h2></a></div><div class="fusion-clearfix"></div><div class="content-container" style="color:#7e8890;">
					<p style="text-align: center;">相對比較簡接, 但同時可將所需文件發出, 節省更多時間</p>
				</div><div class="fusion-clearfix"></div><a class="fusion-read-more-button fusion-content-box-button fusion-button button-default button-large button- button-flat" href="http://dsc.com.hk/%e8%81%af%e7%b5%a1%e6%88%91%e5%80%91/" target="_self"><span class="fusion-button-text">了解更多</span></a><div class="fusion-clearfix"></div></div></div><style type="text/css">
				.fusion-content-boxes-1 .fusion-content-box-hover .heading-link:hover .icon i.circle-yes,
				.fusion-content-boxes-1 .fusion-content-box-hover .link-area-box:hover .heading-link .icon i.circle-yes,
				.fusion-content-boxes-1 .fusion-content-box-hover .link-area-link-icon-hover .heading .icon i.circle-yes,
				.fusion-content-boxes-1 .fusion-content-box-hover .link-area-box-hover .heading .icon i.circle-yes {
					background-color: #464d5f !important;
					border-color: #464d5f !important;
					}</style><div class="fusion-clearfix"></div></div><div class="fusion-clearfix"></div>

				</div>
	</section> --}}
	<div class="d-block d-md-none position-fixed w-100" style="bottom: 0;box-shadow: 0 2px 4px 4px rgba(0,0,0,0.2);z-index: 3000;">
		<div class="call-for-action-bar" data-href="https://api.whatsapp.com/send?phone=85298765432&amp;text=%E6%88%91%E6%83%B3%E4%BA%86%E8%A7%A3%E6%9B%B4%E5%A4%9A" style="
		    color: white;
		    background: #4DC55A;
		    text-align: center;
		    height: 40px;
		    font-size: 16px;
		    line-height: 40px;">
			<i class="fa fa-whatsapp" aria-hidden="true" style="font-size: 18px;"></i>
			<span class="fusion-button-text">&nbsp;Whatsapp立即聯絡</span>
		</div>
		<div class="call-for-action-bar" data-href="{{url('/contact-us')}}" style="
		    color: white;
		    background: #555;
		    text-align: center;
		    height: 40px;
		    font-size: 16px;
		    line-height: 40px;">
			<i class="fa fa-mobile" aria-hidden="true" style="font-size: 20px;"></i>
			<span class="fusion-button-text">&nbsp;其他聯絡方式</span>
		</div>
	</div>

	{{-- <section>
		<div id="contact-us" class="contact container-fluid" data-parallax="scroll" data-image-src="img/home/contact-bg.jpg">
			<div class="row h-100" style="background-color: rgb(15, 76, 133, 0.9);">
				<div class="overlay" style="width: 35%">
				</div>
				<div class="" style="width: 65%">
				</div>
				<div class="position-absolute w-100">
					<div class="d-lg-none" style="background-color: rgba(0, 48, 91, 0.5); height: 132px; position: absolute; width: 100%;">
					</div>
					<div class="container">
						<div class="row mobile-disable-padding" style="padding-top: 120px;">
							<div class="col-md-12 col-lg-5 mobile-tint" style="overflow: hidden;">
								<h2 class="font_2 text-white fadethis" style="width: 307px;">
									@lang('home.contact-koinplus')
								</h2>
							</div>
							<div class="col-md-12 col-lg-7">
								<div class="text-white">
									<h6 class="font_6 text-white fadethis" style="line-height:2em;"><b>@lang('home.service-hour')</b></h6>
									<p class="font_8 text-white fadethis" style="line-height:2em;">@lang('home.service-hour-content')</p>
									<br>

									<h6 class="font_6 text-white fadethis" style="line-height:2em;"><b>@lang('home.contact')</b></h6>
									<p class="font_8 text-white fadethis" style="line-height:2em;">@lang('home.email'):&nbsp;
										<a class="inline-link-with-underline" href="mailto:contact@koinplus.co" target="_self" data-content="contact@koinplus.co" data-type="mail">contact@koinplus.co</a>
									</p>
									<p class="font_8 text-white fadethis" style="line-height:2em;">Facebook @lang('home.page'):&nbsp;
										<a class="inline-link-with-underline" href="https://www.facebook.com/koinplus.hk" target="_blank" data-content="https://www.facebook.com/koinplus.hk" data-type="external" rel="nofollow">https://www.facebook.com/koinplus.hk</a>
									</p>
									<p class="font_8 text-white fadethis" style="line-height:2em;">Facebook Messenger:&nbsp;
										<a class="inline-link-with-underline" href="https://m.me/koinplus.hk" target="_blank" data-content="https://m.me/koinplus.hk" data-type="external" rel="nofollow">https://m.me/koinplus.hk</a>
									</p>
									<br>

									<p class="font_8 text-white fadethis" style="line-height:2em;">@lang('home.contact-form-instruction')</p>
									<br>

									<form id="contact-form" method="post" action="{{url('/contact-form')}}">
										{{ csrf_field() }}
										<div class="row no-gutters mb-2">
											<div class="col-md-12 col-lg-6 pr-1 mobile-disable-padding">
												<div style="margin-bottom: 8px;">
													<input id="contact-form-name" type="text" class="form-control" placeholder="@lang('home.contact-form-name')" name="name">
												</div>
												<div style="margin-bottom: 8px;">
													<input id="contact-form-email" type="text" class="form-control" placeholder="@lang('home.contact-form-email')" name="email">
												</div>
												<div style="margin-bottom: 8px;">
													<input id="contact-form-subject" type="text" class="form-control" placeholder="@lang('home.contact-form-subject')" name="subject">
												</div>
											</div>
											<div class="col-md-12 col-lg-6 pl-1 mobile-disable-padding">
												<textarea id="contact-form-message" class="form-control" style="height: 130px;" placeholder="@lang('home.contact-form-message')" name="message"></textarea>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" id="contact-form-submit" class="btn">@lang('home.submit')</button>
											<div class="mt-2" id="form-messages"></div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<div class="back-to-top-wrapper text-center py-3">
		<div class="mb-2">
			<a class="back-to-top">
				<img src="{{asset('img/arrow.png')}}" style="width: 32px; height: 21px; object-fit: contain; transform: rotate(180deg);">
			</a>
		</div>
		<div>
			<a class="back-to-top">
				<span class="text-white font_8">回到頂端</span>
			</a>
		</div>
	</div>
@stop


@section('css')
    <style>
		.link-area-link-icon {
			cursor: pointer;
		}
		.link-area-link-icon-hover i.circle-yes {
			/* background-color: #464d5f !important; */
			/* border-color: #464d5f !important; */
			background-color: #3d405c !important;
			border-color: #3d405c !important;
		}
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
							setTimeout(function() {
								$(".desktop .banner-button:nth(4), .mobile .banner-button:nth(4)").addClass('appear');
							}, 200);
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

		$(".call-for-action, .call-for-action-bar, .banner-button-diamond").click(function() {
			var link = $(this).attr("data-href");
			if(link) {
				window.open(link);
			}
		});

		$(".icon-hover-animation-slide").hover(
			function() {
				$(this).addClass('link-area-link-icon-hover');
			},
			function() {
				$(this).removeClass('link-area-link-icon-hover');
			}
		)
		$(".contact-now-buttons").hover(
			function() {
				$(this).parent().find(".icon-hover-animation-slide").addClass('link-area-link-icon-hover');
			},
			function() {
				$(this).parent().find(".icon-hover-animation-slide").removeClass('link-area-link-icon-hover');
			}
		)

		// back to top
		$(".back-to-top").on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({scrollTop:0}, '500');
		});
	});
	</script>
@stop
