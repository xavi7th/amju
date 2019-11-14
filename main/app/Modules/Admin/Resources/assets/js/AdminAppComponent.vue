<template>
  <div>
    <pre-loader v-if="isLoading"></pre-loader>
    <transition name="slide-out-in" mode="out-in" :duration="{ enter: 1300, leave: 200 }" v-else>
      <div class="auth-layout" v-if="isAuth">
        <site-header v-on:logout-user="logoutUser()" v-if="!is404" :isHome="isHome"></site-header>

        <transition name="nav-transition" mode="out-in">
          <pre-loader v-if="isRouteChanging"></pre-loader>
          <router-view @page-loaded="pageLoaded" v-else />
        </transition>

        <site-footer v-if="!is404"></site-footer>
      </div>
      <div class="wrapper" v-else>
        <admin-nav></admin-nav>
        <admin-header v-on:logout-user="logoutUser()" v-if="!is404" :isHome="isHome"></admin-header>

        <transition name="nav-transition" mode="out-in">
          <pre-loader v-if="isPageChanging"></pre-loader>
          <router-view @page-loaded="pageLoaded" v-else />
        </transition>

        <admin-footer v-if="!is404"></admin-footer>
      </div>
    </transition>
  </div>
</template>

<script>
  import AdminNav from "@admin-components/partials/NavComponent";
  import AdminHeader from "@admin-components/partials/HeaderComponent";
  import AdminFooter from "@admin-components/partials/FooterComponent";
  import { logout } from "@assets/js/config";

  export default {
    name: "AdminApp",
    data: () => ({
      isLoading: false,
      isRouteChanging: false,
      freshLoad: true,
      isPageChanging: false
    }),
    components: {
      AdminHeader,
      AdminFooter,
      AdminNav
    },
    computed: {
      isAuth() {
        return this.$route.path.match("auth");
      },
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
    },
    methods: {
      logoutUser() {
        logout();
      },
      pageLoaded() {
        this.$loadScript("/js/dashboard-main.js").then(() => {
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
    }
  };
</script>

<style lang="scss">
  @import "~@admin-assets/sass/main";
</style>
