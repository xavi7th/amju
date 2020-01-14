<template>
  <div v-if="isBasePage">
    <section class="section section-lg">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-10">
            <h2>AMJU CURRENT ACCOUNTS</h2>
            <div
              class="heading-6 block-lg"
            >We are right here to fund that great dream of yours in a way that you may never imagine.</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services-->
    <section class="section section-lg bg-gray-100">
      <div class="container">
        <div class="service-list">
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/current-account.jpg" data-enlarge="300" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">AMJU PLATINUM (CURRENT ACCOUNT)</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank platinum current account is good for students</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.sme.platinum'}"
              >Read More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <h3 class="title">AMJU CURRENT/CORPORATE ACCOUNT</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank current/corporate account is good for parents who are saving for their children's education</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.sme.corporate'}"
              >Read More</router-link>
            </div>
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/account.jpg" data-enlarge="300" />
              </div>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/overdraft.jpg" data-enlarge="300" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">AMJU OVERDRAFT ACCOUNT(TELECOM)</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank overdraft current account is good for market women who want to save.</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.sme.overdraft'}"
              >Read More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <h3 class="title">AMJU DIVINE ACCOUNT(CHURCHES)</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank Divine current account is good for those who want to save for marriage.</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.sme.divine'}"
              >Read More</router-link>
            </div>
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/church-account.jpg" data-enlarge="300" />
              </div>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/cooperative.jpg" data-enlarge="300" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">AMJU COOPERATIVE ACCOUNT</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank cooperative account is good for those who want to save for christmas.</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.sme.cooperative'}"
              >Read More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <h3 class="title">AMJU GROUP LEADING ACCOUNT</h3>
              <p class="exeption">
                Amju Unique Micro Finance Bank Flexy savings account is good For existing cooperatives societies Town union and group Trade union
                and associate Others are: Garri Sellers, Fish Sellers, Yam Seller, Pepper Seller, Tomatoes Sellers, Vegetable Sellers, and
                Plantain Seller etc.
              </p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.sme.groupleading'}"
              >Read More</router-link>
            </div>
            <div class="col-md-6">
              <div class="bkg-img">
                <img src="/img/savings.jpg" data-enlarge="300" />
              </div>
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
    name: "SMESummaryPage",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    },
    computed: {
      isBasePage() {
        return this.$route.name === "site.sme";
      }
    }
  };
</script>

<style lang="scss" scoped>
</style>
