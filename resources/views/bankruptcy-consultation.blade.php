@extends('layouts.master')

@section('title', __('Contact Us'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
    <div class="header-banner" style="
        height: 280px;
        background: url({{url('/')}}/img/banner-2-darken.jpg);
        background-position: center center;
        background-size: cover;">
        <h2 style="
            font-size: 2.8rem;
            color: #ffffff;
            font-weight: 700;
            text-align: center;
            letter-spacing: 2px;
            padding-top: 120px;
        ">破產諮詢</2>
    </div>
    <section class="py-5" style="background: #fafafa;">
    	<div class="container">
            <div class="mb-5">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-8" style="font-size: 1rem;">
                        <div>
                            <h2 style="text-align: left;" data-fontsize="34" data-lineheight="50">破產諮詢</h2>
                        </div>
                        <div class="separator" style="
                            margin-top: 15px;
                            margin-bottom: 35px;
                            width: 100%;
                            max-width: 170px;
                            min-height: 2px;
                            background: #dddddd;"></div>
                        <div class="mb-4">
                            <p>當你無法法還債時，租金及帳單等亦都難以繳付。申請破產或許是你的最後選擇。我們經常強調未到最後，都不要利用破產來解決債務問題。因為伴隨的是對於自身生活上的各種限制，申請前應先咨詢法律或財務意見。</p>
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
