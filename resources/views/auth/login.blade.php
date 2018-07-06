@extends('layouts.empty', ['paceTop' => true])

@section('title', 'Login')

@section('content')
	<div class="login-cover">
	    <div class="login-cover-image" style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin login -->
	<div class="login login-v2" data-pageload-addclass="animated fadeIn">
		<!-- begin brand -->
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
				<i class="fa fa-lock"></i>
			</div>
		</div>
		<!-- end brand -->
		<!-- begin login-content -->
		<div class="login-content">
            <form action="{{ route('login') }}" method="POST" class="margin-bottom-0">
                @csrf
				<div class="form-group m-b-20">
					<input id="email" type="email" placeholder="@lang('placeholders.email_address')" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
				</div>
				<div class="form-group m-b-20">
					<input id="password" type="password" placeholder="@lang('placeholders.password')" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
				<!--<div class="checkbox checkbox-css m-b-20">
					<input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
					<label for="remember">
						{{ __('Remember Me') }}
					</label>
                </div>-->
				<div class="login-buttons">
					<button type="submit" class="btn btn-primary btn-block btn-lg">{{ __('Login') }}</button>
				</div>
				<div class="m-t-20">
					<a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }} | <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </a>
				</div>
			</form>
		</div>
		<!-- end login-content -->
	</div>
	<!-- end login -->
	
	<!--<ul class="login-bg-list clearfix">
		<li class="active"><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-17.jpg" style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-16.jpg" style="background-image: url(../assets/img/login-bg/login-bg-16.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-15.jpg" style="background-image: url(../assets/img/login-bg/login-bg-15.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-14.jpg" style="background-image: url(../assets/img/login-bg/login-bg-14.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-13.jpg" style="background-image: url(../assets/img/login-bg/login-bg-13.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-12.jpg" style="background-image: url(../assets/img/login-bg/login-bg-12.jpg)"></a></li>
	</ul>-->
@endsection

@push('scripts')
	<script src="/assets/js/demo/login-v2.demo.js"></script>
	<script>
		$(document).ready(function() {
			LoginV2.init();
		});
	</script>
@endpush