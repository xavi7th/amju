<template>
  <div id="app" class="app">
    <pre-loader v-if="isLoading"></pre-loader>
    <transition name="slide-out-in" mode="out-in" :duration="{ enter: 1300, leave: 200 }" v-else>
      <div class="auth-layout" v-if="isAuth">
        <div class="nav hidden-lg-up">
          <router-link class="i-vuestic" :to="{path: '/'}"></router-link>
        </div>
        <div class="main row">
          <div class="auth-content col-lg-6 col-12">
            <router-view></router-view>
          </div>
          <div class="auth-wallpaper col-6 hidden-md-down">
            <div class="oblique"></div>
            <router-link class="i-vuestic" :to="{path: '/'}"></router-link>
          </div>
        </div>
      </div>
      <div v-else>
        <!-- <navbar @logout-user="logoutUser()"></navbar> -->
        <!-- <sidebar></sidebar> -->
        <div class="content-wrap" id="content-wrap">
          <main id="content" class="content" role="main">
            <!-- <user-breadcrumb /> -->
            <router-view v-show="!isLoading"></router-view>
          </main>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
  export default {
    name: "AdminApp",
    data: () => ({
      isLoading: false
    }),
    computed: {
      isAuth() {
        return this.$route.path.match("auth");
      }
    },
    methods: {
      logoutUser() {
        logout("Could not retrieve user details. Logging you out.");
      }
    }
  };
</script>

<style lang="scss">
  @import "~@admin-assets/sass/main";
</style>
