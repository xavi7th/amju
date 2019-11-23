<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
              <p>Special current account that allow customers to ...</p>
            </li>
            <li>
              <h5>Main Features</h5>
              <ul class="list-marked">
                <li>To open with N5000</li>
                <li>Can be a current or savings accounts</li>
                <li>Available to all churches</li>
                <li>Save 30 percent of the amount of any assest eg Instrument,building equipment,generator,vehicle and other assest.</li>
                <li>Bank purchase the assest for the church</li>
                <li>Building of parishes and branches</li>
              </ul>
            </li>
            <li>
              <h5>Benefits</h5>
              <ul class="list-marked">
                <li>To promote the gospel</li>
                <li>Easy access to loans</li>
                <li>Bank grant the church credit facility up to 70% of the cost of assest</li>
                <li>Loan to be repaid within a maximum of 12 months</li>
                <li>*322*306* AMJU EazyBanking</li>
                <li>24/7 Internet Banking Services</li>
                <li>AMJU Mobile Banking App</li>
                <li>AMJU Verve debit Card</li>
                <li>Email/SMS Alert</li>
                <li>Free access to a Chequebook, based on request at any of our branches nationwide</li>
              </ul>
            </li>
            <li>
              <h5>Requirements</h5>
              <ul class="list-marked">
                <li>Account opening form filled completely</li>
                <li>One recent clear passport photograph of signatory</li>
                <li>Identification of signatories (Driver’s License, International Passport, National Identity Card or Voter’s Card)</li>
                <li>Two independent and satisfactory references</li>
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
    name: "DivineCurrentPage",
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
