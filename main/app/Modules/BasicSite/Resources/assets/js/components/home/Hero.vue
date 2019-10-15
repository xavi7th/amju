<template>
  <section class="hero-section" id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="/img/laptop.png" class="laptop-image" alt />
        </div>
        <div class="col-md-6 hero-text">
          <h2>
            Invest in
            <span>Forex</span>
            <br />Trading Today
          </h2>
          <h4>Use modern progressive technologies leverage your financial portfolio with a leading forex provider around the world.</h4>
          <form class="hero-subscribe-from">
            <!-- <input type="text" placeholder="Enter your email" /> -->
            <a href="/login" class="site-btn sb-gradients">Get Started</a>
          </form>
        </div>
      </div>
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
  .hero-section {
    height: 800px;
    height: 100vh;
    padding-top: 250px;
    background-image: url("/img/hero-bg.png"), url("/img/hero-bkg.png");

    @media (max-width: 576px) {
      padding-top: 60px;
    }
    @media (min-width: 577px) and (max-width: 767px) {
      padding-top: 550px;
    }
    @media (max-width: 1100px) and (min-width: 768px) {
      padding-top: 400px;
    }
    @media (min-width: 1375px) {
      padding-top: 300px;
    }
  }

  .hero-text {
    @media (max-width: 768px) {
      text-align: center;
    }
  }
</style>
