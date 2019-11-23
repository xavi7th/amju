<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
              <p>
                In the era of growing unemployment AMJU will deliver through entrepreneurial start up capital account.
                We train and provide feasibility support, we fund your business, provide management support and direction,
                follow up to succeed in your business, finance agric project,factories,worshops,tools and equipment.
              </p>
            </li>
            <li>
              <h5>Main Features</h5>
              <ul class="list-marked">
                <li>Opening minimum balance of N2000</li>
                <li>Make daily, weekily or monthly savings as agreed</li>
                <li>3% interest on your savings account balance</li>
                <li>*322*306* AMJU EazyBanking</li>
                <li>24/7 Internet Banking Services</li>
                <li>AMJU Mobile Banking App</li>
                <li>AMJU Verve debit Card</li>
                <li>Email/SMS Alert</li>
              </ul>
            </li>
            <li>
              <h5>Requirements</h5>
              <ul class="list-marked">
                <li>Account opening form filled completely</li>
                <li>One recent clear passport photograph of signatory</li>
                <li>Identification of signatories (Driver’s License, International Passport, National Identity Card or Voter’s Card)</li>
                <li>Public Utility Receipt dated within the last three months (PHCN bill)</li>
              </ul>
            </li>
            <li>
              <router-link
                class="button button-lg button-primary"
                :to="{name:'site.account.create'}"
              >Open Account</router-link>
            </li>
          </ul>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4">
          <div class="box-wrap-gray">
            <div class="thumbnail-1">
              <div class="media-wrap">
                <img src="/img/avatar4.jpg" alt width="270" height="270" />
              </div>
              <div class="title">
                <a href="#">Evi HarCourt</a>
              </div>
              <div class="position">Amju Staff</div>
              <p class="exeption">
                The Esusu account is a God-send. I normally eat my profit and find it difficult to grow my business capital. Ever
                since I started the Esusu savings with Amju Unique Micro Finance Bank, my business capital has grown time 5, in just 2 years.
              </p>
              <div class="group group-middle social-items d-flex justify-content-around">
                <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook" href="#"></a>
                <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-twitter" href="#"></a>
                <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-instagram" href="#"></a>
                <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook-messenger" href="#"></a>
                <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-linkedin" href="#"></a>
                <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-snapchat" href="#"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "EnterpreneurSavingsPage",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    }
  };
</script>

<style lang="scss" scoped>
</style>
