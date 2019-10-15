/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require( '@assets/js/bootstrap' )

import Vue from 'vue'
// import Vue2Filters from 'vue2-filters'
// import VeeValidate from 'vee-validate'
import {
	createRouter
} from './router'
import LoadScript from 'vue-plugin-load-script'

// Vue.use(Vue2Filters)
// Vue.use( VeeValidate )
Vue.use( LoadScript )

import App from '@components/AppComponent.vue';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = createRouter()
router.beforeEach( ( to, from, next ) => {
	document.title = to.meta.title
	next()
} )

const app = new Vue( {
	el: '#app',
	components: {
		App
	},
	template: '<App/>',
	router
} )
