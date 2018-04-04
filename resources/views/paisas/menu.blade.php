@extends('paisas.layout')
@push('styles')
 	<link rel="stylesheet" type="text/css" href="{{ asset('paisas/css/style.css') }}" /> <!-- Estilo del menu en 3D -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
@endpush
@section('content')
<div class="container">
	<header>
		<div class="wrap">
			<div class="btn-menu" id="btn-menu">
				<span class="fa fa-bars"></span>
			</div>
		</div>
	</header>

	<section class="main">
		<div id="rm-container" class="rm-container">
			<div class="rm-wrapper">
				<div class="rm-cover">
					<div class="rm-front">
						<div class="rm-content">
							<div class="rm-logo"></div>
							<h2>Los Paisas</h2>
							<h3>El tradicional sabor mexicano</h3>
							<a href="#" class="rm-button-open">Ver Menú</a>
							<div class="rm-info"> <!-- direccion -->
								<p><br><br>
									<strong>"Porque lo barato no siempre cuesta caro"</strong><br>
									Lunes a S&aacute;bado<br>
									9:00 am a 10:00 pm<br>
									Calle 1 #715 entre Av. 7 y 9<br>
									Servicio a domicilio<br>
									<strong>T&eacute;lefono</strong> 717 85 88<br>
									<strong>WhatsApp</strong> 271 137 57 24</p>
								</div>
							</div><!-- /rm-content -->
						</div><!-- /rm-front -->
						<div class="rm-back">
							<div class="rm-content">
								<h4>Tortas</h4> <!-- 1er vista al abrir -->
								<dl>
									<a href="/menu/tortas"><img src="{{ asset('paisas/images/torta1.png') }}"></a>
								</dl>
								<h4>Enchiladas</h4>
								<dl>
									<a href="/menu/enchiladas"><img src="{{ asset('paisas/images/enchilada2.png') }}"></a>
								</dl>
								<h4>Tostadas</h4>
								<dl>
									<a href="/menu/tostadas"><img src="{{ asset('paisas/images/tostadav.png') }}"></a>
								</dl>
							</div><!-- /rm-content -->
							<div class="rm-overlay"></div>
						</div><!-- /rm-back -->
					</div><!-- /rm-cover -->
					<div class="rm-middle">
						<div class="rm-inner">
							<div class="rm-content">
								<h4>Platillos</h4>  <!-- 2a vista al abrir -->
								<dl>
									<a href="/menu/platillos"><img src="{{ asset('paisas/images/huevos.png') }}"></a>
								</dl>
								<h4></h4>
								<dl>
									<a href="#"><img src="{{ asset('paisas/images/promo.png') }}"></a>
								</dl>
								<h4>Otros</h4>
								<dl>
									<a href="/menu/otros"><img src="{{ asset('paisas/images/mollete.png') }}"></a>
								</dl>
							</div><!-- /rm-content -->
							<div class="rm-overlay"></div>
						</div><!-- /rm-inner -->
					</div><!-- /rm-middle -->
					<div class="rm-right">
						<div class="rm-front">

						</div>
						<div class="rm-back">
							<span class="rm-close">Close</span>
							<div class="rm-content">
								<h4>Bebidas</h4>  <!-- 3er vista al abrir -->
								<dl>
									<a href="/menu/bebidas"><img src="{{ asset('paisas/images/vaso2.png') }}"></a>
								</dl>
								<h4>Botanas</h4>
								<dl>
									<a href="/menu/botanas"><img src="{{ asset('paisas/images/nacho.png') }}"></a>
								</dl>
								<h4>Postres</h4>
								<dl>
									<a href="/menu/postres"><img src="{{ asset('paisas/images/cubo.png') }}"></a>
								</dl>
							</div><!-- /rm-content -->
						</div><!-- /rm-back -->
					</div><!-- /rm-right -->
				</div><!-- /rm-wrapper -->
			</div><!-- /rm-container -->
		</section>
</div>
@stop
@push('scripts')
	<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
	<script type="text/javascript" src="{{ asset('paisas/js/modernizr.custom.79639.js') }}"></script>
    <script type="text/javascript" src="{{ asset('paisas/js/menu.js') }}"></script>
	<script type="text/javascript">
		$(function() {
			Menu.init();
		});
	</script>
@endpush
