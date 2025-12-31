<template>
  <section class="section section-lg bg-gray-100">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-12 col-xl-10">
          <h2>An account for everyone</h2>
          <div
            class="heading-6 block-lg"
          >We have different account types for your various needs. Be it personal business or private needs we've got you covered.</div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div
        class="owl-carousel"
        data-items="1"
        data-sm-items="2"
        data-lg-items="3"
        data-xl-items="3"
        data-dots="true"
        data-nav="false"
        data-stage-padding="15"
        data-loop="false"
        data-margin="30"
        data-mouse-drag="false"
      >
        <div class="price-box-2">
          <div class="media-wrap">
            <img src="/img/pricing-6-163x127.png" alt width="163" height="127" />
          </div>
          <div class="title">Flexy</div>
          <div class="heading-3 price">₦5,000.00</div>
          <ul class="list-sm">
            <li>Free Card</li>
            <li>Free Online Banking</li>
            <li>24/7 Online Support</li>
            <li>No minimum balance requirement</li>
            <hr class="my-3" />
            <h5>Requirements</h5>
            <li>2 completed reference forms</li>
            <li>2 passport photographs</li>
            <li>Valid ID card</li>
            <li>Utility bill</li>
            <li>BVN</li>
          </ul>
          <router-link
            class="button button-sm button-primary"
            :to="{name:'site.account.create'}"
            data-nav
          >Open an account</router-link>
        </div>
        <div class="price-box-2">
          <div class="media-wrap">
            <img src="/img/pricing-4-163x127.png" alt width="163" height="127" />
          </div>
          <div class="title">Current</div>
          <div class="heading-3 price">₦5,000.00</div>
          <ul class="list-sm">
            <li>Free Card</li>
            <li>Free Online Banking</li>
            <li>24/7 Online Support</li>
            <li>No minimum balance requirement</li>
            <hr class="my-3" />
            <h5>Requirements</h5>
            <li>2 completed reference forms</li>
            <li>2 passport photographs</li>
            <li>Valid ID card</li>
            <li>Utility bill</li>
            <li>BVN</li>
          </ul>
          <router-link
            class="button button-sm button-primary"
            :to="{name:'site.account.create'}"
            data-nav
          >Open an account</router-link>
        </div>
        <div class="price-box-2">
          <div class="media-wrap">
            <img src="/img/pricing-5-163x127.png" alt width="163" height="127" />
          </div>
          <div class="title">Corporate</div>
          <div class="heading-3 price">₦10,000.00</div>
          <ul class="list-sm">
            <li>Free Card</li>
            <li>Free Online Banking</li>
            <li>24/7 Online Support</li>
            <li>No minimum balance requirement</li>
            <hr class="my-3" />
            <h5>Requirements</h5>
            <li>
              All requirements of
              <i>current account</i>
            </li>
            <li>Application letter with company seal</li>
            <li>Memorandum of association</li>
            <li>Form CO2 &amp; CO7</li>
            <li>Board resolution</li>
          </ul>
          <router-link
            class="button button-sm button-primary"
            :to="{name:'site.account.create'}"
            data-nav
          >Open an account</router-link>
        </div>

        <div class="price-box-2">
          <div class="media-wrap">
            <img src="/img/pricing-7-163x127.png" alt width="163" height="127" />
          </div>
          <div class="title">Associations</div>
          <div class="heading-3 price">₦5,000.00</div>
          <ul class="list-sm">
            <li>Free Card</li>
            <li>Free Online Banking</li>
            <li>24/7 Online Support</li>
            <li>No minimum balance requirement</li>
            <hr class="my-3" />
            <h5>Requirements</h5>
            <li>
              All requirements of
              <i>current account</i>
            </li>
            <li>Certificate of registeration</li>
            <li>Constitution or bye-laws</li>
            <li>Application letter</li>
            <li>Board resolution</li>
          </ul>
          <router-link
            class="button button-sm button-primary"
            :to="{name:'site.account.create'}"
            data-nav
          >Open an account</router-link>
        </div>
        <div class="price-box-2">
          <div class="media-wrap">
            <img src="/img/pricing-7-163x127.png" alt width="163" height="127" />
          </div>
          <div class="title">Clubs</div>
          <div class="heading-3 price">₦5,000.00</div>
          <ul class="list-sm">
            <li>Free Card</li>
            <li>Free Online Banking</li>
            <li>24/7 Online Support</li>
            <li>No minimum balance requirement</li>
            <hr class="my-3" />
            <h5>Requirements</h5>
            <li>
              All requirements of
              <i>current account</i>
            </li>
            <li>Certificate of registeration</li>
            <li>Constitution or bye-laws</li>
            <li>Application letter</li>
            <li>Board resolution</li>
          </ul>
          <router-link
            class="button button-sm button-primary"
            :to="{name:'site.account.create'}"
            data-nav
          >Open an account</router-link>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "PBAmjuAccountPage",
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
