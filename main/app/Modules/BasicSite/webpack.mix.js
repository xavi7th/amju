const {
	mix
} = require( 'laravel-mix' );
require( 'laravel-mix-merge-manifest' );

mix.webpackConfig( {
	resolve: {
		extensions: [ '.js', '.vue', '.json' ],
		alias: {
			'@components': __dirname + '/Resources/assets/js/components',
			'@assets': __dirname + '/Resources/assets/',
		},
	},
} )

mix.scripts( [
	__dirname + '/Resources/assets/js/vendor/jquery-3.2.1.min.js',
	__dirname + '/Resources/assets/js/vendor/owl.carousel.min.js'
], 'public_html/js/app-vendor.js' );

mix.copy( __dirname + '/Resources/assets/js/vendor/main.js', 'public_html/js/main.js' );

mix.copyDirectory( __dirname + '/Resources/assets/img', 'public_html/img' );
mix.copyDirectory( __dirname + '/Resources/assets/fonts', 'public_html/fonts' );

mix.js( __dirname + '/Resources/assets/js/app.js', 'js/app.js' );

if ( mix.inProduction() ) {
	mix.version();
}
