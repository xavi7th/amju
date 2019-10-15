<template>
  <div>
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
  import { logout } from "@assets/js/config/endpoints.js";

  export default {
    name: "App",
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
        logout("Could not retrieve user details. Logging you out.");
      },
      pageLoaded() {
        // this.$loadScript("/js/particles-app.js").then(() => {
        this.$loadScript("/js/main.js").then(() => {
          // $(".preloader").fadeOut(300);
        });
        // });
      }
    }
  };
</script>


<style lang="scss">
  @import "~@assets/sass/app";
</style>
