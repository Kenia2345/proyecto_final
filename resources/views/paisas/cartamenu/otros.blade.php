@extends('paisas.layout-productos')
@section('title', 'Otros')
@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('paisas/css/styleotros.css') }}" />
@endpush
@section('carta')
<h1 align="center"><img src="{{ asset('cartamenu/otros.png') }}"></h1>
@endsection
@section('items')
	@php
	$i = 1;
	@endphp
	@foreach($productos as $producto)
	<li>
		<div class="ch-item">
			<div class="ch-info">
				<div class="ch-info-front ch-img-{{ $i }}"></div>
				<div class="ch-info-back">
					<h3>{{ $producto->categoria }}</h3>
					<p>{{ $producto->nombre }}<br><br> ${{ number_format($producto->precio, 2) }}</p>
				</div>	
			</div>
		</div>
	</li>
	@php
	$i++;
	@endphp
	@endforeach
@endsection