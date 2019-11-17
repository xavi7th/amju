<template>
  <div class="page">
    <site-header v-if="!is404" :isHome="isHome"></site-header>

    <transition name="nav-transition" mode="out-in">
      <router-view @page-loaded="pageLoaded" />
    </transition>

    <site-footer v-if="!is404"></site-footer>
  </div>
</template>

<script>
  import SiteHeader from "@components/partials/HeaderComponent";
  import SiteFooter from "@components/partials/FooterComponent";

  export default {
    name: "BasicSiteApp",
    created() {},
    data() {
      return {
        freshLoad: true
      };
    },
    components: {
      SiteHeader,
      SiteFooter
    },
    methods: {
      pageLoaded() {
        this.$loadScript("/js/main.js").then(() => {
          if (this.freshLoad) {
            this.freshLoad = false;
            $(".rd-dropdown-item").click(function() {
              $(".rd-nav-item").addClass(
                "rd-navbar--has-dropdown rd-navbar-submenu"
              );
            });
          }
        });
      }
    },
    computed: {
      is404() {
        return this.$route.name
          ? this.$route.name.match("site.error")
            ? true
            : false
          : false;
      },
      isHome() {
        return this.$route.name
          ? this.$route.name.match("site.root")
            ? true
            : false
          : false;
      }
    }
  };
</script>


<style lang="scss">
  @import "~@assets/sass/app";
</style>
