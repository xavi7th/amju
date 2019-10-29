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

const allRoutes = [ {
		path: '/tope-amju',
		component: view( 'dashboard/AdminDashboard' ),
		name: 'admin.root',
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
]

const authRoutes = [ {
		path: '/tope-amju/login',
		component: view( 'auth/Login' ),
		name: 'admin.login',
		meta: {
			title: APP_NAME,
		},
	},
	{
		path: '*',
		redirect: {
			path: '/'
		}
	}
]

// const processRoutes = ( time, route ) => new Promise( resolve => setTimeout( resolve( route.path == "/tope-amju" ? route : false ), time ) );

const processRoutes = async ( route ) => {
	const sar = axios.post( '/tope-amju/api/test-route-permission ', {
		route
	} )

	let pp = await sar;
	return pp.data;
}

const getRoutes = async () => {
	let temp = [];
	for ( const route of allRoutes ) {
		const result = await processRoutes( route.name );
		console.log( result );

		if ( result !== false ) {
			temp.push( result )
		}
	}
	return temp;
}

export const routeGenerator = async () => new Router( {
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
	routes: await getRoutes(),
} )

export const authRouter = new Router( {
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
	routes: authRoutes,
} )
