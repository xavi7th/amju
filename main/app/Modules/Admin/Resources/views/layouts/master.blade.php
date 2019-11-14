<!doctype html>
<html lang="{{ app()->getLocale() }}">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="robots" content="noindex,nofollow">
		<title>{{ env('APP_TITLE') }} Admin Dashboard</title>
		<link rel="icon" type="image/png" href="/img/favicon.png">
		<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, shrink-to-fit=no">

		@yield('customCSS')
	</head>

	<body>
		<div id="app">
			@yield('contents')
		</div>

		<script src="{{ mix('js/dashboard-app-vendor.js') }}"></script>
		<script src="{{ mix('js/manifest.js') }}"></script>
		<script src="{{ mix('js/vendor.js') }}"></script>
		<script src="{{ mix('js/admin-app.js') }}"></script>

		@yield('customJS')
	</body>

</html>
