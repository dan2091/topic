@extends('layouts.empty', ['paceTop' => true])

@section('title', 'Login')

@section('content')
	<!-- begin login -->
	<div class="login bg-black animated fadeInDown">
		<!-- begin brand -->
		<div class="login-header">
			<div class="brand">
				<span class="logo"></span> <b>G.S.I.</b> Web
				<small>Gesti&oacute;n de Siniestro Insitu</small>
			</div>
			<div class="icon">
				<i class="fa fa-lock"></i>
			</div>
		</div>
		<!-- end brand -->
		<!-- begin login-content -->
		<div class="login-content">
			<form action="/" method="GET" class="margin-bottom-0">
				<div class="form-group m-b-20">
					<input type="text" class="form-control form-control-lg inverse-mode" placeholder="Email Address" required />
				</div>
				<div class="form-group m-b-20">
					<input type="password" class="form-control form-control-lg inverse-mode" placeholder="Password" required />
				</div>
				<div class="checkbox checkbox-css m-b-20">
					<input type="checkbox" id="remember_checkbox" /> 
					<label for="remember_checkbox">
						Recordarme
					</label>
				</div>
				<div class="login-buttons">
					<button type="submit" class="btn btn-success btn-block btn-lg">Entrar</button>
				</div>
			</form>
		</div>
		<!-- end login-content -->
	</div>
	<!-- end login -->
@endsection