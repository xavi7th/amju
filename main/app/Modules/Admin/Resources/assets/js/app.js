import '@assets/js/bootstrap'
import Vue from 'vue'
// import VeeValidate from 'vee-validate'
import App from './AdminAppComponent'
const {
	routeGenerator
} = require( './router' )

import LoadScript from 'vue-plugin-load-script'


// import Vue2Filters from 'vue2-filters'


// NOTE: workaround for VeeValidate + vuetable-2
// Vue.use( VeeValidate, {
// 	fieldsBagName: 'formFields'
// } )
// Vue.use( Vue2Filters )
Vue.use( LoadScript )




routeGenerator().then( router => {

	let mediaHandler = () => {
		if ( window.matchMedia( '(max-width: 767px)' ).matches ) {
			/**
			 * Mobile
			 */
			console.log( 'mobile view' );
		} else {
			/**
			 * Desktop
			 */
			console.log( 'desktop view' );
		}
		/**
		 * To set up a watcher
		 */
		// window.matchMedia( '(min-width: 992px)' ).addEventListener( "change", () => {
		// 	console.log( 'changed' )
		// } )
	}

	router.beforeEach( ( to, from, next ) => {
		/**
		 * Emit is loading event? Will App component catch it?
		 */
		// store.commit( 'setLoading', true )
		next()
	} )

	router.afterEach( ( to, from ) => {
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
		el: '#app',
		template: '<App/>',
		components: {
			App
		},
		router,
	} )
} )
