<template lang="html">

		<header class="section page-header">
				<!-- RD Navbar-->
				<div class="rd-navbar-wrap rd-navbar-absolute">
					<nav class="rd-navbar rd-navbar-transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
						data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
						data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
						data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px"
						data-xxl-stick-up-offset="20px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
						<div class="rd-navbar-main-outer">
							<div class="rd-navbar-main">
								<!-- RD Navbar Panel-->
								<div class="rd-navbar-panel">
									<!-- RD Navbar Toggle-->
									<button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
									<!-- RD Navbar Brand-->
									<div class="rd-navbar-brand">
										<router-link class="brand" :to="{name:'site.root'}" data-nav>
											<img class="brand-logo-dark" src="img/logo-256.png" alt="" width="151" height="56" />
											<img class="brand-logo-light" src="img/logo-round-small.png" alt="" width="151" height="56" />
										</router-link>
									</div>
								</div>
								<div class="rd-navbar-main-element">
									<div class="rd-navbar-nav-wrap">

										<ul class="rd-navbar-nav">
											<li class="rd-nav-item">
												<a class="rd-nav-link" href="https://ibank.amjuuniquemfbng.com" target="_blank">Internet banking</a>
											</li>
											<router-link tag="li" :to="{name:'site.root'}" class="rd-nav-item">
												<a class="rd-nav-link" href="#" data-nav>Personal Banking</a>
												<ul class="rd-menu rd-navbar-dropdown">
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Amju Account</a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Services</a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Cards</a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Loans</a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Ways to bank</a>
													</router-link>
												</ul>
											</router-link>
											<router-link tag="li" class="rd-nav-item" :to="{name:'site.root'}">
												<a class="rd-nav-link" data-nav>SME Banking</a>
											</router-link>
											<router-link tag="li" :to="{name:'site.root'}" class="rd-nav-item">
												<a class="rd-nav-link" href="#" data-nav>Corporate Banking</a>
												<ul class="rd-menu rd-navbar-dropdown">
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Bank Account</a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Loan &amp; Investment </a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Electronic Banking </a>
													</router-link>
												</ul>
											</router-link>
											<router-link tag="li" :to="{name:'site.root'}" class="rd-nav-item">
												<a class="rd-nav-link" href="#" data-nav>Media</a>
												<ul class="rd-menu rd-navbar-dropdown">
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>News</a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Videos </a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Gallery </a>
													</router-link>
												</ul>
											</router-link>

											<router-link tag="li" :to="{name:'site.root'}" class="rd-nav-item">
												<a class="rd-nav-link" href="#" data-nav>Investor Relations</a>
												<ul class="rd-menu rd-navbar-dropdown">
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Financial Information</a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Investor News </a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Outlook and Insight </a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Events </a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Shareholder Information </a>
													</router-link>
												</ul>
											</router-link>
											<router-link tag="li" :to="{name:'site.root'}" class="rd-nav-item">
												<a class="rd-nav-link" href="#" data-nav>About Us</a>
												<ul class="rd-menu rd-navbar-dropdown">
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Our Company</a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Corporate Governance </a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Business Focus </a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Awards and Achievements </a>
													</router-link>
													<router-link tag="li" class="rd-dropdown-item" :to="{name:'site.root'}">
														<a class="rd-dropdown-link" data-nav>Career </a>
													</router-link>
												</ul>
											</router-link>
										</ul>
									</div>
									<!-- RD Navbar Search-->
									<div class="rd-navbar-search">
										<button class="rd-navbar-search-toggle rd-navbar-fixed-element-1"
											data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
										<form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live"
											method="GET">
											<div class="form-wrap">
												<label class="form-label" for="rd-navbar-search-form-input">Search</label>
												<input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input"
													type="text" name="s" autocomplete="off">
												<div class="rd-search-results-live" id="rd-search-results-live"></div>
											</div>
											<button class="rd-search-form-submit mdi mdi-magnify" type="submit"></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</header>

</template>

<script>
  export default {
    name: "Header",
    data() {
      return {};
    },
    computed: {}
  };
</script>

<style lang="scss">
  .brand-logo-light {
    height: 65px;
    width: auto;
  }

  .rd-navbar-static {
    .rd-navbar-dropdown {
      top: 30px;
    }
    .rd-nav-link {
      font-size: 16px;
    }

    .rd-nav-item {
      > .rd-navbar-submenu-toggle {
        margin-left: 0;
      }
    }

    &.rd-navbar-transparent {
      .rd-nav-item {
        & + .rd-nav-item {
          margin-left: 20px;
          display: flex;
          align-items: center;
        }
      }
    }
  }

  .rd-navbar-nav {
    display: flex;
  }
  .rd-navbar-panel {
    min-width: 128px;
  }

  .rd-navbar--has-dropdown:last-of-type {
    .rd-navbar-dropdown {
      left: auto;
      right: 0;
      padding-right: 0;
    }
  }
</style>
