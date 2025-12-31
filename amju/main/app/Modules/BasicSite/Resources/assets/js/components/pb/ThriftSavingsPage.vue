<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
              <p>This account is best for ...</p>
            </li>
            <li>
              <h5>Main Features</h5>
              <ul class="list-marked">
                <li>Open with ₦1,000 Minimum</li>
                <li>Available to individual clubs, Associations,Cooperatives,Group members,Cluster group etc</li>
                <li>Group members make choice contributions daily,weekly or monthly</li>
                <li>Save for a period of four months before withdrawal</li>
              </ul>
            </li>
            <li>
              <h5>Benefits</h5>
              <ul class="list-marked">
                <li>Easy access to micro credit loans within 24hrs</li>
                <li>2.5% interest paid into savings per annum</li>
                <li>Access to micro credit loan up to a maximum of two times of amount saved.</li>
                <li>*723*306* AMJU EazyBanking</li>
                <li>24/7 Internet Banking Services</li>
                <li>AMJU Unique MFB Mobile Banking App</li>
                <li>AMJU Unique MFB Verve debit Card</li>
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
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "ThriftSavingsPage",
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
