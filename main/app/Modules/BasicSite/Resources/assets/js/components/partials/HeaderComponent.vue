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
											<img class="brand-logo-dark" src="/img/logo-256.png" alt="" width="151" height="56" />
											<img class="brand-logo-light" src="/img/logo-round-small.png" alt="" width="151" height="56" />
										</router-link>
									</div>
								</div>
								<div class="rd-navbar-main-element">
									<div class="rd-navbar-nav-wrap">

										<ul class="rd-navbar-nav">
											<li class="rd-nav-item">
												<a class="rd-nav-link" href="https://ibank.amjuuniquemfbng.com/rubikonibank/app.sn" target="_blank">Internet banking</a>
											</li>
											<li
												v-for="(item, index) in routes"
												:key="index"
												class="rd-nav-item"
											>
												<router-link :to="{name: item.name, hash:item.meta.hash}" v-if="item.meta.hash" class="rd-nav-link" data-nav>
													{{item.meta.breadcrumb}}
												</router-link>
												<router-link :to="item.path" v-else class="rd-nav-link" data-nav>
													{{item.meta.breadcrumb}}
												</router-link>
												<ul class="rd-menu rd-navbar-dropdown" v-if="item.children">
													<li
														v-for="childItem in item.children.filter(x => !x.meta.navSkip)"
														:key="childItem.name"
														class="rd-dropdown-item"
													>
														<router-link :to="{name: childItem.name, hash:childItem.meta.hash}" v-if="childItem.meta.hash" class="nav-link" data-nav>
															{{childItem.meta.breadcrumb}}
														</router-link>
														<router-link :to="childItem.path" class="nav-link" v-else  data-nav>{{childItem.meta.breadcrumb}}</router-link>
													</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- <menu-search-bar></menu-search-bar> -->
								</div>
							</div>
						</div>
					</nav>
				</div>

			<section class="section section-bredcrumbs" v-if="!isHome">
				<div class="container context-dark breadcrumb-wrapper">

					<transition name="slide-left" mode="out-in">
  					<h1 :key="breadcrumb">{{ breadcrumb }}</h1>
					</transition>
					<ul class="breadcrumbs-custom">
						<li><router-link data-nav :to="{name:'site.root'}">Home</router-link></li>
						<li class="active">{{ breadcrumb }}</li>
					</ul>
				</div>
			</section>
			</header>

</template>

<script>
  export default {
    name: "Header",
    props: {
      isHome: {
        type: Boolean,
        default: false,
        required: true
      }
    },
    data() {
      return {};
    },
    computed: {
      breadcrumb() {
        return this.$route.meta.breadcrumb;
      },
      routes() {
        return this.$router.options.routes.filter(x => !x.meta.navSkip);
      }
    }
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
      width: auto;

      a {
        white-space: nowrap !important;
      }
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
