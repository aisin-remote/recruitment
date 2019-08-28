<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>AIIA - @yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="PT. Aisin Indonesia Automotive merupakan perusahaan yang bergerak di bidang manufaktur komponen otomotive">
		<meta name="keywords" content="Lowongan Kerja Karawang PT Aisin Indonesia Automotive {{ date('Y') }}">
		<meta name="author" content="PT. Aisin Indonesia Automotive">

		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="{{ asset('website/css/bootstrap-grid.css') }}" />
		<link rel="stylesheet" href="{{ asset('website/css/icons.css') }}">
		<link rel="stylesheet" href="{{ asset('website/css/animate.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('website/css/style.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('website/css/responsive.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('website/css/chosen.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('website/css/colors/colors.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('website/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
		@stack('additional_css')
		<link rel="stylesheet" type="text/css" href="{{ asset('website/css/custom.css') }}" />
	</head>
	<body class="primary-bg">

		<div class="page-loading">
			<img src="{{ asset('website/images/loader.gif') }}" alt="" />
		</div>

		<div class="theme-layout" id="scrollup">
			@include('website.includes.responsive_header')
			@include('website.includes.header')

			@yield('pages')

			@include('website.includes.footer')
		</div>

		<div class="account-popup-area signin-popup-box">
			<div class="account-popup">
				<span class="close-popup"><i class="la la-close"></i></span>
				<h3>Login</h3>
				<form>
					<div class="cfield">
						<input type="text" placeholder="Email" />
						<i class="fa fa-at"></i>
					</div>
					<div class="cfield">
						<input type="password" placeholder="Password" />
						<i class="fa fa-unlock-alt"></i>
					</div>
					<p class="remember-label">
						<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
					</p>
					<a href="#" title="">Lupa Password?</a>
					<button type="submit">Login</button>
				</form>
				<div class="extra-login">
					<span>Atau login via google</span>
					<div class="login-social">
						<a class="google-login" href="#" title=""><i class="fa fa-google"></i></a>
					</div>
				</div>
			</div>
		</div><!-- LOGIN POPUP -->
		<div class="account-popup-area signup-popup-box">
			<div class="account-popup">
				<span class="close-popup"><i class="la la-close"></i></span>
				<h3>Daftar</h3>
				<form>
					<div class="cfield">
						<input type="text" placeholder="Nama sesuai KTP" />
						<i class="fa fa-user"></i>
					</div>
					<div class="cfield">
						<input type="text" placeholder="Email" />
						<i class="fa fa-at"></i>
					</div>
					<div class="cfield">
						<input type="password" placeholder="Password" />
						<i class="fa fa-unlock-alt"></i>
					</div>
					<div class="cfield">
						<input type="password" placeholder="Konfirmasi Password" />
						<i class="fa fa-unlock-alt"></i>
					</div>
					<div class="cfield">
						<input type="text" placeholder="Nomer HP" />
						<i class="fa fa-mobile-phone"></i>
					</div>
					<button type="submit">Daftar</button>
				</form>
				<div class="extra-login">
					<span>Atau daftar via google</span>
					<div class="login-social">
						<a class="google-login" href="#" title=""><i class="fa fa-google"></i></a>
					</div>
				</div>
			</div>
		</div><!-- SIGNUP POPUP -->

		{{-- Validasi jika login --}}
		<div class="account-popup-area change-password-popup-box">
			<div class="account-popup">
				<span class="close-popup"><i class="la la-close"></i></span>
				<h3>Ganti Password</h3>
				<form>
					<div class="cfield">
						<input type="password" placeholder="Password Lama" />
						<i class="fa fa-unlock-alt"></i>
					</div>
					<div class="cfield">
						<input type="password" placeholder="Password Baru" />
						<i class="fa fa-unlock-alt"></i>
					</div>
					<div class="cfield">
						<input type="password" placeholder="Konfirmasi Password Baru" />
						<i class="fa fa-unlock-alt"></i>
					</div>
					<button type="submit">Submit</button>
				</form>
			</div>
		</div><!-- CHANGE PASSWORD POPUP -->

		@include('website.includes.profile_sidebar')

		<script src="{{ asset('website/js/jquery.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('website/js/modernizr.js') }}" type="text/javascript"></script>
		<script src="{{ asset('website/js/script.js') }}" type="text/javascript"></script>
		<script src="{{ asset('website/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('website/js/wow.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('website/js/slick.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('website/js/parallax.js') }}" type="text/javascript"></script>
		<script src="{{ asset('website/js/select-chosen.js') }}" type="text/javascript"></script>
		@stack('additional_js')
	</body>
</html>
