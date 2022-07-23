const mix = require( 'laravel-mix' )
mix.setPublicPath( './public_html' )


let fs = require( 'fs-extra' )

let modules = fs.readdirSync( './main/app/Modules' ) // Make sure the path of your modules are correct

if ( modules && modules.length > 0 ) {
  modules.forEach( module => {
    let path = `./main/app/Modules/${module}/webpack.mix.js`
    if ( fs.existsSync( path ) ) {
      require( path )
    }
  } )
}
mix
  // .sourceMaps()
  .options({
    fileLoaderDirs: {
      images: 'img',
      // fonts: 'web-fonts'
    },
    postCss: [
      require( 'postcss-fixes' )(),
      require( 'cssnano' )({
        'calc': false
      }),
    ],
  })
  .extract()
  .version()


if ( !mix.inProduction() ) {
  mix.sourceMaps();
}



// mix.webpackConfig( {
// 	devtool: 'source-map',
// } )
