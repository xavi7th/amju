<template>
  <section class="section one-screen-page bg-primary-dark">
    <div class="one-screen-page-inner">
      <div class="page-header">
        <div class="container">
          <!-- Brand-->
          <router-link data-nav class="brand" :to="{name:'site.root'}">
            <img class="brand-logo-dark" src="/img/logo-round.png" alt width="200" height="45" />
            <img class="brand-logo-light" src="/img/logo-round.png" alt width="200" height="45" />
          </router-link>
        </div>
      </div>
      <div class="page-content">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7 col-xl-6">
              <div class="one-screen-page-box">
                <div class="page-title">404</div>
                <h1 class="page-subtitle">Page Not Found</h1>
                <p
                  class="heading-6 page-description"
                >The requested page couldn't be found - this could be due to a spelling error in the URL or a removed page.</p>
                <router-link
                  class="button button-lg button-primary"
                  :to="{name:'site.root'}"
                  data-nav
                >Back to home page</router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-footer">
        <div class="container">
          <!-- Rights-->
          <p class="rights">
            <span>&copy;&nbsp;</span>
            <span class="copyright-year"></span>
            <span>&nbsp;</span>
            <span>All rights reserved</span>
            <span>.&nbsp;</span>
            <router-link :to="{name:'site.privacy'}">Privacy Policy</router-link>
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "PageNotFound",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    }
  };
</script>
