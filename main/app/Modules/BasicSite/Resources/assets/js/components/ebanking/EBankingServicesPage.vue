<template>
  <div v-if="isBasePage">
    <section class="section section-lg">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-10">
            <h2>E-Banking Services</h2>
            <div class="heading-6 block-lg">
              At Amju Unique Micro Finance Bank we have a a wide range of Electronic Banking & Financial Services available to our customers
              This ensures that you are never seperated from your finances when and where you need them all over the world.
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services-->
    <section class="section section-lg bg-gray-100">
      <div class="container">
        <div class="service-list">
          <div class="row row-20 service-item" id="atm-services">
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/atm.jpeg" data-enlarge="250" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">ATM Services</h3>
              <p class="exeption">
                You and your money should never be far apart. Our ATM machines are available in all our branches and are available 24/7.
                Also you can use any ATM machine closest to you.
              </p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.services.atm'}"
              >Learn More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item" id="mobile-banking">
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/mobile-banking.jpg" data-enlarge="250" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">Mobile Banking</h3>
              <p
                class="exeption"
              >Download AMJU Unique MFB app from play store, install the app, Register a new device (If you are just using it for the first time), input your OTP CODE, CREAT PASSWORD, CREATE PIN.START TRANSFER</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.services.mobile-banking'}"
              >Learn More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item" id="internet-banking">
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/amju-internet-banking.png" data-enlarge="250" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">Internet Banking</h3>
              <p class="exeption">Go to any of our branches to register your internet banking</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.services.internet-banking'}"
              >Learn More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item" id="pos">
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/pos.jpg" data-enlarge="250" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">Point of Sales (POS)</h3>
              <p
                class="exeption"
              >To get our POS: Have an existing business, Open a current account, write a request letter and submit with indemnity form.</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.services.pos'}"
              >Learn More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item" id="ussd-codes">
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/ussd-ict4d.png" data-enlarge="250" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">USSD Codes</h3>
              <p class="exeption">Proceed with testing using code</p>
              <ul class="list-marked">
                <li>*322*306*0# - Balance Inquiry</li>
                <li>*322*306*amount# - Self Recharge</li>
                <li>*322*306*phone number*amount# - Others Recharge</li>
                <li>*322*306*account number*amount# - Transfer</li>
                <li>*322*306*biller code*amount# - Bills Payment</li>
                <li>*322*306*biller code*customer id*amount# - Bills Payment</li>
              </ul>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.services.ussd-codes'}"
              >Learn More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item" id="others">
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/cash-count.jpeg" data-enlarge="250" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">Others</h3>
              <p class="exeption">
                We also offer NIP (NIBSS INSTANT PAYMENT),
                PAY DIRECT, and
                AUTO PAY TRANSFER
              </p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.services.nip'}"
              >Learn More</router-link>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <router-view v-else @page-loaded="$emit('page-loaded')"></router-view>
</template>

<script>
  export default {
    name: "eBankingServicesPage",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    },
    computed: {
      isBasePage() {
        return this.$route.name === "site.services";
      }
    }
  };
</script>

<style lang="scss" scoped>
</style>
