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
