<template>
  <div>
    <transition name="slide-out-in" mode="out-in" :duration="{ enter: 1300, leave: 200 }">
      <div class="wrapper" v-if="isAuth">
        <transition name="nav-transition" mode="out-in">
          <router-view @page-loaded="pageLoaded" />
        </transition>
      </div>
      <div class="wrapper" v-else>
        <admin-nav></admin-nav>
        <admin-header v-on:logout-user="logoutUser()" v-if="!is404" :isHome="isHome"></admin-header>

        <transition name="nav-transition" mode="out-in">
          <pre-loader v-if="isLoading"></pre-loader>
          <router-view @page-loaded="pageLoaded" v-else />
        </transition>

        <admin-footer v-if="!is404"></admin-footer>
      </div>
    </transition>
  </div>
</template>

<script>
  import PreLoader from "@admin-components/misc/PageLoader";
  import AdminNav from "@admin-components/partials/NavComponent";
  import AdminHeader from "@admin-components/partials/HeaderComponent";
  import AdminFooter from "@admin-components/partials/FooterComponent";
  import { logout } from "@assets/js/config";

  export default {
    name: "AdminApp",
    data: () => ({
      freshLoad: true,
      isLoading: false
    }),
    components: {
      AdminHeader,
      AdminFooter,
      AdminNav,
      PreLoader
    },
    computed: {
      isAuth() {
        return this.$route.path.match("login");
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
        if (!this.isAuth) {
          this.$loadScript("/js/dashboard-main.js").then(() => {
            if (this.freshLoad) {
              this.freshLoad = false;
              $(".rd-dropdown-item").click(function() {
                $(".rd-nav-item").addClass(
                  "rd-navbar--has-dropdown rd-navbar-submenu"
                );
              });
            }
            $(".preloader").fadeOut(300);
          });
        } else {
          $(".preloader").fadeOut(300);
        }
      }
    }
  };
</script>

<style lang="scss">
  @import "~@admin-assets/sass/main";
</style>
