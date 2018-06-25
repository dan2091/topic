@extends('layouts.default')

@section('title', 'Blank Page')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">@lang('menu.home')</a></li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">{{Lang::get('dictionary.welcome')}}<small></small></h1>
	<!-- end page-header -->
	
	<!-- begin panel -->
	<div id='app'>
		<articulos></articulos>
	</div>
	<script src="{{asset('js/app.js')}}"></script>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
	<!-- end panel -->
@endsection