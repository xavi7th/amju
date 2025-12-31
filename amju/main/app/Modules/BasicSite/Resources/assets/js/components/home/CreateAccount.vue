<template>
  <!-- Call to action-->
  <section class="section section-xs bg-primary-gradient">
    <div class="container">
      <div class="box-cta">
        <div class="box-cta-inner">
          <h3>
            Open Your New
            <span class="font-weight-bold">Bank Account</span> Now!
          </h3>
        </div>
        <div class="box-cta-inner">
          <router-link
            class="button button-lg button-primary-dark"
            :to="{name:'site.account.create'}"
          >Get Started »</router-link>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {};
</script>

<style lang="scss" scoped>
  .bg-primary-gradient {
    background-image: linear-gradient(to right, #012a53, #1e90ff);
  }
  .button-primary-dark {
    color: #ffffff;
    background-color: #012a53;
  }
</style>
