<template>
  <section class="section section-lg">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-12 col-xl-10">
          <h2>Different Cards, Different Purposes</h2>
          <div
            class="heading-6 block-lg"
          >We have different card types for your various needs. Be it personal business or private needs we've got you covered.</div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class="row no-gutters justify-content-center">
        <div class="col-md-4">
          <div class="price-box-1">
            <div class="media-wrap">
              <img src="/img/pricing-1-202x162.png" alt width="202" height="162" />
            </div>
            <div class="title">Mastercard</div>
            <p class="exeption">
              Lorem ipsum dolor sit amet, scripta legim us quaerendum ex vis, audire nonumes his
              an. Decore tamquam insolens usu, an.
            </p>
            <div class="heading-3 price">₦199.00/mo</div>
            <router-link
              data-nav
              class="button button-lg button-primary"
              :to="{name:'site.account.create'}"
            >
              Order a
              Card
            </router-link>
          </div>
        </div>
        <div class="col-md-4">
          <div class="price-box-1 price-box-1-primary">
            <div class="media-wrap">
              <img src="/img/pricing-2-202x162.png" alt width="202" height="162" />
            </div>
            <div class="title">Verve</div>
            <p class="exeption">
              Lorem ipsum dolor sit amet, scripta legim us quaerendum ex vis, audire nonumes his
              an. Decore tamquam insolens usu, an.
            </p>
            <div class="heading-3 price">Free</div>
            <router-link
              data-nav
              class="button button-lg button-primary"
              :to="{name:'site.account.create'}"
            >
              Order a
              Card
            </router-link>
          </div>
        </div>
        <div class="col-md-4">
          <div class="price-box-1">
            <div class="media-wrap">
              <img src="/img/pricing-3-202x162.png" alt width="202" height="162" />
            </div>
            <div class="title">VISA</div>
            <p class="exeption">
              Lorem ipsum dolor sit amet, scripta legim us quaerendum ex vis, audire nonumes his
              an. Decore tamquam insolens usu, an.
            </p>
            <div class="heading-3 price">₦199.00/mo</div>
            <router-link
              data-nav
              class="button button-lg button-primary"
              :to="{name:'site.account.create'}"
            >
              Order a
              Card
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "PBAmjuCardsPage",
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
