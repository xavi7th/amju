<template>
  <section class="process-section spad" id="how-it-works">
    <div id="chartTickerBar"></div>
    <div class="container">
      <div class="section-title text-center">
        <h2>Get Started With Forex trading</h2>
        <p>
          Forex is a portmanteau of foreign currency and exchange. Foreign exchange is the process of changing one currency into another currency for a variety of reasons, usually for commerce, trading, or tourism.
          For those just getting started, we have kept things simple.
        </p>
      </div>
      <div class="row">
        <div class="col-md-4 process">
          <div class="process-step">
            <figure class="process-icon">
              <i data-v-6d67de80 class="ti-wallet" style="font-size: 3rem; color: #20509e;"></i>
            </figure>
            <h4>Create Your Wallet</h4>
            <p>
              <a href="/register">Register</a> an account right now and a member of our
              dedicated team will get in touch with you with advice and guidiance
              on how to start earning successfully from Forex trades.
              With our dedicated account managers, new traders are not alone in the fast-paced Forex environment.
            </p>
          </div>
        </div>
        <div class="col-md-4 process">
          <div class="process-step">
            <figure class="process-icon">
              <img src="/img/2.png" alt="#" />
            </figure>
            <h4>Fund Your Wallet</h4>
            <p>
              <a href="/login">Login</a> to your Forex Account, and under the guidiance experienced dedicated account managers,
              you can fund your wallet through a variety of payment methods. Fund your wallet and account will get
              provisioned for trading within the next 24 - 72 hours
            </p>
          </div>
        </div>
        <div class="col-md-4 process">
          <div class="process-step">
            <figure class="process-icon">
              <img src="/img/3.png" alt="#" />
            </figure>
            <h4>Cash Out Profits</h4>
            <p>
              <a href="/user/withdrawal-request">Withdrawing</a> your profits is a matter of 3 clicks. We have made the process so trivial, it's unbelievable.
              Withdrawals are available in EUR, GBP, USD CAD as well several crypto currency options. Also there are no hidden
              commissions or charges.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import { CONSTANTS } from "@assets/js/config";
  export default {
    name: "WorksSection",
    data() {
      return {
        CONSTANTS
      };
    },
    created() {
      this.$emit("works-loaded");
    }
  };
</script>

<style scoped lang="scss">
  .spad {
    padding-top: 0;

    .section-title {
      margin-top: 100px;
    }
  }
</style>
