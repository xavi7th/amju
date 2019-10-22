<template>
  <div class="page">
    <site-header v-on:logout-user="logoutUser()" v-if="!is404"></site-header>

    <transition name="nav-transition" mode="out-in">
      <router-view @page-loaded="pageLoaded" />
    </transition>

    <site-footer v-if="!is404"></site-footer>
  </div>
</template>

<script>
  import SiteHeader from "@components/partials/HeaderComponent";
  import SiteFooter from "@components/partials/FooterComponent";
  import { logout } from "@assets/js/config";

  export default {
    name: "BasicSiteApp",
    created() {},
    data() {
      return {};
    },
    components: {
      SiteHeader,
      SiteFooter
    },
    methods: {
      logoutUser() {
        logout();
      },
      pageLoaded() {
        this.$loadScript("/js/main.js");
      }
    },
    computed: {
      is404() {
        // console.log(this.$route);

        return this.$route.name ? this.$route.name.match("site.error") : false;
        // (this.$route.name || "").match("site.error") ||
        // this.$route.path.match("login")
      }
    }
  };
</script>


<style lang="scss">
  @import "~@assets/sass/app";
</style>
