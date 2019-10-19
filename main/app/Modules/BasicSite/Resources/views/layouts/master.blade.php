<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ env('APP_NAME') }}</title>
		<link href="img/favicon.png" rel="shortcut icon" type="image/png" />

		<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

		@yield('customCSS')

	</head>

	<body>

		<div id="app">
			@yield('contents')
		</div>

		<script src="{{ mix('js/app-vendor.js') }}"></script>
		<script src="{{ mix('js/manifest.js') }}"></script>
		<script src="{{ mix('js/vendor.js') }}"></script>
		<script src="{{ mix('js/app.js') }}"></script>

		@yield('customJS')

	</body>

</html>
