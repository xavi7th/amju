<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
              <p>Secure your child’s future with flexible quality accademics with Amju Unique MFB EDUSAVE</p>
            </li>
            <li>
              <h5>Main Features</h5>
              <ul class="list-marked">
                <li>Open with ₦1,000 Minimum</li>
                <li>Available to all categories of students</li>
                <li>Save up to a minimum of ₦100,000 in six months</li>
                <li>Easy access to loan for school fees</li>
              </ul>
            </li>
            <li>
              <h5>Benefits</h5>
              <ul class="list-marked">
                <li>3% Interest per anum payable on average minimum balance of N100,000 for 6 months</li>
                <li>Easy access to loan for school fess</li>
                <li>*322*306* AMJU EazyBanking</li>
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
    name: "AmjuEdusaveSavingsPage",
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
