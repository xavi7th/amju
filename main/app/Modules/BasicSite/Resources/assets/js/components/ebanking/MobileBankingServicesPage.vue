<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
              <p>
                Enjoy unlimited access to your funds on the go. As long as you have an internet connected device,
                you can access your funds and carry out transactions at any time. Follow the steps to access and register
                your mobile app
              </p>
            </li>
            <li>
              <h5>Registration Steps</h5>
              <ul class="list-marked">
                <li>Open your goggle play store on your Android device</li>
                <li>Type AMJU in the search engine</li>
                <li>Click on download (Wait while the app is downloaded on your phone)</li>
                <li>Click on install (After the installation the APP ICON would drop on your phone screen)</li>
                <li>Click on the APP ICON to open</li>
                <li>Click on “Register a new device”</li>
                <li>Type your account number and click on continue, then wait to receive OTP</li>
                <li>Type the OTP immediately(it expires after 1minute) and click on continue</li>
                <li>Create a password for yourself(use an alphanumeric e.g. Joh768)</li>
                <li>Confirm your password</li>
                <li>Create PIN(FOUR DIGIT e.g 1234)</li>
                <li>Click on continue</li>
                <li>Immediately your account number will be defaulted on the screen of your APP then you can type your password and continue your transactions.</li>
              </ul>
            </li>
            <li>
              <h5>Features &amp; Benefits</h5>
              <ul class="list-marked">
                <li>Bills Payments i.e. PHCN bills, Cable TV bills</li>
                <li>Airtime Recharge</li>
                <li>Funds Transfer</li>
                <li>Balance Enquiry</li>
                <li>Request a mini statement</li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4">
          <div class="box-wrap-gray">
            <div class="thumbnail-1">
              <div class="media-wrap">
                <img src="/img/mobile-banking.jpg" alt width="270" height="270" />
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
    name: "MobileBankingServices",
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
