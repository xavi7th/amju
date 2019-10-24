<!doctype html>
<html lang="{{ app()->getLocale() }}">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/png" href="/favicon.png">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="robots" content="noindex,nofollow">
		<title>{{ env('APP_TITLE') }}</title>

		@yield('customCSS')

	</head>

	<body>
		<div id="app">
			@yield('contents')
		</div>

		<script src="{{ mix('js/dashboard-app-vendor.js') }}"></script>
		<script src="{{ mix('js/manifest.js') }}"></script>
		<script src="{{ mix('js/vendor.js') }}"></script>
		<script src="{{ mix('js/dashboard-app.js') }}"></script>

		@yield('customJS')

		<script src="//code.tidio.co/ulsas2pny13snt0hhxsfk16uzaw8bedu.js" defer async></script>

	</body>

</html>
