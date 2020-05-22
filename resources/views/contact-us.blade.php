@extends('layouts.master')

@section('title', __('Contact Us'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
	@include('partials.header-banner', ["image"=>"b69cee97500aa5a5-min.jpg", "title"=>"聯絡我們"])
    <section class="py-5" style="background: #fafafa;">
    	<div class="container">
            <div class="row">
                <div class="col-lg-5 mb-5">
                    <div>
                        <h2 style="text-align: left;" data-fontsize="34" data-lineheight="50">聯絡資料</h2>
                    </div>
                    <div class="separator" style="
                        margin-top: 15px;
                        margin-bottom: 35px;
                        width: 100%;
                        max-width: 170px;
                        min-height: 2px;
                        background: #dddddd;"></div>
                    <dl class="row">
                        <dt class="col-sm-3">地址: </dt>
                        <dd class="col-sm-9">17/F A MW Tower 2, 5 Kimberly Road, Tsim Sha Tsui, Kowloon, Hong Kong</dd>

                        <dt class="col-sm-3">電話: </dt>
                        <dd class="col-sm-9"><a href="tel://+85298765432">9876 5432</a></dd>

                        <dt class="col-sm-3">WhatsApp: </dt>
                        <dd class="col-sm-9"><a href="https://api.whatsapp.com/send?phone=85298765432&amp;text=%E6%88%91%E6%83%B3%E4%BA%86%E8%A7%A3%E6%9B%B4%E5%A4%9A">9876 5432</a></dd>

                        <dt class="col-sm-3">電郵: </dt>
                        <dd class="col-sm-9"><a href="mailto:info@dsc.com.hk">info@company.com</a></dd>
                    </dl>
        		</div>
                <div class="col-lg-7 mb-5">
                    <div class="fusion-text">
                        <h2 style="text-align: left;" data-fontsize="34" data-lineheight="50">電郵查詢</h2>
                    </div>
                    <div class="separator" style="
                        margin-top: 15px;
                        margin-bottom: 35px;
                        width: 100%;
                        max-width: 170px;
                        min-height: 2px;
                        background: #dddddd;"></div>
                    <form>
                        <div class="form-group">
                            <label>名稱 (需填)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>電郵 (需填)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>主題</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>內容</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">送出</button>
                    </form>
                </div>
            </div>
    	</div>
    </section>
	<section class="py-5" style="background: #fafafa;">
		<div class="container">
			<div class="mb-5">
				<div class="text-center">
					<div class="fusion-text">
						<h2 data-fontsize="34" data-lineheight="50">智能手機更方便</h2>
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
							    color: #3d405c;">一鍵電話致電</div>
							<a href="https://api.whatsapp.com/send?phone=85298765432&text=%E6%88%91%E6%83%B3%E4%BA%86%E8%A7%A3%E6%9B%B4%E5%A4%9A">
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
							<a href="tel://98765432">
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
	$( document ).ready(function() {
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
	});
	</script>
@stop
