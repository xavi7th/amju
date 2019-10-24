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

export const CONSTANTS = {
	facebook: 'amju-facebook',
	twitter: 'amju-twitter',
	instagram: 'amju-instagram',
	facebookMessenger: 'amju-facebook-messenger',
	linkedin: 'amju-linkedin',
	snapchat: 'amju-snapchat',
}

export const siteRootUrl = rootUrl()
export const sitePBAmjuAccount = rootUrl( 'personal-banking/amju-account' )
export const sitePBServices = rootUrl( 'personal-banking/services' )
export const sitePBCards = rootUrl( 'personal-banking/cards' )
export const sitePBLoans = rootUrl( 'personal-banking/loans' )
export const sitePBWaysToBank = rootUrl( 'personal-banking/ways-to-bank' )
export const siteSMEBanking = rootUrl( 'small-and-medium-enterprise-banking' )
export const siteCBBankAccount = rootUrl( 'corporate-banking/bank-account' )
export const siteCBLoansInvestment = rootUrl( 'corporate-banking/loans-and-investment' )
export const siteCBElectronicBanking = rootUrl( 'corporate-banking/electronic-banking' )
export const siteMediaNews = rootUrl( 'media/news' )
export const siteMediaVideos = rootUrl( 'media/videos' )
export const siteMediaGallery = rootUrl( 'media/gallery' )
export const siteIRFinInfo = rootUrl( 'investor-relations/financial-information' )
export const siteIRInvestorNews = rootUrl( 'investor-relations/investor-news' )
export const siteIROutlookInsights = rootUrl( 'investor-relations/outlook-and-insights' )
export const siteIREvents = rootUrl( 'investor-relations/events' )
export const siteIRShareholders = rootUrl( 'investor-relations/shareholders' )
export const siteIRInformation = rootUrl( 'investor-relations/information' )
export const siteAboutOurCompany = rootUrl( 'about-us/our-company' )
export const siteAboutCorpGov = rootUrl( 'about-us/corporate-governance' )
export const siteAboutBizFocus = rootUrl( 'about-us/business-focus' )
export const siteAboutAwards = rootUrl( 'about-us/awards-and-achievements' )
export const siteAboutCareer = rootUrl( 'about-us/career' )
export const siteAboutApply = rootUrl( 'about-us/career/submit-resume' )
export const sitePrivacy = rootUrl( 'privacy-policy' )
export const siteTerms = rootUrl( 'terms-and-conditions' )
export const siteContactUs = rootUrl( 'contact-us' )


/**
 * API endpoints
 */
export const siteInternetBanking = 'https://ibank.amjuuniquemfbng.com/'
export const siteTestimonials = apiRootUrl( 'testimonials' )
export const siteFAQ = apiRootUrl( 'faq' )
export const siteContact = apiRootUrl( 'contact' )
