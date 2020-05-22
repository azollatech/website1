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
