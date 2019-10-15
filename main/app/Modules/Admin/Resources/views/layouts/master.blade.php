<!doctype html>
<html lang="{{ app()->getLocale() }}">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="robots" content="noindex,nofollow">
		<title>{{ env('APP_TITLE') }}</title>
		<noscript>
			<link rel="stylesheet" href="{{ mix('css/dashboard-app.css') }}"></noscript>
		@yield('customCSS')
	</head>

	<body>
		<div id="app">
			@yield('contents')
		</div>

		<script src="{{ mix('js/admin-app.js') }}"></script>

		@yield('customJS')
	</body>

</html>
