<template>
  <div class="page">
    <site-header v-on:logout-user="logoutUser()"></site-header>

    <transition name="nav-transition" mode="out-in">
      <router-view @page-loaded="pageLoaded" />
    </transition>

    <site-footer></site-footer>
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
    }
  };
</script>


<style lang="scss">
  @import "~@assets/sass/app";
</style>
