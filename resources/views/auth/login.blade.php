@extends('paisas.layout')
@push('styles')
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
@endpush
@section('content')
@include('paisas.partials.header')
<div class="container w3-display-bottommiddle" style="top: 25%;">
    <div class="w3-container" style="width: 100%">
        <div class="w3-container" style="background-color: #e2e3e4b0; border-radius: 25px;padding-top: 50px;">
            <form class="w3-container" role="form" method="POST" action="{{ url('/login') }}">
                <div class="w3-container">
                    <h2> Iniciar Sesión</h2>
                </div>
                {{ csrf_field() }}
                <div class="w3-container {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="w3-input">
                        <input id="email" type="email" class="w3-input" name="email" value="{{ old('email') }}" placeholder="E-mail">
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="w3-container {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="w3-input">
                        <input id="password" type="password" class="w3-input" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <br>
                
                <div class="w3-container">
                    <div class="col-md-12">
                        <button type="submit" class="btn w3-btn w3-ripple w3-red">
                            <i class="fa fa-btn fa-sign-in"></i> Acceder
                        </button>

                        <br><br>

                        <a class="btn btn-link pull-right" href="{{ url('/password/reset') }}"><strong>¿Olvidaste tu Password?</strong></a>
                    </div>
                </div>

                <br>

                <div class="w3-container">
                    <div class="col-md-12">
                        <a class="btn btn-link" href="/register">
                            <strong>Crear una cuenta</strong></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
