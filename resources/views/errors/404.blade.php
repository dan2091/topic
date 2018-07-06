@extends('layouts.empty', ['paceTop' => true])

@section('title', '404 Error Page')

@section('content')
	<!-- begin error -->
	<div class="error">
		<div class="error-code m-b-10">404</div>
		<div class="error-content">
			<div class="error-message">No se pudo encontrar...</div>
			<div class="error-desc m-b-30">
				La p&aacute;gina que est&aacute;s buscando no existe. <br />
			</div>
			<div>
				<!--<a href="index.html" class="btn btn-success p-l-20 p-r-20">Go Home</a>-->
			</div>
		</div>
	</div>
	<!-- end error -->
@endsection
        
