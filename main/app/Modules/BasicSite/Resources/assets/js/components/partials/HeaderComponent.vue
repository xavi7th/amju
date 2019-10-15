<template lang="html">

		<header class="header-section clearfix">
			<div class="container-fluid">
				<a class="nav-anchor site-logo" href="#home">
					<img src="/img/logo.png" alt="">
				</a>
				<div class="responsive-bar"><i class="fa fa-bars"></i></div>
				<a href="" class="user"><i class="fa fa-user-plus"></i></a>
				<a href="/register" class="site-btn">Sign Up Free</a>
				<nav class="main-menu">
					<ul class="menu-list">
						<li><a class="nav-anchor" href="#about-us">About Us</a></li>
						<li><a class="nav-anchor" href="#how-it-works">How It Works</a></li>
						<li><a class="nav-anchor" href="#testimonials">Testimonials</a></li>
						<li><a class="nav-anchor" href="#contact-us">Contact</a></li>
					</ul>
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
    computed: {
      otherPages() {
        return this.$route.name !== "site.root";
      }
    }
  };
</script>

<style lang="scss" scoped>
  .header-section {
    transition: all 300ms ease;
    position: fixed;
    @media (min-width: 768px) {
      &::before {
        content: "";
        background-image: linear-gradient(
          to left,
          #3e2bce 0%,
          #2dd3aa 100%,
          #2dd3aa 100%,
          #2dd3aa 100%
        );
        display: block;
        width: 100%;
        opacity: 0;
        position: absolute;
        z-index: -1;
        top: 0;
        height: 100%;
        left: 0;

        transition: 600ms ease all;
      }
      &.dark {
        padding-bottom: 10px;
        padding-top: 20px;
        z-index: 99999999;

        &::before {
          opacity: 1;
        }

        .site-btn {
          transition: padding ease-in 600ms;
          padding: 10px 20px;
        }
      }
    }
  }
  .menu-list li a {
    margin-right: 25px;
  }
</style>
