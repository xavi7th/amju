<template>
  <section class="about-section spad" id="about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div id="chartAbout"></div>
        </div>
        <div class="col-lg-6 about-text">
          <h2>About {{ CONSTANTS.appName }}</h2>
          <h5>{{ CONSTANTS.appName }} is an innovative brand with a unique vision to provide unparalleled superior trading conditions, advanced education and state-of-the-art trading tools in the forex industry.</h5>
          <p>
            With over 7+ years on the market, expert analytical reviews and more than 200,000 clients, {{ CONSTANTS.appName }} service allows you earn on the
            Forex market without having to make trades yourself; by investing in the accounts of experienced traders
          </p>
          <a href="/login" class="site-btn sb-gradients sbg-line mt-5">Get Started</a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import { CONSTANTS } from "@assets/js/config";
  export default {
    name: "AboutSection",
    data() {
      return {
        CONSTANTS
      };
    },
    created() {
      this.$emit("about-loaded");
    }
  };
</script>

<style scoped lang="scss">
  .res_sm_mb_30 {
    height: 500px;
  }
  .service__text {
    margin-bottom: 1em;
  }

  .spad {
    @media (max-width: 576px) {
      padding-top: 40px;
      padding-bottom: 50px;
      text-align: center;

      .about-text {
        margin-top: 20px;
      }
    }
  }
</style>
