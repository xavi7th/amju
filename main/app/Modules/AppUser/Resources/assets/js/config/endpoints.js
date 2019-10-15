export const apiDomain = '/user/api/'
/**
 * @param {string} url
 */
export const rootUrl = url => '/user/' + ( url || '' )
export const apiRootUrl = url => apiDomain + ( url || '' )

export const dashboardRootUrl = rootUrl()
export const siteRegister = 'register'
export const siteLogin = 'login'

/**
 * API endpoints
 */
export const userDashboard = apiRootUrl( 'dashboard' )

export const logout = ( msg = null ) => {
	if ( !msg ) {
		msg = 'Logging you out....'
	}
	swal.fire( {
		text: msg,
		showCloseButton: false,
		showConfirmButton: false,
	} )
	axios.post( rootUrl( 'logout' ) ).then( rsp => {
		location.reload()
	} )
}
