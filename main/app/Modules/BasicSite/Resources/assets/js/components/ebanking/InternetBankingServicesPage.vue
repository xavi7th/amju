<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
							<p>
								AMJU UNIQUE MFB secures way to access your accounts, manage payments and check your statement 24 hours a day.
							</p>
              <p>
                AMJU UNIQUE MFB Internet Banking launches you into a world without limits. It is a robust channel designed for
								your accounts and allows you conveniently perform transactions online real-time.
              </p>
							<p>
								With Internet Banking, you can, enjoy the convenience of managing your finances quickly and easily at a time that
								suits you. You can bank safely and securely – at work, home or abroad.
							</p>
            </li>
            <li>
              <h5>Benefits</h5>
              <ul class="list-marked">
                <li>Easy access to your account(s) from anywhere in the world.</li>
                <li>Online real-time account monitoring facility.</li>
                <li>Convenience of conducting banking transactions from comfort of home/office.</li>
                <li>Guaranteed security for all your online transactions.</li>
                <li>Easy Access to bank information and products.</li>
                <li>Allows 24/7 access to account.</li>
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
                <img src="/img/atm.jpeg" alt width="270" height="270" />
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
    name: "InternetBankingServices",
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
