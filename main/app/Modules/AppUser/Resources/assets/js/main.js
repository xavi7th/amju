// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import '@assets/js/bootstrap';
import Vue from 'vue'
import VeeValidate from 'vee-validate'
import App from './DashboardAppComponent'
import router from './router'
import LoadScript from 'vue-plugin-load-script'
// import Vue2Filters from 'vue2-filters'

Vue.use( VeeValidate )
// Vue.use( Vue2Filters )
Vue.use( LoadScript )

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
	router,
	template: '<App/>',
	components: {
		App
	}
} )
