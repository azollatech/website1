@extends('layouts.master')

@section('title', __('Contact Us'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
    <div class="header-banner" style="
        height: 280px;
        background: url({{url('/')}}/img/b69cee97500aa5a5-min.jpg);
        background-position: center center;
        background-size: cover;">
        <h2 style="
            font-size: 2.8rem;
            color: #ffffff;
            font-weight: 700;
            text-align: center;
            letter-spacing: 2px;
            padding-top: 120px;
        ">聯絡我們</2>
    </div>
    <section class="py-5" style="background: #fafafa;">
    	<div class="container">
            <div class="row">
                <div class="col-lg-5 mb-5">
                    <div class="fusion-text">
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
	<div class="container">
	</div>
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
