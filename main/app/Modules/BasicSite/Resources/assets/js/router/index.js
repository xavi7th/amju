import Vue from 'vue'
import VueRouter from 'vue-router'
import {
	siteRootUrl,
	siteWelcome,
	siteRegister,
	siteLogin,
	siteAbout,
	sitePackages,
	siteContactPage,
	sitePrivacyPage,
	siteFAQPage
} from '@assets/js/config'

// import App from '@components/AppComponent'

Vue.use( VueRouter )

const APP_NAME = 'AMJU'

/**
 * Asynchronously load view (Webpack Lazy loading compatible)
 * @param  {string}   name     the filename (basename) of the view to load.
 */
function view( name ) {
	return function ( resolve ) {
		require( [ '@components/' + name ], resolve )
	}
}

export function createRouter() {
	return new VueRouter( {
		mode: 'history',
		linkActiveClass: 'active',
		scrollBehavior( to, from, savedPosition ) {
			if ( savedPosition ) {
				return savedPosition
			} else {
				return {
					x: 0,
					y: 0,
				}
			}
		},
		routes: [ {
				path: siteRootUrl,
				component: view( 'HomePage' ),
				name: 'site.root',
				meta: {
					title: 'Welcome | ' + APP_NAME,
				},
			}, {
				path: 'page-not-found',
				component: view( '404Page' ),
				name: 'site.error',
				meta: {
					title: `404 - ${APP_NAME}`,
				},
			},
			{
				path: '*',
				redirect: {
					name: 'site.error',
				},
			},
		],
	} )
}
