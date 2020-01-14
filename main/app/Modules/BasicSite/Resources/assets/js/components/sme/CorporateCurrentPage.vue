<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
              <p>
                AMJU Individual current account allows customers to withdraw with our cheque in any branch of our
                correspondence commercial bank (Fidelity Bank) all over Nigeria.
              </p>
            </li>
            <li>
              <h5>Main Features</h5>
              <ul class="list-marked">
                <li>Minimum opening balance of N10, 000</li>
                <li>For individuals and companies</li>
                <li>Opportunity to apply for loans and overdraft</li>
              </ul>
            </li>
            <li>
              <h5>Benefits</h5>
              <ul class="list-marked">
                <li>Free access to loan/facilities</li>
                <li>*322*306* AMJU EazyBanking</li>
                <li>24/7 Internet Banking Services</li>
                <li>AMJU Mobile Banking App</li>
                <li>AMJU Verve debit Card</li>
                <li>Email/SMS Alert</li>
                <li>Can withdraw at any branch of our correspondence bank all over Nigeria(Fidelity bank)</li>
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
    name: "CorporateCurrentPage",
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
