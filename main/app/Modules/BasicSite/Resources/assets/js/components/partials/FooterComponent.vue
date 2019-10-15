<template lang="html">


		<footer class="footer-section">
			<div class="container">
				<div class="row spad">
					<div class="col-md-6 col-lg-3 footer-widget">
						<img src="/img/logo.png" class="mb-4" alt="">
						<p>It is our mission to provide increasing levels of quality pricing, transparency and execution services so that we can provide you with the best trading experience. We are committed to execution quality and transparency.</p>
						<span>
							Copyright &copy; 2011 - {{ (new Date().getFullYear()) }}. All rights reserved
						</span>
					</div>
					<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
						<h5 class="widget-title">Quick Links</h5>
						<ul>
							<li><a class="nav-anchor" href="#about-us">About Us</a></li>
							<li><a class="nav-anchor" href="#our-team">Our Team</a></li>
							<li><a class="nav-anchor" href="#statistics">CFxPro Statistics</a></li>
							<li><a class="nav-anchor" href="#features">Our Features</a></li>
							<li><a href="/login">Login to Account</a></li>
						</ul>

					</div>
					<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
						<h5 class="widget-title">Where to buy Crypto Currencies</h5>
						<ul>
							<li><a target="_blank" href="https://localbitcoins.com/">Local Bitcois</a></li>
							<li><a target="_blank" href="https://www.blockchain.com">Block Chain</a></li>
							<li><a target="_blank" href="https://www.coinbase.com/">Coinbase</a></li>
							<li><a target="_blank" href="https://www.coinomi.com/en/">Coinomi</a></li>
							<li><a target="_blank" href="https://www.coinmama.com/">Coinmama</a></li>
							<li><a target="_blank" href="https://www.abra.com/">Abra</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
						<h5 class="widget-title">Resources</h5>
						<ul>
							<li><a target="_blank" href="https://en.wikipedia.org/wiki/Foreign_exchange_market">Forex Overview</a></li>
							<li><a target="_blank" href="https://economictimes.indiatimes.com/markets">Markets Dashboard</a></li>
							<li><a target="_blank" href="https://www.investing.com">Forex Analysis</a></li>
							<li><a target="_blank" href="https://www.moneycontrol.com/news/business/markets/">Forex Markets Updates</a></li>
							<li><a target="_blank" href="https://www.thehindubusinessline.com/markets/forex/">Business Line</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="row">
						<div class="col-lg-4 store-links text-center text-lg-left">
						</div>
						<div class="col-lg-8 text-center text-lg-right">
							<ul class="footer-nav">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privacy Policy </a></li>
								<li><a href="mailto:support@cfxpro.com"><span>support@cfxpro.com</span></a></li>
								<li><a href="">+44 (752) 063 7622</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

</template>

<script>
  export default {
    name: "SiteFooter"
  };
</script>

<style lang="scss" scoped>
  .spad {
    @media (max-width: 576px) {
      padding-bottom: 0;
    }
  }
</style>
