import Vue from 'vue'
import Router from 'vue-router'

/**
 * Asynchronously load view (Webpack Lazy loading compatible)
 * @param  {string}   name     the filename (basename) of the view to load.
 */
function view( name ) {
	return function ( resolve ) {
		require( [ '@admin-components/' + name ], resolve )
	}
}

Vue.use( Router )

const APP_NAME = 'Amju Unique Admin'

export default new Router( {
	mode: 'history',
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
			path: '/moses-guy',
			component: view( 'dashboard/AdminDashboard' ),
			name: 'admin.root',
			meta: {
				title: APP_NAME,
			},
		},
		{
			path: '/moses-guy/login',
			component: view( 'auth/Login' ),
			name: 'admin.login',
			meta: {
				title: APP_NAME,
			},
		},
		{
			path: '*',
			redirect: {
				name: 'admin.root'
			}
		}
	],
} )
