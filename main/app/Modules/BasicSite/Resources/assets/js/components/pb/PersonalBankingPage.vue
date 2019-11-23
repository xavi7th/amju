<template>
  <div v-if="isBasePage">
    <section class="section section-lg">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-10">
            <h2>AMJU SAVINGS ACCOUNT</h2>
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
                <img data-enlarge="300" src="/img/amju-happy-customer.jpg" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">AMJU FLEXI SAVINGS ACCOUNT</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank flexi savings account is good for students</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.pb.flexi'}"
              >Read More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <h3 class="title">AMJU EDUSAVE SAVINGS ACCOUNT</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank flexi savings account is good for parents who are saving for their children's education</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.pb.edusave'}"
              >Read More</router-link>
            </div>
            <div class="col-md-6">
              <div class="bkg-img">
                <img data-enlarge="300" src="/img/savings-1.jpg" />
              </div>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <div class="bkg-img">
                <img data-enlarge="300" src="/img/save.jpg" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">AMJU THRIFT SAVINGS ACCOUNT</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank flexi savings account is good for market women who want to save.</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.pb.thrift'}"
              >Read More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <h3 class="title">AMJU MARRAIGE SAVINGS ACCOUNT</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank flexi savings account is good for those who want to save for marriage.</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.pb.marriage'}"
              >Read More</router-link>
            </div>
            <div class="col-md-6">
              <div class="bkg-img">
                <img data-enlarge="300" src="/img/marriage.jpeg" />
              </div>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <div class="bkg-img">
                <img data-enlarge="300" src="/img/christmas.jpg" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">AMJU CHRISTMAS SAVINGS ACCOUNT</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank flexi savings account is good for those who want to save for christmas.</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.pb.marriage'}"
              >Read More</router-link>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <h3 class="title">ESUSU SAVINGS ACCOUNT</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank esusu savings account is good for those who want to save for enterpreneurs.</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.pb.esusu'}"
              >Read More</router-link>
            </div>
            <div class="col-md-6">
              <div class="bkg-img">
                <img data-enlarge="300" src="/img/Esusu.jpg" />
              </div>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <div class="bkg-img">
                <img data-enlarge="300" src="/img/entrepreneur.jpg" />
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="title">AMJU ENTERPRENUER SAVINGS ACCOUNT</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank flexi savings account is good for those who want to save for enterpreneurs.</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.pb.entrepreneur'}"
              >Read More</router-link>
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
    name: "PersonalBankingSummaryPage",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    },
    computed: {
      isBasePage() {
        return this.$route.name === "site.pb";
      }
    }
  };
</script>

<style lang="scss" scoped>
</style>
