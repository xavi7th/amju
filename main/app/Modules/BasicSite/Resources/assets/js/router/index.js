import Vue from 'vue'
import VueRouter from 'vue-router'
import {
	siteRootUrl,
	sitePersonalBanking,
	siteAmjuFlexiSavings,
	siteAmjuEdusaveSavings,
	siteThriftSavings,
	siteMarriageSavings,
	siteChristmsaSavings,
	siteEsusuSavings,
	siteEnterpreneurSavings,
	siteSMEBanking,
	sitePlatinumCurrent,
	siteCorporateCurrent,
	siteOverdraftCurrent,
	siteDivineCurrent,
	siteCooperativeCurrent,
	siteGroupLeadingCurrent,
	siteMedia,
	siteMediaNews,
	siteMediaVideos,
	siteMediaGallery,
	siteEbankingServices,
	siteInvestorRelations,
	siteIRFinInfo,
	siteIRInvestorNews,
	siteIROutlookInsights,
	siteIREvents,
	siteIRShareholders,
	siteAboutUs,
	siteAboutOurCompany,
	siteAboutCorpGov,
	siteAboutBizFocus,
	siteAboutAwards,
	siteAboutCareer,
	siteAboutApply,
	siteContactUs,
	siteCreateAccount,
	siteCreateAccountSuccess,
	sitePrivacy,
	siteTerms,
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
			if ( to.hash )
				return {
					selector: to.hash
				}
			else if ( savedPosition ) {
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
					navSkip: true
				},
			},
			{
				path: sitePersonalBanking,
				name: 'site.pb',
				component: view( 'pb/PersonalBankingPage' ),
				meta: {
					title: 'Personal Banking - ' + APP_NAME,
					breadcrumb: 'Personal Banking'
				},
				children: [ {
						path: siteAmjuFlexiSavings,
						component: view( 'pb/AmjuFlexiSavingsPage' ),
						name: 'site.pb.flexi',
						meta: {
							title: 'Amju Flexi Savings - ' + APP_NAME,
							breadcrumb: 'Amju Flexi Savings'
						},
					},
					{
						path: siteAmjuEdusaveSavings,
						component: view( 'pb/AmjuEdusaveSavingsPage' ),
						name: 'site.pb.edusave',
						meta: {
							title: 'Amju Edusave Savings - ' + APP_NAME,
							breadcrumb: 'Amju Edusave Savings'
						},
					},
					{
						path: siteThriftSavings,
						component: view( 'pb/ThriftSavingsPage' ),
						name: 'site.pb.thrift',
						meta: {
							title: 'Thrift Savivgs - ' + APP_NAME,
							breadcrumb: 'Thrift Savivgs'
						},
					},
					{
						path: siteMarriageSavings,
						component: view( 'pb/MarriageSavingsPage' ),
						name: 'site.pb.marriage',
						meta: {
							title: 'Marriage Savings - ' + APP_NAME,
							breadcrumb: 'Marriage Savings'
						},
					},
					{
						path: siteChristmsaSavings,
						component: view( 'pb/ChristmsaSavingsPage' ),
						name: 'site.pb.christmas',
						meta: {
							title: 'Christmas Savings - ' + APP_NAME,
							breadcrumb: 'Christmas Savings'
						},
					},
					{
						path: siteEsusuSavings,
						component: view( 'pb/EsusuSavingsPage' ),
						name: 'site.pb.esusu',
						meta: {
							title: 'Esusu Savings - ' + APP_NAME,
							breadcrumb: 'Esusu Savings'
						},
					},
					{
						path: siteEnterpreneurSavings,
						component: view( 'pb/EnterpreneurSavingsPage' ),
						name: 'site.pb.entrepreneur',
						meta: {
							title: 'Enterpreneur Savings - ' + APP_NAME,
							breadcrumb: 'Enterpreneur Savings'
						},
					},
				]
			},
			{
				path: siteSMEBanking,
				name: 'site.sme',
				component: view( 'sme/SMEBankingPage' ),
				meta: {
					title: 'SME Banking - ' + APP_NAME,
					breadcrumb: 'SME Banking'
				},
				children: [ {
						path: sitePlatinumCurrent,
						component: view( 'sme/PlatinumCurrentPage' ),
						name: 'site.sme.platinum',
						meta: {
							title: 'AMJU Platinum Account - ' + APP_NAME,
							breadcrumb: 'AMJU Platinum Account',
							navName: ""
						},
					},
					{
						path: siteCorporateCurrent,
						component: view( 'sme/CorporateCurrentPage' ),
						name: 'site.sme.corporate',
						meta: {
							title: 'AMJU Current/Corporate Account - ' + APP_NAME,
							breadcrumb: 'AMJU Current/Corporate Account'
						},
					},
					{
						path: siteOverdraftCurrent,
						component: view( 'sme/OverdraftCurrentPage' ),
						name: 'site.sme.overdraft',
						meta: {
							title: 'AMJU Overdraft Account (Telecom) - ' + APP_NAME,
							breadcrumb: 'AMJU Overdraft Account (Telecom)'
						},
					},
					{
						path: siteDivineCurrent,
						component: view( 'sme/DivineCurrentPage' ),
						name: 'site.sme.divine',
						meta: {
							title: 'AMJU Divine Account (Churches) - ' + APP_NAME,
							breadcrumb: 'AMJU Divine Account (Churches)'
						},
					},
					{
						path: siteCooperativeCurrent,
						component: view( 'sme/CooperativeCurrentPage' ),
						name: 'site.sme.cooperative',
						meta: {
							title: 'AMJU Cooperative Account - ' + APP_NAME,
							breadcrumb: 'AMJU Cooperative Account'
						},
					},
					{
						path: siteGroupLeadingCurrent,
						component: view( 'sme/GroupLeadingCurrentPage' ),
						name: 'site.sme.groupleading',
						meta: {
							title: 'AMJU Group Leading Account - ' + APP_NAME,
							breadcrumb: 'AMJU Group Leading Account'
						},
					},
				]
			},
			{
				path: siteEbankingServices,
				name: 'site.services',
				component: view( 'ebanking/EBankingServicesPage' ),
				meta: {
					title: 'eBanking Services - ' + APP_NAME,
					breadcrumb: 'eBanking Services'
				},
				children: [ {
						path: siteEbankingServices,
						name: 'site.services.atm',
						meta: {
							title: 'ATM Services - ' + APP_NAME,
							breadcrumb: 'ATM Services',
							hash: '#atm-services'
						},
					},
					{
						path: siteEbankingServices,
						name: 'site.services.mobile-banking',
						meta: {
							title: 'Mobile Services - ' + APP_NAME,
							breadcrumb: 'Mobile Services',
							hash: '#mobile-banking'
						},
					},
					{
						path: siteEbankingServices,
						name: 'site.services.internet-banking',
						meta: {
							title: 'Internet Banking - ' + APP_NAME,
							breadcrumb: 'Internet Banking',
							hash: '#internet-banking'
						},
					},
					{
						path: siteEbankingServices,
						name: 'site.services.pos',
						meta: {
							title: 'POS For Merchants - ' + APP_NAME,
							breadcrumb: 'POS For Merchants',
							hash: '#pos'
						},
					},
					{
						path: siteEbankingServices,
						name: 'site.services.ussd-codes',
						meta: {
							title: 'USSD Codes - ' + APP_NAME,
							breadcrumb: 'USSD Codes',
							hash: '#ussd-codes'
						},
					},
					{
						path: siteEbankingServices,
						name: 'site.services.nip',
						meta: {
							title: 'NIBSS Instant Payment (NIP) - ' + APP_NAME,
							breadcrumb: 'NIP & Others',
							hash: '#others'
						},
					}

				]
			},
			{
				path: siteMedia,
				component: view( 'media/MediaPage' ),
				name: 'site.media',
				meta: {
					title: 'Media - ' + APP_NAME,
					breadcrumb: 'Media'
				},
				children: [ {
						path: siteMediaNews,
						component: view( 'media/MediaNewsPage' ),
						name: 'site.media.news',
						meta: {
							title: 'News - ' + APP_NAME,
							breadcrumb: 'News'
						},
					},
					{
						path: siteMediaVideos,
						component: view( 'media/MediaVideosPage' ),
						name: 'site.media.videos',
						meta: {
							title: 'Videos - ' + APP_NAME,
							breadcrumb: 'Videos'
						},
					},
					{
						path: siteMediaGallery,
						component: view( 'media/MediaGalleryPage' ),
						name: 'site.media.gallery',
						meta: {
							title: 'Amju Gallery - ' + APP_NAME,
							breadcrumb: 'Amju Gallery'
						},
					},
				]
			},
			{
				path: siteInvestorRelations,
				name: 'site.ir',
				component: view( 'investors/InvestorRelationsPage' ),
				meta: {
					title: 'Investor Relations - ' + APP_NAME,
					breadcrumb: 'Investor Relations',
					navSkip: true,
				},
				children: [ {
						path: siteIRFinInfo,
						component: view( 'investors/IRFinInfoPage' ),
						name: 'site.ir.fin-info',
						meta: {
							title: 'Financial Information - ' + APP_NAME,
							breadcrumb: 'Financial Information'
						},
					},
					{
						path: siteIRInvestorNews,
						component: view( 'investors/IRInvestorNewsPage' ),
						name: 'site.ir.investor-news',
						meta: {
							title: 'Investor News - ' + APP_NAME,
							breadcrumb: 'Investor News'
						},
					},
					{
						path: siteIROutlookInsights,
						component: view( 'investors/IROutlookInsightsPage' ),
						name: 'site.ir.outlook-insights',
						meta: {
							title: 'Outlook and Insight - ' + APP_NAME,
							breadcrumb: 'Outlook and Insight'
						},
					},
					{
						path: siteIREvents,
						component: view( 'investors/IREventsPage' ),
						name: 'site.ir.events',
						meta: {
							title: 'Investor Relation Events - ' + APP_NAME,
							breadcrumb: 'Investor Relation Events'
						},
					},
					{
						path: siteIRShareholders,
						component: view( 'investors/IRShareholdersInfoPage' ),
						name: 'site.ir.shareholders-info',
						meta: {
							title: 'Shareholder Information - ' + APP_NAME,
							breadcrumb: 'Shareholder Information'
						},
					},
				]
			},

			{
				path: siteAboutUs,
				name: 'site.about',
				component: view( 'misc/EmptyComponent' ),
				meta: {
					breadcrumb: 'About Us'
				},
				redirect: {
					name: 'site.about.our-company',
				},
				children: [ {
						path: siteAboutOurCompany,
						component: view( 'about/OurCompanyPage' ),
						name: 'site.about.our-company',
						meta: {
							title: 'Our Company - ' + APP_NAME,
							breadcrumb: 'About Our Bank'
						},
					},
					{
						path: siteAboutCorpGov,
						component: view( 'about/CorpGovPage' ),
						name: 'site.about.corp-gov',
						meta: {
							title: 'Corporate Governance - ' + APP_NAME,
							breadcrumb: 'Corporate Governance'
						},
					},
					{
						path: siteAboutBizFocus,
						component: view( 'about/BizFocusPage' ),
						name: 'site.about.bizfocus',
						meta: {
							title: 'Business Focus - ' + APP_NAME,
							breadcrumb: 'Business Focus'
						},
					},
					{
						path: siteAboutAwards,
						component: view( 'about/AwardsPage' ),
						name: 'site.about.awards',
						meta: {
							title: 'Awards - ' + APP_NAME,
							breadcrumb: 'Awards'
						},
					},
					{
						path: siteAboutCareer,
						component: view( 'about/CareerPage' ),
						name: 'site.about.career',
						meta: {
							title: 'Career - ' + APP_NAME,
							breadcrumb: 'Career'
						},
					},
					{
						path: siteAboutApply,
						component: view( 'about/ApplicationPage' ),
						name: 'site.about.career.apply',
						meta: {
							title: 'Send Us Your Resume - ' + APP_NAME,
							breadcrumb: 'Submit Resume',
							navSkip: true
						},
					},
				]
			},
			{
				path: siteContactUs,
				component: view( 'ContactUsPage' ),
				name: 'site.contact',
				meta: {
					title: 'Contacts - ' + APP_NAME,
					breadcrumb: 'Contact Us',
					navSkip: true
				},
			},
			{
				path: siteCreateAccount,
				component: view( 'accounts/CreateAccountPage' ),
				name: 'site.account.create',
				meta: {
					title: 'Open New Account Instantly - ' + APP_NAME,
					breadcrumb: 'Open New Account',
					navSkip: true
				},
			},
			{
				path: siteCreateAccountSuccess,
				component: view( 'accounts/AccountCreationSuccessPage' ),
				name: 'site.account.create.success',
				meta: {
					title: 'Account Created - ' + APP_NAME,
					breadcrumb: 'New Account Created',
					navSkip: true
				},
			},
			{
				path: sitePrivacy,
				component: view( 'PrivacyPage' ),
				name: 'site.privacy',
				meta: {
					title: 'Privacy - ' + APP_NAME,
					breadcrumb: 'Privacy',
					navSkip: true
				},
			},
			{
				path: siteTerms,
				component: view( 'TermsPage' ),
				name: 'site.terms',
				meta: {
					title: 'Terms - ' + APP_NAME,
					breadcrumb: 'Terms',
					navSkip: true
				},
			},

			{
				path: 'page-not-found',
				component: view( '404Page' ),
				name: 'site.error',
				meta: {
					title: `404 - ${APP_NAME}`,
					navSkip: true
				},
			},
			{
				path: '*',
				meta: {
					navSkip: true
				},
				redirect: {
					name: 'site.error',
				},
			},
		],
	} )
}
