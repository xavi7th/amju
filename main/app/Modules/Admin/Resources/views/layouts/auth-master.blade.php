<!doctype html>
<html lang="{{ app()->getLocale() }}">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="robots" content="noindex,nofollow">
		<title>{{ env('APP_TITLE') }}</title>

		@yield('customCSS')
	</head>

	<body>
		<div id="auth-app">
			@yield('contents')
		</div>

		<script src="{{ mix('js/app-vendor.js') }}"></script>
		<script src="{{ mix('js/manifest.js') }}"></script>
		<script src="{{ mix('js/vendor.js') }}"></script>
		<script src="{{ mix('js/admin-auth-app.js') }}"></script>

		@yield('customJS')
	</body>

</html>
