import Vue from 'vue'
import VueRouter from 'vue-router'
import {
	siteRootUrl,
	sitePersonalBanking,
	siteAmjuFlexySavings,
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
	siteEBAtmServices,
	siteEBMobileBankingServices,
	siteEBInternetBankingServices,
	siteEBPosServices,
	siteEBUssdCodesServices,
	siteEBNipServices,
	siteEBProductsAndServices,
	siteInvestorRelations,
	siteIRFinInfo,
	siteIRInvestorNews,
	siteIROutlookInsights,
	siteIREvents,
	siteIRShareholders,
	siteAboutUs,
	siteAboutBranches,
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
					breadcrumb: 'Personal Banking',
					bgImg: '/img/banners/amju-personal-banking.jpg',
				},
				children: [ {
						path: siteAmjuFlexySavings,
						component: view( 'pb/AmjuFlexySavingsPage' ),
						name: 'site.pb.flexy',
						meta: {
							title: 'Amju Flexy Savings - ' + APP_NAME,
							breadcrumb: 'Amju Flexy Savings',
							bgImg: '/img/banners/amju-flexy-savings.jpg',
						},
					},
					{
						path: siteAmjuEdusaveSavings,
						component: view( 'pb/AmjuEdusaveSavingsPage' ),
						name: 'site.pb.edusave',
						meta: {
							title: 'Amju Edusave Savings - ' + APP_NAME,
							breadcrumb: 'Amju Edusave Savings',
							bgImg: '/img/banners/amju-edu-save.jpg',
						},
					},
					{
						path: siteThriftSavings,
						component: view( 'pb/ThriftSavingsPage' ),
						name: 'site.pb.thrift',
						meta: {
							title: 'Thrift Savivgs - ' + APP_NAME,
							breadcrumb: 'Thrift Savivgs',
							bgImg: '/img/banners/amju-thrift-savings.jpg',
						},
					},
					{
						path: siteMarriageSavings,
						component: view( 'pb/MarriageSavingsPage' ),
						name: 'site.pb.marriage',
						meta: {
							title: 'Marriage Savings - ' + APP_NAME,
							breadcrumb: 'Marriage Savings',
							bgImg: '/img/banners/amju-marriage-savings.jpg',
						},
					},
					{
						path: siteChristmsaSavings,
						component: view( 'pb/ChristmsaSavingsPage' ),
						name: 'site.pb.christmas',
						meta: {
							title: 'Christmas Savings - ' + APP_NAME,
							breadcrumb: 'Christmas Savings',
							bgImg: '/img/banners/amju-christmas-savings.jpg',
						},
					},
					{
						path: siteEsusuSavings,
						component: view( 'pb/EsusuSavingsPage' ),
						name: 'site.pb.esusu',
						meta: {
							title: 'Esusu Savings - ' + APP_NAME,
							breadcrumb: 'Esusu Savings',
							bgImg: '/img/banners/amju-esusu-savings.jpg',
						},
					},
					{
						path: siteEnterpreneurSavings,
						component: view( 'pb/EnterpreneurSavingsPage' ),
						name: 'site.pb.entrepreneur',
						meta: {
							title: 'Enterpreneur Savings - ' + APP_NAME,
							breadcrumb: 'Enterpreneur Savings',
							bgImg: '/img/banners/amju-entrepreneur-savings.jpg',
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
					breadcrumb: 'SME Banking',
					bgImg: '/img/banners/amju-new-account.jpg',
				},
				children: [ {
						path: sitePlatinumCurrent,
						component: view( 'sme/PlatinumCurrentPage' ),
						name: 'site.sme.platinum',
						meta: {
							title: 'AMJU Platinum Account - ' + APP_NAME,
							breadcrumb: 'AMJU Platinum Account',
							bgImg: '/img/banners/amju-platinum-account.jpg'
						},
					},
					{
						path: siteCorporateCurrent,
						component: view( 'sme/CorporateCurrentPage' ),
						name: 'site.sme.corporate',
						meta: {
							title: 'AMJU Current/Corporate Account - ' + APP_NAME,
							breadcrumb: 'AMJU Current/Corporate Account',
							bgImg: '/img/banners/amju-corporate-account.jpg',
						},
					},
					{
						path: siteOverdraftCurrent,
						component: view( 'sme/OverdraftCurrentPage' ),
						name: 'site.sme.overdraft',
						meta: {
							title: 'AMJU Overdraft Account (Telecom) - ' + APP_NAME,
							breadcrumb: 'AMJU Overdraft Account (Telecom)',
							bgImg: '/img/banners/amju-overdraft-telecoms.jpg',
						},
					},
					{
						path: siteDivineCurrent,
						component: view( 'sme/DivineCurrentPage' ),
						name: 'site.sme.divine',
						meta: {
							title: 'AMJU Divine Account (Churches) - ' + APP_NAME,
							breadcrumb: 'AMJU Divine Account (Churches)',
							bgImg: '/img/banners/amju-divine-savings.jpg',
						},
					},
					{
						path: siteCooperativeCurrent,
						component: view( 'sme/CooperativeCurrentPage' ),
						name: 'site.sme.cooperative',
						meta: {
							title: 'AMJU Cooperative Account - ' + APP_NAME,
							breadcrumb: 'AMJU Cooperative Account',
							bgImg: '/img/banners/amju-cooperative-account.jpg',
						},
					},
					{
						path: siteGroupLeadingCurrent,
						component: view( 'sme/GroupLeadingCurrentPage' ),
						name: 'site.sme.groupleading',
						meta: {
							title: 'AMJU Group Leading Account - ' + APP_NAME,
							breadcrumb: 'AMJU Group Leading Account',
							bgImg: '/img/banners/amju-group-leading.jpg',
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
					breadcrumb: 'eBanking Services',
					bgImg: '/img/banners/amju-e-banking.jpg',
				},
				children: [ {
						path: siteEBAtmServices,
						name: 'site.services.atm',
						component: view( 'ebanking/ATMServicesPage' ),
						meta: {
							title: 'ATM Services - ' + APP_NAME,
							breadcrumb: 'ATM Services',
							bgImg: '/img/banners/amju-atm-services.jpg',
						},
					},
					{
						path: siteEBMobileBankingServices,
						name: 'site.services.mobile-banking',
						component: view( 'ebanking/MobileBankingServicesPage' ),
						meta: {
							title: 'Mobile Services - ' + APP_NAME,
							breadcrumb: 'Mobile Banking Services',
							bgImg: '/img/banners/amju-mobile-banking.jpg',
						},
					},
					{
						path: siteEBInternetBankingServices,
						name: 'site.services.internet-banking',
						component: view( 'ebanking/InternetBankingServicesPage' ),
						meta: {
							title: 'Internet Banking - ' + APP_NAME,
							breadcrumb: 'Internet Banking',
							bgImg: '/img/banners/amju-internet-banking.jpg',
						},
					},
					{
						path: siteEBPosServices,
						name: 'site.services.pos',
						component: view( 'ebanking/POSServicesPage' ),
						meta: {
							title: 'POS For Merchants - ' + APP_NAME,
							breadcrumb: 'POS For Merchants',
							bgImg: '/img/banners/amju-pos-services.jpg',
						},
					},
					{
						path: siteEBUssdCodesServices,
						name: 'site.services.ussd-codes',
						component: view( 'ebanking/USSDServicesPage' ),
						meta: {
							title: 'AMJU Eazybanking - ' + APP_NAME,
							breadcrumb: 'AMJU Eazybanking',
							bgImg: '/img/banners/amju-eazy-banking.jpg',
						},
					},
					{
						path: siteEBNipServices,
						name: 'site.services.nip',
						component: view( 'ebanking/OtherServicesPage' ),
						meta: {
							title: 'NIBSS Instant Payment (NIP) - ' + APP_NAME,
							breadcrumb: 'NIP & Others',
							bgImg: '/img/banners/amju-nip.jpg',
						},
					},
					{
						path: siteEBProductsAndServices,
						name: 'site.services.products',
						component: view( 'ebanking/ProductsAndServices' ),
						meta: {
							title: 'Products and Services - ' + APP_NAME,
							breadcrumb: 'Products and Services',
							bgImg: '/img/banners/amju-flexy.jpg',
							navSkip: true
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
					breadcrumb: 'Media',
					bgImg: '/img/banners/amju-media.jpg',
				},
				children: [ {
						path: siteMediaNews,
						component: view( 'media/MediaNewsPage' ),
						name: 'site.media.news',
						meta: {
							title: 'News - ' + APP_NAME,
							breadcrumb: 'News',
							bgImg: '/img/banners/amju-news.jpg',
						},
					},
					{
						path: siteMediaVideos,
						component: view( 'media/MediaVideosPage' ),
						name: 'site.media.videos',
						meta: {
							title: 'Videos - ' + APP_NAME,
							breadcrumb: 'Videos',
							bgImg: '/img/banners/amju-flexy.jpg',
							navSkip: true
						},
					},
					{
						path: siteMediaGallery,
						component: view( 'media/MediaGalleryPage' ),
						name: 'site.media.gallery',
						meta: {
							title: 'Amju Gallery - ' + APP_NAME,
							breadcrumb: 'Amju Gallery',
							bgImg: '/img/banners/amju-flexy.jpg',
							navSkip: true
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
					bgImg: '/img/banners/amju-flexy.jpg',
					navSkip: true,
				},
				children: [ {
						path: siteIRFinInfo,
						component: view( 'investors/IRFinInfoPage' ),
						name: 'site.ir.fin-info',
						meta: {
							title: 'Financial Information - ' + APP_NAME,
							breadcrumb: 'Financial Information',
							bgImg: '/img/banners/amju-flexy.jpg',
						},
					},
					{
						path: siteIRInvestorNews,
						component: view( 'investors/IRInvestorNewsPage' ),
						name: 'site.ir.investor-news',
						meta: {
							title: 'Investor News - ' + APP_NAME,
							breadcrumb: 'Investor News',
							bgImg: '/img/banners/amju-flexy.jpg',
						},
					},
					{
						path: siteIROutlookInsights,
						component: view( 'investors/IROutlookInsightsPage' ),
						name: 'site.ir.outlook-insights',
						meta: {
							title: 'Outlook and Insight - ' + APP_NAME,
							breadcrumb: 'Outlook and Insight',
							bgImg: '/img/banners/amju-flexy.jpg',
						},
					},
					{
						path: siteIREvents,
						component: view( 'investors/IREventsPage' ),
						name: 'site.ir.events',
						meta: {
							title: 'Investor Relation Events - ' + APP_NAME,
							breadcrumb: 'Investor Relation Events',
							bgImg: '/img/banners/amju-flexy.jpg',
						},
					},
					{
						path: siteIRShareholders,
						component: view( 'investors/IRShareholdersInfoPage' ),
						name: 'site.ir.shareholders-info',
						meta: {
							title: 'Shareholder Information - ' + APP_NAME,
							breadcrumb: 'Shareholder Information',
							bgImg: '/img/banners/amju-flexy.jpg',
						},
					},
				]
			},

			{
				path: siteAboutUs,
				name: 'site.about',
				component: view( 'misc/EmptyComponent' ),
				meta: {
					breadcrumb: 'About Us',
					bgImg: '/img/banners/amju-about-our-bank.jpg',
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
							breadcrumb: 'About Our Bank',
							bgImg: '/img/banners/amju-about-our-bank.jpg',
						},
					},
					{
						path: siteAboutCorpGov,
						component: view( 'about/CorpGovPage' ),
						name: 'site.about.corp-gov',
						meta: {
							title: 'Corporate Governance - ' + APP_NAME,
							breadcrumb: 'Corporate Governance',
							bgImg: '/img/banners/amju-flexy.jpg',
							navSkip: true

						},
					},
					{
						path: siteAboutBizFocus,
						component: view( 'about/BizFocusPage' ),
						name: 'site.about.bizfocus',
						meta: {
							title: 'Business Focus - ' + APP_NAME,
							breadcrumb: 'Business Focus',
							bgImg: '/img/banners/amju-flexy.jpg',
							navSkip: true
						},
					},
					{
						path: siteAboutAwards,
						component: view( 'about/AwardsPage' ),
						name: 'site.about.awards',
						meta: {
							title: 'Awards - ' + APP_NAME,
							breadcrumb: 'Awards',
							bgImg: '/img/banners/amju-flexy.jpg',
							navSkip: true
						},
					},
					{
						path: siteAboutBranches,
						component: view( 'about/OurBranchesPage' ),
						name: 'site.about.branches',
						meta: {
							title: 'Our Branches - ' + APP_NAME,
							breadcrumb: 'Our Branches',
							bgImg: '/img/banners/amju-flexy.jpg',
							navSkip: true
						},
					},
					{
						path: siteAboutCareer,
						component: view( 'about/CareerPage' ),
						name: 'site.about.career',
						meta: {
							title: 'Career - ' + APP_NAME,
							breadcrumb: 'Career',
							bgImg: '/img/banners/amju-careers.jpg',
						},
					},
					{
						path: siteAboutApply,
						component: view( 'about/ApplicationPage' ),
						name: 'site.about.career.apply',
						meta: {
							title: 'Send Us Your Resume - ' + APP_NAME,
							breadcrumb: 'Submit Resume',
							bgImg: '/img/banners/amju-flexy.jpg',
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
					bgImg: '/img/banners/amju-flexy.jpg',
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
					bgImg: '/img/banners/amju-new-account.jpg',
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
					bgImg: '/img/banners/amju-flexy.jpg',
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
					bgImg: '/img/banners/amju-flexy.jpg',
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
					bgImg: '/img/banners/amju-flexy.jpg',
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
