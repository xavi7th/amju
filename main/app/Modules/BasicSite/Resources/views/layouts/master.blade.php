<!DOCTYPE html>
<html lang="en" class="wide wow-animation">

	<head>

		<title>{{ env('APP_NAME') }}</title>
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport"
			content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="img/favicon.png" type="image/png" />
		<!-- Stylesheets-->
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700,900">
		<style>
			.preloader {
				position: fixed;
				left: 0;
				top: 0;
				bottom: 0;
				right: 0;
				z-index: 10000;
				display: flex;
				justify-content: center;
				align-items: center;
				padding: 20px;
				background: #f5f5f5;
				transition: .3s all ease;
			}

			.preloader.loaded {
				opacity: 0;
				visibility: hidden;
			}

			.preloader-body {
				text-align: center;
			}

			.preloader-body p {
				position: relative;
				right: -8px;
			}

			.cssload-container {
				width: 100%;
				height: 36px;
				text-align: center;
			}

			.cssload-speeding-wheel {
				width: 36px;
				height: 36px;
				margin: 0 auto;
				border: 3px solid #1a6793;
				border-radius: 50%;
				border-left-color: transparent;
				border-bottom-color: transparent;
				animation: cssload-spin .88s infinite linear;
			}

			@-webkit-keyframes cssload-spin {
				100% {
					transform: rotate(360deg);
				}
			}

			@keyframes cssload-spin {
				100% {
					transform: rotate(360deg);
				}
			}

			.loader-img {
				height: 100px;
				display: block;
				margin: 0 auto 15px;

			}

			.preloader-body span {
				font-weight: bold;
				letter-spacing: 3px;
			}
		</style>
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
			<a href="https://windows.microsoft.com/en-US/internet-explorer/">
				<img src="img/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
			</a>
		</div>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

		<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

		@yield('customCSS')

	</head>

	<body>
		<div class="preloader">
			<div class="preloader-body">
				<p>
					<img src="/img/logo-round-small.png" alt="Amju Unique Logo" class="loader-img">
					<span>Please wait. Loading ...</span>
				</p>
				<p></p>
				<div class="cssload-container">
					<div class="cssload-speeding-wheel"></div>
				</div>
			</div>
		</div>

		<div id="app">
			@yield('contents')
		</div>

		<script src="{{ mix('js/app-vendor.js') }}"></script>
		<script src="{{ mix('js/manifest.js') }}"></script>
		<script src="{{ mix('js/vendor.js') }}"></script>
		<script src="{{ mix('js/app.js') }}"></script>

		@yield('customJS')

		<script src="//code.tidio.co/ulsas2pny13snt0hhxsfk16uzaw8bedu.js" defer async></script>

	</body>

</html>
