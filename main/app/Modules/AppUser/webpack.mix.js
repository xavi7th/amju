/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const {
	mix
} = require( 'laravel-mix' );
require( 'laravel-mix-merge-manifest' );

mix.webpackConfig( {
	resolve: {
		extensions: [ '.js', '.vue', '.json' ],
		alias: {
			'@user-components': __dirname + '/Resources/assets/js/components',
			'@user-assets': __dirname + '/Resources/assets/',
		},
	},
} )

mix.scripts( [
	__dirname + '/Resources/assets/js/vendor/jquery-3.2.1.min.js',
	__dirname + '/Resources/assets/js/vendor/popper.min.js',
	__dirname + '/Resources/assets/js/vendor/bootstrap.min.js',
	__dirname + '/Resources/assets/js/vendor/simplebar.min.js',
	__dirname + '/Resources/assets/js/vendor/morris.min.js',
	__dirname + '/Resources/assets/js/vendor/chartjs.min.js',
	__dirname + '/Resources/assets/js/vendor/raphael.min.js',
	__dirname + '/Resources/assets/js/vendor/owl.carousel.min.js'
], 'public_html/js/dashboard-app-vendor.js' );

mix.scripts( [
	__dirname + '/Resources/assets/js/vendor/main.js',
	__dirname + '/Resources/assets/js/vendor/dashboard-2.js',
], 'public_html/js/dashboard-main.js' );

// mix.copy( __dirname + '/Resources/assets/js/vendor/main.js', 'public_html/js/main.js' );
// mix.copy( __dirname + '/Resources/assets/js/vendor/dashboard-2.js', 'public_html/js/dashboard-2.js' );

mix.copyDirectory( __dirname + '/Resources/assets/img', 'public_html/img' );
mix.copyDirectory( __dirname + '/Resources/assets/fonts', 'public_html/fonts' );

mix.js( __dirname + '/Resources/assets/js/main.js', 'js/dashboard-app.js' )

if ( mix.inProduction() ) {
	mix.version();
}
