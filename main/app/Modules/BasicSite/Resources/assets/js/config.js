let apiDomain = '/api/'
/**
 *
 * @param {string} url
 */
let rootUrl = url => '/' + ( url || '' )
let apiRootUrl = url => apiDomain + ( url || '' )

export const logout = ( msg = 'Logging you out....' ) => {
	BlockToast.fire( {
		text: msg
	} )
	axios.post( rootUrl( 'logout' ) ).then( rsp => {
		location.reload()
	} )
}

export const CONSTANTS = {}

export const siteRootUrl = rootUrl()

/**
 * API endpoints
 */
export const siteTestimonials = apiRootUrl( 'testimonials' )
export const siteFAQ = apiRootUrl( 'faq' )
export const siteContact = apiRootUrl( 'contact' )
