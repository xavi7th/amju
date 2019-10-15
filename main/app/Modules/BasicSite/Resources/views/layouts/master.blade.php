<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
		<meta name="description" content="Forex trading website" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="robots" content="noindex,nofollow">
		<title> - {{ env('APP_NAME') }}</title>
		<link href="/favicon.png" rel="shortcut icon" type="image/png" />

		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

		@yield('customCSS')

		<style>
			#preloder {
				position: fixed;
				width: 100%;
				height: 100%;
				top: 0;
				left: 0;
				z-index: 999999;
				background: #fff;
			}

			.loader {
				width: 40px;
				height: 40px;
				position: absolute;
				top: 50%;
				left: 50%;
				margin-top: -13px;
				margin-left: -13px;
				border-radius: 60px;
				animation: loader .8s linear infinite;
				-webkit-animation: loader .8s linear infinite;
			}

			@keyframes loader {
				0% {
					-webkit-transform: rotate(0deg);
					transform: rotate(0deg);
					border: 4px solid #f44336;
					border-left-color: transparent;
				}

				50% {
					-webkit-transform: rotate(180deg);
					transform: rotate(180deg);
					border: 4px solid #673ab7;
					border-left-color: transparent;
				}

				100% {
					-webkit-transform: rotate(360deg);
					transform: rotate(360deg);
					border: 4px solid #f44336;
					border-left-color: transparent;
				}
			}

			@-webkit-keyframes loader {
				0% {
					-webkit-transform: rotate(0deg);
					border: 4px solid #f44336;
					border-left-color: transparent;
				}

				50% {
					-webkit-transform: rotate(180deg);
					border: 4px solid #673ab7;
					border-left-color: transparent;
				}

				100% {
					-webkit-transform: rotate(360deg);
					border: 4px solid #f44336;
					border-left-color: transparent;
				}
			}
		</style>
	</head>

	<body>

		<div id="google_translate_element"></div>
		<div id="preloder">
			<div class="loader"></div>
		</div>

		<div id="app">
			@yield('contents')
		</div>



		<script type="text/javascript" src="https://s3.tradingview.com/tv.js" defer async></script>

		{{-- <script src="/js/jquery-3.2.1.min.js" type="8a41213156f1e980b6406ba5-text/javascript"></script>
				<script src="/js/owl.carousel.min.js" type="8a41213156f1e980b6406ba5-text/javascript"></script>
				<script src="/js/main.js" type="8a41213156f1e980b6406ba5-text/javascript"></script>

				<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js"
					data-cf-settings="8a41213156f1e980b6406ba5-|49" defer=""></script> --}}

		<script src="{{ mix('js/app-vendor.js') }}"></script>
		<script src="{{ mix('js/manifest.js') }}"></script>
		<script src="{{ mix('js/vendor.js') }}"></script>
		<script src="{{ mix('js/app.js') }}"></script>

		{{-- <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js"
			data-cf-settings="8a41213156f1e980b6406ba5-|49" defer=""></script> --}}

		<script>
			document.querySelectorAll( ".stylesheet" ).forEach( link => {
				link.setAttribute( 'rel', 'stylesheet' )
			} )
		</script>
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
		</script>

		<script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement( {
					pageLanguage: 'en'
				}, 'google_translate_element' );
			}
		</script>
		@yield('customJS')

		<style>
			#google_translate_element {
				position: absolute;
				top: 20px;
				left: 300px;
				z-index: 100;
			}

			.goog-te-gadget {
				color: transparent;
			}

			.goog-te-gadget .goog-te-combo {
				color: #20509e;
			}



			/* .goog-te-gadget .goog-te-combo {
				color: #fff;
			} */

			@media(max-width:767px) {
				#google_translate_element {
					top: 0;
					left: 0;
				}

				.goog-te-gadget {
					color: #0000;
				}

				.goog-te-gadget .goog-te-combo {
					color: #fff;
				}

				div[ng-view] {
					padding-top: 25px;
				}

				.translated-ltr div[ng-view] {
					padding-top: 0;
				}
			}

			.goog-logo-link,
			.goog-logo-link:link,
			.goog-logo-link:visited,
			.goog-logo-link:hover,
			.goog-logo-link:active {
				display: none;
			}

			.wt-topbar-right {
				margin-right: 7em;
			}

			@media(max-width: 1024px) {
				.wt-topbar-right {
					margin-right: 15%;
				}
			}

			@media(max-width: 870px) {
				.wt-topbar-right {
					margin-right: 18%;
				}
			}

			.select-css {
				display: block;
				font-size: 16px;
				font-family: sans-serif;
				font-weight: 700;
				color: #444;
				line-height: 1.3;
				padding: .5em 0.4em .5em 15px;
				width: 100%;
				max-width: 100%;
				box-sizing: border-box;
				margin: 0;
				border: 1px solid #aaa;
				box-shadow: 0 1px 0 1px rgba(0, 0, 0, 0.04);
				border-radius: 1.5em;
				-moz-appearance: none;
				-webkit-appearance: none;
				appearance: none;
				background-color: #fff;
				background-image:
					url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E");
				background-repeat: no-repeat, repeat;
				background-position: right 0.7em top 50%, 0 0;
				background-size: 0.65em auto, 100%;
			}

			.select-css::-ms-expand {
				display: none;
			}

			.select-css:hover {
				border-color: #888;
			}

			.select-css:focus {
				border-color: #aaa;
				box-shadow: 0 0 1px 3px rgba(59, 153, 252, 0.7);
				box-shadow: 0 0 0 3px -moz-mac-focusring;
				color: #222;
				outline: none;
			}

			.select-css option {
				font-weight: normal;
			}
		</style>

		<script>
			setTimeout( () => {
				$( '.goog-te-combo' ).addClass( 'select-css' )
			}, 3000 );
		</script>

	</body>

</html>
