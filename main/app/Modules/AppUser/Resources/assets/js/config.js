export const mixins = {
	beforeRouteLeave( to, from, next ) {
		this.$emit( 'is-leaving' )
		next()
	}
}

const apiDomain = '/user/api/'
const rootUrl = url => '/user/' + ( url || '' )
const apiRootUrl = url => apiDomain + ( url || '' )

export const dashboardRootUrl = rootUrl()
export const siteRegister = 'register'
export const siteLogin = 'login'

/**
 * API endpoints
 */
export const userDashboard = apiRootUrl( 'dashboard' )
