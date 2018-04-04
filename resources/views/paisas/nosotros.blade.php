<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <title>Los Paisas</title>
     <!--full menu -->
     
     <link rel="stylesheet" href="{{ asset('paisas/css/font-awesome.min.css') }}">
     <script src="{{ asset('paisas/js/jquery-3.2.1.js') }}"></script>
	 	<script src="{{ asset('paisas/js/main.js') }}"></script><!-- end full menu -->
	 <link rel="stylesheet" type="text/css" href="{{ asset('paisas/css/nosotros.css') }}">
</head>
<body>
	<div class="main">
	     <header>
	     	<div class="wrap">
	     		<img src="{{ asset('paisas/nosotros/logo_1.png') }}">
	     		<div class="btn-menu" id="btn-menu">
	     		     <span class="fa fa-bars"></span>
	     		</div>
	     	</div>
	     </header><br><br><br><br>
	     <section class="seccion1">
			<div class="contenedor">
				<section class="videos">
					<h2 align="center" style="color: #fff">MISI&Oacute;N</h2>

					<section class="videos" style="font-size: 20px">
						<p class="descripcion">Ser uno de los mejores restaurantes l&iacute;deres en la venta de comida para el p&uacute;blico 
						en general, ofreciendo alimentos de alta calidad y a un precio justo apeg&aacute;ndose a los 
						m&aacute;s estrictos est&aacute;ndares de higiene, de igual forma procurar un servicio r&aacute;pido y eficiente en la atenci&oacute;n  
						que nos permita ser un lugar preferencial creado por la excelente atmosfera de 
						nuestras instalaciones.</p>
					</section>
				</section>

				<section class="videos">
				    <h2 align="center" style="color: #fff">VISI&Oacute;N</h2>



				    <section class="videos" style="font-size: 20px">
				    	<p class="descripcion">Consolidarnos como uno de los m&aacute;s reconocidos restaurantes en la ciudad, logr&aacute;ndolo a trav&eacute;s de un trabajo en equipo que involucra a personal y gerente en un ambiente favorable con una planificaci&oacute;n y organizaci&oacute;n adecuada, que responda a cualquier reto del consumidor y de la competencia.</p>
				    </section>
				</section>

				<section class="videos">
				    <h2 align="center" style="color: #fff">VALORES</h2>

				 

				    <section class="videos" style="font-size: 20px">
					    <p class="descripcion">-Honestidad: ser transparentes con nuestros clientes y empleados o colavoradores</p>

					    <p class="descripcion">-Pasi&oacute;n: Crear nuestros productos con la b&uacute;squeda de la satisfacci&oacute;n tanto propia como de nuestros clientes. Hacer las cosas con la idea y el sentimiento de lograr el bien cumplido.</p>

					    <p class="descripcion">-Empat&iacute;a: pensar y adecuar nuestra actitud buscando la satisfacci&oacute;n del cliente como propia.</p>

					    <p class="descripcion">-Dedicaci&oacute;n: Lograr una empresa de alto nivel productivo, innovadora y competitiva dedicada a satisfacci&oacute;n plena de nuestros clientes.</p>

					    <p class="descripcion">-Calidad: Nos aseguramos que lo que hacemos lo hacemos bien.</p>
				    </section>     
			    </section>
		 </section>
		 <br><br>
		 @include('paisas.partials.menu-full-screen')

	</div>
</body>
</html>