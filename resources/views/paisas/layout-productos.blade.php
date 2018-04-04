<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     	<title>@yield('title')</title>
     	<link rel="stylesheet" href="{{ asset('paisas/css/font-awesome.min.css') }}">
     	<script src="{{ asset('paisas/js/jquery-3.2.1.js') }}"></script>
	 	<script src="{{ asset('paisas/js/main.js') }}"></script>
		<!-- Circle Effect -->
		<link rel="stylesheet" type="text/css" href="{{ asset('paisas/css/democircle.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('paisas/css/common.css') }}" />
		@stack('styles')
	</head>
	<body>
		<div class="main">
	    	@include('paisas.partials.header')
	    	<br>
	    	<br>
	    	<br>
	    	<br>
	    	<br>
	    	<br>
	    	<br>
	    	@yield('carta')
			<section class="main">
				<ul class="ch-grid">
	    			@yield('items')
				</ul>
			</section>
			@include('paisas.partials.menu-full-screen')
		</div>
	</body>
</html>