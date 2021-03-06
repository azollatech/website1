@extends('layouts.master')

@section('title', __('物業按揭貸款'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
	@include('partials.header-banner', ["image"=>"banner-3-darken.jpg", "title"=>"物業按揭貸款"])
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
                            <h2 style="text-align: left;" data-fontsize="34" data-lineheight="50">物業按揭貸款</h2>
                        </div>
                        <div class="separator" style="
                            margin-top: 15px;
                            margin-bottom: 35px;
                            width: 100%;
                            max-width: 170px;
                            min-height: 2px;
                            background: #dddddd;"></div>
                        <div class="mb-5">
                            <ul>
								<li class="mb-3">你需要清卡數、創業還是資金週轉嗎？</li>
								<li class="mb-3">只要你是私人住宅、居屋，甚至是公屋的業主，只需提供簡單文件，我們便可幫你申請成功高達物業估價8成的貸款！</li>
							</ul>
						</div>

						<div>
							<div class="mb-5">
								<p>
									<strong>「一按」是指物業新做的按揭，樓契需要用作抵押品給銀行或貸款機構。</span></strong>
								</p>
								<table>
									<tbody>
										<tr>
											<td style="vertical-align: top;">
												<img class="mortgage-pics" src="{{asset('img/mortgage-pic-1.jpg')}}" alt="本頁圖片/檔案 - 1" width="253" height="178" />
											</td>
											<td style="vertical-align: top; padding-left: 24px;">
												任何物業不限種類及樓齡最高可借8成或以上，免入息證明及繁複文件，即時電話批核，比銀行簡單快捷。歡迎自僱、退休人士或沒有入息證明的人仕申請。 如已擁有供滿按揭的物業，亦可透過我們的一按貸款計劃套現大額資金，以作資金周轉。相對銀行繁複的審批過程，我們的一按貸款計劃能為閣下提供彈性較大的貸款服務。
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="mb-5">
								<p>
									<strong>「二按」是指物業本身已在銀行或貸款機構做按揭並透過該物業再申請貸款。</span></strong>
								</p>
								<table>
									<tbody>
										<tr>
											<td style="vertical-align: top;">
												<img class="mortgage-pics" src="{{asset('img/mortgage-pic-2.jpg')}}" alt="本頁圖片/檔案 - 2" width="253" height="178" />
											</td>
											<td style="vertical-align: top; padding-left: 24px;">
												業主可利用已做按揭物業，申請二按貸款，最高借足8成或以上，免屋契，即日取款，周轉靈活。 我們的二按貸款計劃，可將已按的物業加按貸款，無需樓契抵押，透過簡單審查程序，利息至低。不限物業種類及樓齡，毋需入息證明。歡迎自僱、退休人士或沒有入息證明的人仕申請。
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="mb-5">
								<p>
									<strong>「轉按」是指物業已在銀行或貸款機構承做按揭，而業主將該物業的按揭轉至另一銀行或貸款機構。</span></strong>
								</p>
								<table>
									<tbody>
										<tr>
											<td style="vertical-align: top;">
												<img class="mortgage-pics" src="{{asset('img/mortgage-pic-3.jpg')}}" alt="本頁圖片/檔案 - 3" width="253" height="178" />
											</td>
											<td style="vertical-align: top; padding-left: 24px;">
												業主只需要提供原有按揭機構的貸款合約，保信幫客戶減少利息支出，大大減輕每月負擔。　倘若業主現時在同類型的按揭機構尚有按揭，有感現時利息支出沉重，便可考慮轉按來減輕利息支出，亦可藉著轉按套現繳付昂貴的咭數，增加資金備用。"
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="mb-5">
								<p>
									<strong>「同步二按」是指與銀行或其他財務機構同步進行貸款</span></strong>
								</p>
								<table>
									<tbody>
										<tr>
											<td style="vertical-align: top;">
												<img class="mortgage-pics" src="{{asset('img/mortgage-pic-4.jpg')}}" alt="本頁圖片/檔案 - 4" width="254" height="169" />
											</td>
											<td style="vertical-align: top; padding-left: 24px;">
												「同步二按」是指物業本身已在銀行或其他貸款機構做按揭，但因對該物業估價不足或借貸成數不足，業主可透過其他貸款機構作貸款以彌補估價不足之差額，該按揭會與一按的按揭同步進行。我們的同步二按可解決業主因突然的資金或估價不足之產生的按揭問題。
											</td>
										</tr>
									</tbody>
								</table>
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
	.mortgage-pics {
		width: 253px;
	}
	@media (max-width: 991px) {
		.mortgage-pics {
			width: 200px;
			height: auto;
		}
	}
	@media (max-width: 767px) {
		.mortgage-pics {
			width: 180px;
			height: auto;
		}
	}
	@media (max-width: 575px) {
		.mortgage-pics {
			width: 120px;
			height: auto;
		}
	}

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
