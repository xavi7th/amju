<template>
  <section
    class="section swiper-container swiper-slider swiper-slider-1"
    data-loop="true"
    data-autoplay="5000"
    data-simulate-touch="false"
    data-slide-effect="fade"
  >

    <div class="swiper-wrapper">
      <div
        class="swiper-slide context-dark"
        :data-slide-bg="`/img/slides/slide-${n}.jpg`"
        v-for="n in 8"
        :key="n"
      ></div>
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
                  Our Accounts are tailor made financial companions and are the best
                  options if you are looking for high-quality and reliable banking services.
                </p>
                <router-link
                  class="button button-lg button-primary button-icon button-icon-left"
                  :to="{name:'site.pb'}"
                  data-caption-animate="fadeInUp"
                  data-caption-delay="450"
                >
                  <div class="icon mdi mdi-credit-card"></div>Find out more
                </router-link>
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
