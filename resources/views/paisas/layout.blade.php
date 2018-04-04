<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     	<title>Los Paisas</title>
     	<!--full menu -->
     	<link rel="stylesheet" type="text/css" href="{{ asset('paisas/css/estilomenu.css') }}">
     	<link rel="stylesheet" href="{{ asset('paisas/css/font-awesome.min.css') }}">
     	<script src="{{ asset('paisas/js/jquery-3.2.1.js') }}"></script>
	 	<script src="{{ asset('paisas/js/main.js') }}"></script><!-- end full menu -->

	 	<!--Slider Full -->
	 	<link rel="shortcut icon" href="../favicon.ico"> 
     	<link rel="stylesheet" type="text/css" href="{{ asset('paisas/css/demoslide.css') }}" />
     	<link rel="stylesheet" type="text/css" href="{{ asset('paisas/css/style3.css') }}" />
	 	<script type="text/javascript" src="{{ asset('paisas/js/modernizr.custom.86080.js') }}"></script> <!-- end Slider Full -->
	 	@stack('styles')
	</head>
	<body>
		<div class="main">
	    	@yield('content')
		</div>
		@include('paisas.partials.menu-full-screen')
		@stack('scripts')
	</body>
</html>