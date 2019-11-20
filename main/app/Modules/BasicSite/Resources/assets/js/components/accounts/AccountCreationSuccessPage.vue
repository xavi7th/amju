<template>
  <section class="section section-md bg-gray-100">
    <div class="container">
      <router-link data-nav class="brand print" :to="{name:'site.root'}">
        <img class="brand-logo-dark" src="/img/logo-round.png" alt width="200" height="45" />
        <img class="brand-logo-light" src="/img/logo-round.png" alt width="200" height="45" />
      </router-link>
      <div
        class="row row-40 justify-content-center number-counter blurb-icon-bordered-wrap wow fadeInUp text-center"
        style="visibility: visible; animation-name: fadeInUp;"
      >
        <div class="col-sm-12 col-lg-8">
          <div class="blurb-icon-bordered">
            <div class="icon-wrap">
              <div class="icon mercury-icon-partners"></div>
            </div>
            <h2 class="col-12">
              <span>Congratulations {{ user_details.full_name }}</span>
            </h2>
            <h5 class="title">Welcome to Amju Unique Micro Finance Bank</h5>
            <p class="exeption">Your account has been created and your account number is</p>
            <h3>{{ user_details.acc_num }}</h3>
          </div>
        </div>
      </div>
      <div class="row row-fix justify-content-center text-center no-print">
        <div class="col-md-10 col-xl-8">
          <h2 class="custom-title">
            <span>Next Steps</span>
          </h2>
          <p>
            Next download the forms below, print them out, fill them and walk into any of our branches
            in order to pick up your pass book and ATM card.
          </p>
        </div>
        <div class="button-wrap-lg text-center col-12">
          <a
            class="button button-lg button-primary"
            href="/storage/amju-passbook-forms.zip"
            target="_blank"
            data-nav
          >Download Files</a>
          <a class="button button-lg button-default" href="#" onclick="print()" data-nav>Print Page</a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "AccountCreationSuccessPage",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    },
    computed: {
      user_details() {
        return JSON.parse(sessionStorage.getItem("user_details"));
      }
    }
  };
</script>

<style lang="scss">
  .brand.print {
    display: none !important;
  }
  * + .button {
    margin-top: 0px;
  }
  @media print {
    .rd-navbar-wrap,
    footer,
    .no-print {
      display: none;
    }
    .brand.print {
      display: block !important;
      position: fixed;
      top: 0;
      right: 12%;
      transform: scale(0.6);
    }
  }
</style>
