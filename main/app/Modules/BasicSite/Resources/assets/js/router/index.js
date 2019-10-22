import Vue from 'vue'
import VueRouter from 'vue-router'
import {
	siteRootUrl,
	sitePBAmjuAccount,
	sitePBServices,
	sitePBCards,
	sitePBLoans,
	sitePBWaysToBank,
	siteSMEBanking,
	siteCBBankAccount,
	siteCBLoansInvestment,
	siteCBElectronicBanking,
	siteMediaNews,
	siteMediaVideos,
	siteMediaGallery,
	siteIRFinInfo,
	siteIRInvestorNews,
	siteIROutlookInsights,
	siteIREvents,
	siteIRShareholders,
	siteIRInformation,
	siteAboutOurCompany,
	siteAboutCorpGov,
	siteAboutBizFocus,
	siteAboutAwards,
	siteAboutCareer,
	sitePrivacy,
	siteTerms,
	siteContactUs
} from '@assets/js/config'

// import App from '@components/AppComponent'

Vue.use( VueRouter )

const APP_NAME = 'Amju Unique Micro Finance Bank'

/**
 * Asynchronously load view (Webpack Lazy loading compatible)
 * @param  {string}   name     the filename (basename) of the view to load.
 */
function view( name ) {
	return function ( resolve ) {
		require( [ '@components/' + name ], resolve )
	}
}

