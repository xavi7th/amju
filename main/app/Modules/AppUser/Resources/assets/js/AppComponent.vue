<template>
  <div class="wrapper" v-if="isAuth">
    <transition name="fade">
      <pre-loader v-if="isLoading"></pre-loader>
    </transition>
    <transition name="slide-out-in" mode="out-in" :duration="{ enter: 1300, leave: 200 }">
      <router-view @page-loaded="pageLoaded" @is-leaving="isLoading = true"></router-view>
    </transition>
  </div>

  <div class="wrapper" v-else>
    <pre-loader v-if="isLoading"></pre-loader>
    <dashboard-header @logout-user="logoutUser()"></dashboard-header>
    <transition name="slide-out-in" mode="out-in" :duration="{ enter: 1300, leave: 200 }">
      <router-view v-show="!isLoading" @page-loaded="pageLoaded"></router-view>
    </transition>
    <dashboard-footer></dashboard-footer>
  </div>
</template>

<script>
  import PreLoader from "@user-components/PreLoader";
  import DashboardHeader from "@user-components/partials/DashboardHeader";
  import DashboardFooter from "@user-components/partials/DashboardFooter";
  import { logout } from "@user-assets/js/config/endpoints";
  export default {
    name: "DashboardApp",
    components: {
      DashboardHeader,
      DashboardFooter,
      PreLoader
    },
    data: () => ({
      isLoading: true
    }),
    computed: {
      isAuth() {
        return (
          this.$route.path.match("login") || this.$route.path.match("register")
        );
      }
    },
    methods: {
      logoutUser() {
        logout("Could not retrieve user details. Logging you out.");
      },
      pageLoaded() {
        // this.$loadScript("/js/particles-app.js").then(() => {
        this.$loadScript("/js/dashboard-main.js").then(() => {
          this.isLoading = false;
        });
        // .then(() => {
        //   // $(".preloader").fadeOut(300);
        // });
        // });
      }
    }
  };
</script>

<style lang="scss">
  @import "~@user-assets/sass/main";
</style>
