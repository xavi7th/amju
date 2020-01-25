<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
              <p>Special current account that allow customers ...</p>
            </li>
            <li>
              <h5>Main Features</h5>
              <ul class="list-marked">
                <li>Open account with 10,000 and maintain N10,000 minimum balance</li>
                <li>Availabale to all telecom wholesalers, dealers and traders</li>
                <li>Interest rate very attractive and competitive</li>
              </ul>
            </li>
            <li>
              <h5>Benefits</h5>
              <ul class="list-marked">
                <li>*322*306* AMJU EazyBanking</li>
                <li>24/7 Internet Banking Services</li>
                <li>AMJU Unique MFB Mobile Banking App</li>
                <li>AMJU Unique MFB Verve debit Card</li>
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
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "OverdraftCurrentPage",
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
