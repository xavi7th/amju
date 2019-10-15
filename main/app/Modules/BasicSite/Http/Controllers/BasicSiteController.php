<?php

namespace App\Modules\BasicSite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Modules\Admin\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Modules\BasicSite\Models\Message;
use App\Modules\AppUser\Models\TeamMember;
use App\Modules\AppUser\Models\Testimonial;
use App\Modules\BasicSite\Transformers\TeamMemberTransformer;
use App\Modules\BasicSite\Http\Requests\ContactFormValidation;
use App\Modules\BasicSite\Transformers\TestimonialTransformer;

class BasicSiteController extends Controller
{
	/**
	 * The basic site routes that don't require authentication
	 * @return Response
	 */
	public static function routes()
	{
		Route::group(['middleware' => 'web', 'namespace' => 'App\\Modules\BasicSite\Http\Controllers'], function () {

			Route::get('/{subcat?}', function () {
				return view('basicsite::index');
			})->where('subcat', '^((?!(api|' . Admin::DASHBOARD_ROUTE_PREFIX . '|login|user|artisan|user|_debugbar|css|js)).)*')->name('home'); //Matches all routes except routes that start with the list provided.

		});

		Route::group(['middleware' => 'web', 'prefix' => 'api'], function () {


			Route::get('testimonials', function () {
				$testimonials = Testimonial::all();

				return (new TestimonialTransformer)->collectionTransformer($testimonials, 'transformForHomePage');
			});

			Route::get('team', function () {
				$teams = TeamMember::all();

				return (new TeamMemberTransformer)->collectionTransformer($teams, 'transformForHomePage');
			});

			Route::post('/contact', function (ContactFormValidation $request) {
				Message::create(request()->all());
				return response()->json(['status' => true], 201);
			});

			Route::get('/about-chart', function () {
				$template = '
					<!-- TradingView Widget BEGIN -->
					<div class="tradingview-widget-container">
						<div class="tradingview-widget-container__widget"></div>

						<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
							{
								"width": "100%",
								"height": "100%",
								"theme": "dark",
								"currencies": [
									"EUR",
									"USD",
									"JPY",
									"GBP",
									"CAD",
									"AUD"
								],
								"locale": "en"
							}
						</script>
					</div>
					<!-- TradingView Widget END -->
				';
				return response()->json(['template' => $template], 200);
			});

			Route::get('/tokens-chart1', function () {
				$template = '
					<!-- TradingView Widget BEGIN -->
					<div class="tradingview-widget-container">
						<div class="tradingview-widget-container__widget"></div>
						<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
							{
								"width": "100%",
								"height": "700",
								"symbolsGroups": [
									{
										"originalName": "Indices",
										"symbols": [
											{
												"name": "INDEX:DOWI",
												"displayName": "Dow 30"
											},
											{
												"name": "INDEX:NKY",
												"displayName": "Nikkei 225"
											},
											{
												"name": "INDEX:DAX",
												"displayName": "DAX Index"
											},
											{
												"name": "OANDA:UK100GBP",
												"displayName": "FTSE 100"
											}
										],
										"name": "Indices"
									},
									{
										"originalName": "Commodities",
										"symbols": [
											{
												"name": "CME:E61!",
												"displayName": "Euro"
											},
											{
												"name": "COMEX:GC1!",
												"displayName": "Gold"
											},
											{
												"name": "NYMEX:CL1!",
												"displayName": "Crude Oil"
											},
											{
												"name": "NYMEX:NG1!",
												"displayName": "Natural Gas"
											},
											{
												"name": "CBOT:ZC1!",
												"displayName": "Corn"
											}
										],
										"name": "Commodities"
									},
									{
										"originalName": "Forex",
										"symbols": [
											{
												"name": "FX:EURUSD"
											},
											{
												"name": "FX:GBPUSD"
											},
											{
												"name": "FX:USDJPY"
											},
											{
												"name": "FX:USDCHF"
											},
											{
												"name": "FX:AUDUSD"
											},
											{
												"name": "FX:USDCAD"
											}
										],
										"name": "Forex"
									}
								],
								"locale": "en"
							}
						</script>
					</div>
					<!-- TradingView Widget END -->
				';
				return response()->json(['template' => $template], 200);
			});

			Route::get('/tokens-chart2', function () {
				$template = '
					<!-- TradingView Widget BEGIN -->
					<div class="tradingview-widget-container">
						<div id="tradingview_40dd1"></div>
						<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
						<script type="text/javascript">
						new TradingView.widget(
							{
								"width": "100%",
								"height": 500,
								"symbol": "FX:EURUSD",
								"interval": "1",
								"timezone": "Etc/UTC",
								"theme": "Dark",
								"style": "1",
								"locale": "en",
								"toolbar_bg": "#f1f3f6",
								"enable_publishing": false,
								"hide_top_toolbar": true,
								"allow_symbol_change": true,
								"container_id": "tradingview_40dd1"
							}
						);
						</script>
					</div>
					<!-- TradingView Widget END -->
				';
				return response()->json(['template' => $template], 200);
			});

			Route::get('/tokens-chart3', function () {
				$template = '
					<!-- TradingView Widget BEGIN -->
					<div class="tradingview-widget-container">
						<div class="tradingview-widget-container__widget"></div>
						<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
						{
						"showIntervalTabs": true,
						"width": "100%",
						"colorTheme": "light",
						"isTransparent": true,
						"locale": "en",
						"symbol": "FX:EURUSD",
						"interval": "1m",
						"height": "450"
					}
						</script>
					</div>
					<!-- TradingView Widget END -->
				';
				return response()->json(['template' => $template], 200);
			});

			Route::get('/testimonial-char', function () {
				$template = '
					<!-- TradingView Widget BEGIN -->
					<div class="tradingview-widget-container">
						<div class="tradingview-widget-container__widget"></div>
						<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
							{
								"belowLineFillColorGrowing": "rgba(5, 122, 205, 0.12)",
									"gridLineColor": "rgba(242, 243, 245, 1)",
										"scaleFontColor": "rgba(131, 136, 141, 1)",
											"title": "Currencies",
												"tabs": [
													{
														"title_raw": "Major",
														"symbols": [
															{
																"s": "FX_IDC:EURUSD"
															},
															{
																"s": "FX_IDC:USDJPY"
															},
															{
																"s": "FX_IDC:GBPUSD"
															}
														],
														"quick_link": {
															"href": "/markets/currencies/rates-major/",
															"title": "More Majors"
														},
														"title": "Major"
													},
													{
														"title_raw": "Minor",
														"symbols": [
															{
																"s": "FX_IDC:EURGBP"
															},
															{
																"s": "FX_IDC:EURJPY"
															},
															{
																"s": "FX_IDC:GBPJPY"
															}
														],
														"quick_link": {
															"href": "/markets/currencies/rates-minor/",
															"title": "More Minors"
														},
														"title": "Minor"
													},
													{
														"title_raw": "Exotic",
														"symbols": [
															{
																"s": "FX_IDC:USDSEK"
															},
															{
																"s": "FX_IDC:USDMXN"
															},
															{
																"s": "FX_IDC:EURTRY"
															}
														],
														"quick_link": {
															"href": "/markets/currencies/rates-exotic/",
															"title": "More Exotics"
														},
														"title": "Exotic"
													}
												],
													"plotLineColorFalling": "rgba(33, 150, 243, 1)",
													"plotLineColorGrowing": "rgba(33, 150, 243, 1)",
													"showChart": true,
													"title_link": "/markets/currencies/rates-major/",
													"locale": "en",
													"symbolActiveColor": "rgba(225, 239, 249, 1)",
													"belowLineFillColorFalling": "rgba(5, 122, 205, 0.12)",
													"height": "100%",
													"width": "100%"
							}
						</script>
					</div>
					<!-- TradingView Widget END -->

				';
				return response()->json(['template' => $template], 200);
			});

			Route::get('/ticker-bar-chart', function () {
				$template = '
					<!-- TradingView Widget BEGIN -->
					<div class="tradingview-widget-container">
						<div class="tradingview-widget-container__widget"></div>
						<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
							{
								"symbols": [
									{
										"title": "S&P 500",
										"proName": "INDEX:SPX"
									},
									{
										"title": "EUR/USD",
										"proName": "FX_IDC:EURUSD"
									},
									{
										"title": "BTC/USD",
										"proName": "BITFINEX:BTCUSD"
									}
								],
									"colorTheme": "light",
										"isTransparent": false,
											"displayMode": "adaptive",
												"locale": "en"
							}
						</script>
					</div>
					<!-- TradingView Widget END -->
				';
				return response()->json(['template' => $template], 200);
			});

			Route::get('/user-dashboard-chart1', function () {
				$template = <<<EOL
				<!-- TradingView Widget BEGIN -->
				<div class="tradingview-widget-container">
					<div id="analytics-platform"></div>
					<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
					<script type="text/javascript">
						new TradingView.widget({
							container_id: 'analytics-platform',
							width: '100%',
							height: 610,
							symbol: 'FX:EURUSD',
							interval: '1',
							timezone: 'exchange',
							theme: 'Dark',
							style: '0',
							"withdateranges":true,
							toolbar_bg: '#f1f3f6',
							withdateranges: true,
							allow_symbol_change: true,
							save_image: false,
							details: true,
							hotlist: true,
							calendar: true,
							news: ['headlines'],
							locale: 'en',
						})
					</script>
				</div>
				<!-- TradingView Widget END -->
EOL;
				return response()->json(['template' => $template], 200);
			});

			Route::get('/user-dashboard-chart6', function () {
				$template = '


		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
			<div class="tradingview-widget-container__widget"></div>
			<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js"
				async>
					{
						"showIntervalTabs": true,
							"width": "100%",
								"colorTheme": "light",
									"isTransparent": true,
										"locale": "en",
											"symbol": "FX:GBPUSD",
												"interval": "1m",
													"height": 450
					}
				</script>
		</div>
		<!-- TradingView Widget END -->
				';
				return response()->json(['template' => $template], 200);
			});

			Route::get('/user-dashboard-chart3', function () {
				$template = <<<EOL
				<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
			<div id="technical-analysis3"></div>
			<div class="tradingview-widget-copyright">
				<a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView
			</div>
			<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
			<script type="text/javascript">
				new TradingView.widget({
					container_id: 'technical-analysis3',
					width: '100%',
					height: 610,
					symbol: 'AAPL',
					interval: 'D',
					timezone: 'exchange',
					theme: 'Light',
					style: '1',
					toolbar_bg: '#f1f3f6',
					withdateranges: true,
					hide_side_toolbar: false,
					allow_symbol_change: true,
					save_image: false,
					studies: ['ROC@tv-basicstudies', 'StochasticRSI@tv-basicstudies', 'MASimple@tv-basicstudies'],
					show_popup_button: true,
					popup_width: '1000',
					popup_height: '650',
					locale: 'en',
				})
			</script>
		</div>
		<!-- TradingView Widget END -->
EOL;
				return response()->json(['template' => $template], 200);
			});

			Route::get('/user-dashboard-chart4', function () {
				$template = <<<EOL

		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
			<div id="analytics-platform4"></div>
			<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
			<script type="text/javascript">
				new TradingView.widget({
					container_id: 'analytics-platform4',
					width: '100%',
					height: 610,
					symbol: 'FX:USDJPY',
					interval: 'D',
					timezone: 'exchange',
					theme: 'Light',
					style: '0',
					toolbar_bg: '#f1f3f6',
					withdateranges: true,
					allow_symbol_change: true,
					save_image: false,
					details: true,
					hotlist: true,
					calendar: true,
					news: ['headlines'],
					locale: 'en',
				})
			</script>
		</div>
		<!-- TradingView Widget END -->
EOL;
				return response()->json(['template' => $template], 200);
			});

			Route::get('/testimonial-chart', function () {
				$template = <<<EOL
				<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
			<div class="tradingview-widget-container__widget"></div>
			<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
				{
					"width": "100%",
						"height": "500",
							"symbolsGroups": [
								{
									"originalName": "Indices",
									"symbols": [
										{
											"name": "INDEX:DOWI",
											"displayName": "Dow 30"
										},
										{
											"name": "INDEX:NKY",
											"displayName": "Nikkei 225"
										},
										{
											"name": "INDEX:DAX",
											"displayName": "DAX Index"
										},
										{
											"name": "OANDA:UK100GBP",
											"displayName": "FTSE 100"
										}
									],
									"name": "Indices"
								},
								{
									"originalName": "Commodities",
									"symbols": [
										{
											"name": "CME:E61!",
											"displayName": "Euro"
										},
										{
											"name": "COMEX:GC1!",
											"displayName": "Gold"
										},
										{
											"name": "NYMEX:CL1!",
											"displayName": "Crude Oil"
										},
										{
											"name": "NYMEX:NG1!",
											"displayName": "Natural Gas"
										},
										{
											"name": "CBOT:ZC1!",
											"displayName": "Corn"
										}
									],
									"name": "Commodities"
								},
								{
									"originalName": "Forex",
									"symbols": [
										{
											"name": "FX:EURUSD"
										},
										{
											"name": "FX:GBPUSD"
										},
										{
											"name": "FX:USDJPY"
										},
										{
											"name": "FX:USDCHF"
										},
										{
											"name": "FX:AUDUSD"
										},
										{
											"name": "FX:USDCAD"
										}
									],
									"name": "Forex"
								}
							],
								"locale": "en"
				}
			</script>
		</div>
		<!-- TradingView Widget END -->
EOL;
				return response()->json(['template' => $template], 200);
			});
		});
	}
}
