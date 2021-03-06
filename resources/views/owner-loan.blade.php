@extends('layouts.master')

@section('title', __('中小企業主貸款'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
	@include('partials.header-banner', ["image"=>"banner-3-darken.jpg", "title"=>"中小企業主貸款"])
    <section class="py-5" style="background: #fafafa;">
    	<div class="container">
            <div class="mb-5">
                <div class="row">
                    <div class="d-none d-md-block col-md-3 col-lg-4">
						<ul id="vertical-sidebar">
							<li class="{{ Request::path() == 'mortgage-loan' ? 'active' : '' }}"><a href="mortgage-loan">物業按揭貸款</a></li>
							<li class="{{ Request::path() == 'personal-loan' ? 'active' : '' }}"><a href="personal-loan">私人貸款</a></li>
							<li class="{{ Request::path() == 'owner-loan' ? 'active' : '' }}"><a href="owner-loan">中小企業主貸款</a></li>
						</ul>
                    </div>
                    <div class="d-block col-md-9 col-lg-8" style="font-size: 1rem;">
                        <div>
                            <h2 style="text-align: left;" data-fontsize="34" data-lineheight="50">中小企業主貸款</h2>
                        </div>
                        <div class="separator" style="
                            margin-top: 15px;
                            margin-bottom: 35px;
                            width: 100%;
                            max-width: 170px;
                            min-height: 2px;
                            background: #dddddd;"></div>
                        <div class="mb-4">
							<div class="row">
								<div class="col-7">
									<p>本公司為任何中小企業主提供各種不同貸款產品包括有抵押或無抵押之循環貸款、分期貸款、透支額、有期貸款、項目融資、貿易融資等安排靈活之財務貨款，協助貴公司拓展業務。</p>
									<p>不論私人住宅、唐樓、村屋、寫字樓、工業大廈、商鋪或車位等等，只要物業在手便能輕鬆套現。</p>
								</div>
								<div class="col-5">
									<img src="{{asset('img/owner-loan-pic.jpg')}}" style="width: 100%">
								</div>
							</div>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>
    </section>

	<div class="section-separator bigtriangle" style="padding:0;margin-left:-30px;margin-right:-30px;background: #f5f5f5;">
		<svg class="fusion-big-triangle-candy" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill:#fafafa;padding:0;"><path d="M-1 -1 L50 99 L101 -1 Z"></path></svg>
	</div>

	<section class="py-5" style="background: #f5f5f5;">
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
	ul#vertical-sidebar {
		list-style-type: none;
		margin: 0;
		padding: 0;
		width: 80%;
	}
	ul#vertical-sidebar > li {
		border-bottom: 1px solid #E8E8E8;
		padding: 8px 16px;
		margin: 0!important;
		width: 100%;
		transition: padding-left .3s ease;
	}
	ul#vertical-sidebar > li:hover,
	ul#vertical-sidebar > li.active {
		padding-left: 20px;
	    border-left: 2px solid #028ecf;
	}

	@include('partials.contact-animation-css')
    </style>
@stop

@section('js')
	<script>
	@include('partials.contact-animation-js')
	</script>
@stop
