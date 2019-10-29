import '@assets/js/bootstrap'
import Vue from 'vue'
// import VeeValidate from 'vee-validate'
import App from './AdminAppComponent'
const {
	authRouter
} = require( './router' )

// NOTE: workaround for VeeValidate + vuetable-2
// Vue.use( VeeValidate, {
// 	fieldsBagName: 'formFields'
// } )


let mediaHandler = () => {
	if ( window.matchMedia( '(max-width: 767px)' ).matches ) {
		/**
		 * Mobile
		 */
	} else {
		/**
		 * Desktop
		 */
	}
	/**
	 * To set up a watcher
	 */
	// window.matchMedia( '(min-width: 992px)' ).addEventListener( "change", () => {
	// 	console.log( 'changed' )
	// } )
}

authRouter.beforeEach( ( to, from, next ) => {
	/**
	 * Emit is loading event? Will App component catch it?
	 */
	// store.commit( 'setLoading', true )
	next()
} )

authRouter.afterEach( ( to, from ) => {
	/**
	 * Emit finished loading event?
	 */
	// store.commit( 'setLoading', false )
	/**
	 * Handle resize based on the browser size
	 */
	mediaHandler()
} )

/* eslint-disable no-new */
new Vue( {
	el: '#auth-app',
	router: authRouter,
	template: '<App/>',
	components: {
		App
	},
} )
