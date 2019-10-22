<template>
  <section
    class="section swiper-container swiper-slider swiper-slider-1"
    data-loop="true"
    data-autoplay="5000"
    data-simulate-touch="false"
    data-slide-effect="fade"
  >
    <div class="swiper-wrapper">
      <div class="swiper-slide context-dark" data-slide-bg="img/slider-1-1920x879.jpg">
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-lg-7">
                <h1
                  data-caption-animate="fadeInUp"
                  data-caption-delay="100"
                >#1 Choice for Your Banking Needs</h1>
                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">
                  Our Orange Card is the best
                  option if you are looking for high-quality and reliable banking services.
                </p>
                <a
                  class="button button-lg button-primary button-icon button-icon-left"
                  href="#"
                  data-caption-animate="fadeInUp"
                  data-caption-delay="450"
                >
                  <div class="icon mdi mdi-credit-card"></div>Order a Card
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="swiper-slide context-dark"
        data-slide-bg="img/slider-2-1920x879.jpg"
        style="background-position: 50% 50%"
      >
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-lg-7">
                <h1
                  data-caption-animate="fadeInUp"
                  data-caption-delay="100"
                >Green Credit Card for Everyday Use</h1>
                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">
                  Need a simple but secure
                  credit card? Green Card from Banque has all features you may need.
                </p>
                <a
                  class="button button-lg button-primary button-icon button-icon-left"
                  href="#"
                  data-caption-animate="fadeInUp"
                  data-caption-delay="450"
                >
                  <div class="icon mdi mdi-credit-card"></div>Order a Card
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="swiper-slide context-dark"
        data-slide-bg="img/slider-3-1920x879.jpg"
        style="background-position: 50% 50%"
      >
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-lg-7">
                <h1
                  data-caption-animate="fadeInUp"
                  data-caption-delay="100"
                >The Brightest Card in Your Wallet</h1>
                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">
                  Banque Standard Card offers
                  extensive list of features and benefits for corporate and individual clients.
                </p>
                <a
                  class="button button-lg button-primary button-icon button-icon-left"
                  href="#"
                  data-caption-animate="fadeInUp"
                  data-caption-delay="450"
                >
                  <div class="icon mdi mdi-credit-card"></div>Order a Card
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Swiper Pagination-->
    <div class="container swiper-pagination-wrap">
      <div class="swiper-pagination"></div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "HeroSection",
    mounted() {
      this.$emit("hero-loaded");
    }
  };
</script>

<style lang="scss" scoped>
</style>
