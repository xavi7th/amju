export const apiDomain = '/api/'
/**
 *
 * @param {string} url
 */
export const rootUrl = url => '/' + ( url || '' )
export const apiRootUrl = url => apiDomain + ( url || '' )
export const httpUserApiRootUrl = url => apiDomain + 'dashboard/api/' + ( url || '' )
export const httpAdminApiRootUrl = url => apiDomain + 'admin/api/' + ( url || '' )

export const siteRootUrl = rootUrl()
export const siteWelcome = rootUrl( 'welcome' )

/**
 * API endpoints
 */
export const siteTestimonials = apiRootUrl( 'testimonials' )
export const siteTeam = apiRootUrl( 'team' )
export const siteContact = apiRootUrl( 'contact' )
export const testimonialChart = apiRootUrl( 'testimonial-chart' )
export const tokensChart1 = apiRootUrl( 'tokens-chart1' )
export const tokensChart2 = apiRootUrl( 'tokens-chart2' )
export const tokensChart3 = apiRootUrl( 'tokens-chart3' )
export const aboutChart = apiRootUrl( 'about-chart' )
export const tickerBarChart = apiRootUrl( 'ticker-bar-chart' )

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
