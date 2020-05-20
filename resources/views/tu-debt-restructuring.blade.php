@extends('layouts.master')

@section('title', __('Contact Us'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
    <div class="header-banner" style="
        height: 280px;
        background: url({{url('/')}}/img/banner-1-darken.jpg);
        background-position: center center;
        background-size: cover;">
        <h2 style="
            font-size: 2.8rem;
            color: #ffffff;
            font-weight: 700;
            text-align: center;
            letter-spacing: 2px;
            padding-top: 120px;
        ">TU重組方案</2>
    </div>
    <section class="py-5" style="background: #fafafa;">
    	<div class="container">
            <div class="mb-5">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-8" style="font-size: 1rem;">
                        <div>
                            <h2 style="text-align: left;" data-fontsize="34" data-lineheight="50">TU重組方案</h2>
                        </div>
                        <div class="separator" style="
                            margin-top: 15px;
                            margin-bottom: 35px;
                            width: 100%;
                            max-width: 170px;
                            min-height: 2px;
                            background: #dddddd;"></div>
                        <div class="mb-4">
                            <p><h5 style="color: #3d405c;">減低還款利息 提升TU信貸評級</h5></p>

                            <p>重組TU供款正正係可以幫你解決信貸紀錄差嘅問題，可以令到你信貸紀錄上升 H升上C不再是難度，解決曬你所有貴息嘅供款問題</p>
                        </div>

                        <div class="mb-4">
                            <h5 style="text-decoration: underline;">TU重組供款方案的好處</h5>
                            <ol>
                                <li>每月供款壓力下降 ----- 利息下降</li>
                                <li>避免破產污名</li>
                                <li>沒有破產條例般限制</li>
                                <li>毋須通知僱主及家人</li>
                                <li>過程所需時間較破產程序短</li>
                            </ol>
                        </div>

                        <div class="mb-4">
                            <h5 style="text-decoration: underline;">申請過程簡單&nbsp;&nbsp;&nbsp;&nbsp;不用律師、會計師見證</h5>
                            <p>只需簡單提供入息證明、銀行自動轉帳紀錄等相關文件，我們通過合作財務公司為你一次性還清所有債務。往後的還款期和利息更有優惠提供予客戶。</p>
                        </div>
                    </div>
                    <div class="col-2">
                    </div>
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
