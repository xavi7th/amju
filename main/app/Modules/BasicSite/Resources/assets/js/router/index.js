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
				},
			},
			{
				path: sitePBAmjuAccount,
				component: view( 'PBAmjuAccountPage' ),
				name: 'site.pb.amju-account',
				meta: {
					title: 'Personal Amju Accounts - ' + APP_NAME,
				},
			},
			{
				path: sitePBServices,
				component: view( 'PBServicesPage' ),
				name: 'site.pb.services',
				meta: {
					title: 'Amju Services - ' + APP_NAME,
				},
			},
			{
				path: sitePBCards,
				component: view( 'PBCardsPage' ),
				name: 'site.pb.cards',
				meta: {
					title: 'Bank Cards - ' + APP_NAME,
				},
			},
			{
				path: sitePBLoans,
				component: view( 'PBLoansPage' ),
				name: 'site.pb.loans',
				meta: {
					title: 'Personal Loans - ' + APP_NAME,
				},
			},
			{
				path: sitePBWaysToBank,
				component: view( 'PBWaysToBankPage' ),
				name: 'site.pb.ways-to-bank',
				meta: {
					title: 'Personal Ways To Bank - ' + APP_NAME,
				},
			},
			{
				path: siteSMEBanking,
				component: view( 'SMEBankingPage' ),
				name: 'site.sme-banking',
				meta: {
					title: 'SME Banking - ' + APP_NAME,
				},
			},
			{
				path: siteCBBankAccount,
				component: view( 'CBBankAccountPage' ),
				name: 'site.cb.bank-account',
				meta: {
					title: 'Corporate Bank Account - ' + APP_NAME,
				},
			},
			{
				path: siteCBLoansInvestment,
				component: view( 'CBLoansInvestmentPage' ),
				name: 'site.cb.loans-investment',
				meta: {
					title: 'Corporate Bank Loans and Investment - ' + APP_NAME,
				},
			},
			{
				path: siteCBElectronicBanking,
				component: view( 'CBElectronicBankingPage' ),
				name: 'site.cb.electronic-banking',
				meta: {
					title: 'Corporate Electronic Banking - ' + APP_NAME,
				},
			},
			{
				path: siteMediaNews,
				component: view( 'MediaNewsPage' ),
				name: 'site.media.news',
				meta: {
					title: 'News - ' + APP_NAME,
				},
			},
			{
				path: siteMediaVideos,
				component: view( 'MediaVideosPage' ),
				name: 'site.media.videos',
				meta: {
					title: 'Videos - ' + APP_NAME,
				},
			},
			{
				path: siteMediaGallery,
				component: view( 'MediaGalleryPage' ),
				name: 'site.media.gallery',
				meta: {
					title: 'Amju Gallery - ' + APP_NAME,
				},
			},
			{
				path: siteIRFinInfo,
				component: view( 'IRFinInfoPage' ),
				name: 'site.ir.finInfo',
				meta: {
					title: 'Financial Info - ' + APP_NAME,
				},
			},
			{
				path: siteIRInvestorNews,
				component: view( 'IRInvestorNewsPage' ),
				name: 'site.ir.investorNews',
				meta: {
					title: 'Investor News - ' + APP_NAME,
				},
			},
			{
				path: siteIROutlookInsights,
				component: view( 'IROutlookInsightsPage' ),
				name: 'site.ir.outlookInsights',
				meta: {
					title: 'Outlook and Insights - ' + APP_NAME,
				},
			},
			{
				path: siteIREvents,
				component: view( 'IREventsPage' ),
				name: 'site.ir.events',
				meta: {
					title: 'Investor Relation Events - ' + APP_NAME,
				},
			},
			{
				path: siteIRShareholders,
				component: view( 'IRShareholdersPage' ),
				name: 'site.ir.shareholders',
				meta: {
					title: 'Shareholders - ' + APP_NAME,
				},
			},
			{
				path: siteIRInformation,
				component: view( 'IRInformationPage' ),
				name: 'site.ir.information',
				meta: {
					title: 'Investor Relations Information - ' + APP_NAME,
				},
			},
			{
				path: siteAboutOurCompany,
				component: view( 'AboutOurCompanyPage' ),
				name: 'site.about.our-company',
				meta: {
					title: 'Our Company - ' + APP_NAME,
				},
			},
			{
				path: siteAboutCorpGov,
				component: view( 'AboutCorpGovPage' ),
				name: 'site.AboutCorpGov',
				meta: {
					title: 'Corporate Governance - ' + APP_NAME,
				},
			},
			{
				path: siteAboutBizFocus,
				component: view( 'AboutBizFocusPage' ),
				name: 'site.about.bizfocus',
				meta: {
					title: 'Business Focus - ' + APP_NAME,
				},
			},
			{
				path: siteAboutAwards,
				component: view( 'AboutAwardsPage' ),
				name: 'site.about.awards',
				meta: {
					title: 'Awards - ' + APP_NAME,
				},
			},
			{
				path: siteAboutCareer,
				component: view( 'AboutCareerPage' ),
				name: 'site.about.career',
				meta: {
					title: 'Career - ' + APP_NAME,
				},
			},
			{
				path: sitePrivacy,
				component: view( 'PrivacyPage' ),
				name: 'site.privacy',
				meta: {
					title: 'Privacy - ' + APP_NAME,
				},
			},
			{
				path: siteTerms,
				component: view( 'TermsPage' ),
				name: 'site.terms',
				meta: {
					title: 'Terms - ' + APP_NAME,
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