export function createRouter() {
	return new VueRouter( {
		mode: 'history',
		linkActiveClass: 'active',
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
		routes: [ {
				path: siteRootUrl,
				component: view( 'HomePage' ),
				name: 'site.root',
				meta: {
					title: APP_NAME,
				},
			},
			{
				path: siteContactUs,
				component: view( 'ContactUsPage' ),
				name: 'site.contact',
				meta: {
					title: 'Contacts - ' + APP_NAME,
					breadcrumb: 'Contact Us'
				},
			},
			{
				path: sitePBAmjuAccount,
				component: view( 'PBAmjuAccountPage' ),
				name: 'site.pb.amju-account',
				meta: {
					title: 'Personal Amju Accounts - ' + APP_NAME,
					breadcrumb: 'Personal Amju Accounts'
				},
			},
			{
				path: sitePBServices,
				component: view( 'PBServicesPage' ),
				name: 'site.pb.services',
				meta: {
					title: 'Amju Services - ' + APP_NAME,
					breadcrumb: 'Services'
				},
			},
			{
				path: sitePBCards,
				component: view( 'PBCardsPage' ),
				name: 'site.pb.cards',
				meta: {
					title: 'Bank Cards - ' + APP_NAME,
					breadcrumb: 'Bank Cards'
				},
			},
			{
				path: sitePBLoans,
				component: view( 'PBLoansPage' ),
				name: 'site.pb.loans',
				meta: {
					title: 'Personal Loans - ' + APP_NAME,
					breadcrumb: 'Personal Loans'
				},
			},
			{
				path: sitePBWaysToBank,
				component: view( 'PBWaysToBankPage' ),
				name: 'site.pb.ways-to-bank',
				meta: {
					title: 'Personal Ways To Bank - ' + APP_NAME,
					breadcrumb: 'Personal Ways To Bank'
				},
			},
			{
				path: siteSMEBanking,
				component: view( 'SMEBankingPage' ),
				name: 'site.sme-banking',
				meta: {
					title: 'SME Banking - ' + APP_NAME,
					breadcrumb: 'SME Banking'
				},
			},
			{
				path: siteCBBankAccount,
				component: view( 'CBBankAccountPage' ),
				name: 'site.cb.bank-account',
				meta: {
					title: 'Corporate Bank Account - ' + APP_NAME,
					breadcrumb: 'Corporate Bank Account'
				},
			},
			{
				path: siteCBLoansInvestment,
				component: view( 'CBLoansInvestmentPage' ),
				name: 'site.cb.loans-investment',
				meta: {
					title: 'Corporate Bank Loans and Investment - ' + APP_NAME,
					breadcrumb: 'Corporate Bank Loans and Investment'
				},
			},
			{
				path: siteCBElectronicBanking,
				component: view( 'CBElectronicBankingPage' ),
				name: 'site.cb.electronic-banking',
				meta: {
					title: 'Corporate Electronic Banking - ' + APP_NAME,
					breadcrumb: 'Corporate Electronic Banking'
				},
			},
			{
				path: siteMediaNews,
				component: view( 'MediaNewsPage' ),
				name: 'site.media.news',
				meta: {
					title: 'News - ' + APP_NAME,
					breadcrumb: 'News'
				},
			},
			{
				path: siteMediaVideos,
				component: view( 'MediaVideosPage' ),
				name: 'site.media.videos',
				meta: {
					title: 'Videos - ' + APP_NAME,
					breadcrumb: 'Videos'
				},
			},
			{
				path: siteMediaGallery,
				component: view( 'MediaGalleryPage' ),
				name: 'site.media.gallery',
				meta: {
					title: 'Amju Gallery - ' + APP_NAME,
					breadcrumb: 'Amju Gallery'
				},
			},
			{
				path: siteIRFinInfo,
				component: view( 'IRFinInfoPage' ),
				name: 'site.ir.finInfo',
				meta: {
					title: 'Financial Info - ' + APP_NAME,
					breadcrumb: 'Financial Info'
				},
			},
			{
				path: siteIRInvestorNews,
				component: view( 'IRInvestorNewsPage' ),
				name: 'site.ir.investorNews',
				meta: {
					title: 'Investor News - ' + APP_NAME,
					breadcrumb: 'Investor News'
				},
			},
			{
				path: siteIROutlookInsights,
				component: view( 'IROutlookInsightsPage' ),
				name: 'site.ir.outlookInsights',
				meta: {
					title: 'Outlook and Insights - ' + APP_NAME,
					breadcrumb: 'Outlook and Insights'
				},
			},
			{
				path: siteIREvents,
				component: view( 'IREventsPage' ),
				name: 'site.ir.events',
				meta: {
					title: 'Investor Relation Events - ' + APP_NAME,
					breadcrumb: 'Investor Relation Events'
				},
			},
			{
				path: siteIRShareholders,
				component: view( 'IRShareholdersPage' ),
				name: 'site.ir.shareholders',
				meta: {
					title: 'Shareholders - ' + APP_NAME,
					breadcrumb: 'Shareholders'
				},
			},
			{
				path: siteIRInformation,
				component: view( 'IRInformationPage' ),
				name: 'site.ir.information',
				meta: {
					title: 'Investor Relations Information - ' + APP_NAME,
					breadcrumb: 'Investor Relations Information'
				},
			},
			{
				path: siteAboutOurCompany,
				component: view( 'AboutOurCompanyPage' ),
				name: 'site.about.our-company',
				meta: {
					title: 'Our Company - ' + APP_NAME,
					breadcrumb: 'Our Company'
				},
			},
			{
				path: siteAboutCorpGov,
				component: view( 'AboutCorpGovPage' ),
				name: 'site.AboutCorpGov',
				meta: {
					title: 'Corporate Governance - ' + APP_NAME,
					breadcrumb: 'Corporate Governance'
				},
			},
			{
				path: siteAboutBizFocus,
				component: view( 'AboutBizFocusPage' ),
				name: 'site.about.bizfocus',
				meta: {
					title: 'Business Focus - ' + APP_NAME,
					breadcrumb: 'Business Focus'
				},
			},
			{
				path: siteAboutAwards,
				component: view( 'AboutAwardsPage' ),
				name: 'site.about.awards',
				meta: {
					title: 'Awards - ' + APP_NAME,
					breadcrumb: 'Awards'
				},
			},
			{
				path: siteAboutCareer,
				component: view( 'AboutCareerPage' ),
				name: 'site.about.career',
				meta: {
					title: 'Career - ' + APP_NAME,
					breadcrumb: 'Career'
				},
			},
			{
				path: sitePrivacy,
				component: view( 'PrivacyPage' ),
				name: 'site.privacy',
				meta: {
					title: 'Privacy - ' + APP_NAME,
					breadcrumb: 'Privacy'
				},
			},
			{
				path: siteTerms,
				component: view( 'TermsPage' ),
				name: 'site.terms',
				meta: {
					title: 'Terms - ' + APP_NAME,
					breadcrumb: 'Terms'
				},
			},
			{
				path: 'page-not-found',
				component: view( '404Page' ),
				name: 'site.error',
				meta: {
					title: `404 - ${APP_NAME}`,
				},
			},
			{
				path: '*',
				redirect: {
					name: 'site.error',
				},
			},
		],
	} )
}
