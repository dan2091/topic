@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Login')

@section('content')
	<!-- begin login -->
	<div class="login login-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-11.jpg)"></div>
			<div class="news-caption">
				<h4 class="caption-title"><b>@lang('titles.web_siglas')</b> Web</h4>
				<p>
					@lang('titles.download_app')
				</p>
			</div>
		</div>
		<!-- end news-feed -->
		<!-- begin right-content -->
		<div class="right-content">
			<!-- begin login-header -->
			<div class="login-header">
				<div class="brand">
					<div class="row">
							<div class="col-sm-3">
									<i class="text-primary fa-3x fa fa-check-square"></i>
							</div>
							<div class="col-sm-9 col-xs-12">
									<b>@lang('titles.web_siglas')</b> Web<br>
									<small>@lang('titles.gsi_complete')</small>
							</div>
					</div>
						 
					
				</div>
				<div class="icon">
					<i class="fa fa-sign-in"></i>
				</div>
			</div>
			<!-- end login-header -->
			<!-- begin login-content -->
			<div class="login-content">
				<form action="/home" method="GET" class="margin-bottom-0">
					<div class="form-group m-b-15">
						<input type="text" class="form-control form-control-lg" placeholder="@lang('placeholders.email_address')" required />
					</div>
					<div class="form-group m-b-15">
						<input type="password" class="form-control form-control-lg" placeholder="@lang('placeholders.password')" required />
					</div>
					<!--<div class="checkbox checkbox-css m-b-30">
						<input type="checkbox" id="remember_me_checkbox" value="" />
						<label for="remember_me_checkbox">
							Recordarme
						</label>
					</div>-->
					<div class="login-buttons">
						<button type="submit" class="btn btn-primary btn-block btn-lg">@lang('buttons.signin')</button>
					</div>
					<div class="m-t-20 m-b-40 p-b-40 text-inverse">
						@lang('buttons.missed_password')
					</div>
					<hr />
					<p class="text-center text-grey-darker">
						&copy; GEA Ecuador 2018
					</p>
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end right-container -->
	</div>
	<!-- end login -->
@endsection
