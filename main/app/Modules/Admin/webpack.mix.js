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
} = require( 'laravel-mix' )
require( 'laravel-mix-merge-manifest' )

mix.webpackConfig( {
	resolve: {
		extensions: [ '.js', '.vue', '.json' ],
		alias: {
			'@admin-components': __dirname + '/Resources/assets/js/components',
			'@admin-assets': __dirname + '/Resources/assets/'
		},
	},
} )

mix.js( __dirname + '/Resources/assets/js/main.js', 'js/admin-app.js' )

if ( mix.inProduction() ) {
	mix.version()
}
