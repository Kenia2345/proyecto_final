<!-- MENU FULL SCREEN -->
<div class="full-menu">
	<div class="wrap">
		<nav class="navegacion" align="center">
			<ul class="menu-principal">
				<li><a href="/">Inicio</a></li>
				@if(auth()->check())
				<li>
					<form action="/logout" method="post">
						{{ csrf_field() }}
						<a onclick="javascript:$('form').submit();" href="#">Cerrar Sesion</a>
					</form>
				</li>
				@else
				<li><a href="/login">Acceso</a></li>
				@endif
				<li><a href="/menu">Carta Menú</a></li>
				<li><a href="/momentos">Momentos</a></li>
				<li><a href="/nosotros">Nosotros</a></li>
				<li><a href="/contacto">Contactanos</a></li>
			</ul>
			<div class="social-items" align="center">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-instagram"></a>
			</div>
		</nav>
	</div>
</div>