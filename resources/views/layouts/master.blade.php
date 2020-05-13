<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} | @yield('title')</title>
		<noscript><meta http-equiv="refresh" content="0; URL=/no-js"></noscript>

		<!-- Favicon -->
		{{-- <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff"> --}}

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		{{-- Datatables for bootstrap 4 --}}
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.css"/>

		{{-- Custom search bar styling--}}
		{{-- <link rel="stylesheet" href="{{ asset('css/search-bar.css?v=1.0.7') }}" /> --}}

		{{-- Font awesome --}}
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> --}}

		{{-- Fancybox --}}
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

		{{-- Rage Slider --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>

		{{-- Date Picker --}}
		{{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" /> --}}

		{{-- Date Picker --}}
		{{-- <link rel="stylesheet" href="{{ asset('pickadate/themes/default.css?v=1.0.0') }}" /> --}}
		{{-- <link rel="stylesheet" href="{{ asset('pickadate/themes/default.date.css?v=1.0.0') }}" /> --}}

		{{-- Flag Icon --}}
		{{-- <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}" /> --}}

		{{-- Bootstrap Toggle --}}
		<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

        <!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/footer.css?v=1.0.1') }}">
		<link rel="stylesheet" href="{{ asset('css/custom.css?v=1.0.1') }}">


		@yield('css')
	</head>
	<body class="position-relative">
		<div class="wrapper-without-footer">
	        @section('navbar')
	        @show

			@yield('content')
			<div class="push"></div>
		</div>

        @include('partials.footer')

		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		{{-- Datatables for bootstrap 4 --}}
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script>

		{{-- Fancybox --}}
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

		{{-- Range Slider --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

		{{-- Date Picker --}}
		{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> --}}
		{{-- <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script> --}}

		{{-- Date Picker --}}
		{{-- <script type="text/javascript" src="{{ asset('pickadate/picker.js') }}"></script> --}}
		{{-- <script type="text/javascript" src="{{ asset('pickadate/picker.date.js') }}"></script> --}}

		{{-- Input Mask --}}
		{{-- <script src="{{ asset('js/jquery.inputmask.min.js') }}"></script> --}}

		{{-- Bootstrap Toggle --}}
		<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

		{{-- Custom JS --}}
		{{-- <script src="{{ asset('js/custom.js?v=1.0.0') }}"></script> --}}

		@yield('js')
	</body>
</html>
