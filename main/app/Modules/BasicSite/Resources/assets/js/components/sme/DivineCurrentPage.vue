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
                <li>To open with N5000</li>
                <li>Can be a current or savings accounts</li>
                <li>Available to all churches</li>
                <li>Save 30 percent of the amount of any assets eg Instrument,building equipment,generator,vehicle and other assets.</li>
                <li>Bank purchase the assets for the church</li>
                <li>Building of parishes and branches</li>
              </ul>
            </li>
            <li>
              <h5>Benefits</h5>
              <ul class="list-marked">
                <li>To promote the gospel</li>
                <li>Easy access to loans</li>
                <li>Bank grant the church credit facility up to 70% of the cost of assets</li>
                <li>Loan to be repaid within a maximum of 12 months</li>
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
