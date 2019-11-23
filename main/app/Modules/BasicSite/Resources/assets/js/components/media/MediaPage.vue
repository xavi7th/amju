<template>
  <div v-if="isBasePage">
    <section class="section section-lg">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-10">
            <h2>Keep up to date</h2>
            <div class="heading-6 block-lg">
              We are always tirelessly working, both for the good of the community in which we find ourselcves and for the corporate
              welfare of every stakeholder in our organisation, from the staff to the shareholders and even to you our customer.
              Keep up to date with the going-ons at Amju Unique Micro Finance Bank here.
            </div>
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
              <img src="/img/index-1-2-570x352.jpg" alt width="540" height="327" />
            </div>
            <div class="col-md-6">
              <h3 class="title">News</h3>
              <p class="exeption">We go round the ...</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.media.news'}"
              >Read News Articles</router-link>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <img src="/img/amju-ceo.jpg" alt width="540" height="327" />
            </div>
            <div class="col-md-6">
              <h3 class="title">Amju Gallery</h3>
              <p
                class="exeption"
              >Amju Unique Micro Finance Bank in pictures. View our activitiies carried out ...</p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.media.gallery'}"
              >View Gallery</router-link>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <img src="/img/2-girls.jpg" alt width="540" height="327" />
            </div>
            <div class="col-md-6">
              <h3 class="title">Video</h3>
              <p class="exeption">
                Don’t let money stop you from pursuing your dreams.
                <br />If you want to start your own business but don’t have the funding, you can still get it off the ground with our start-up
                investment / partnership program. Find out how Amju Unique Micro Finance Bank is transforming the Nigerian economic landscape
                with our innovate programs and banking solutions. You too can be a beneficiary as we seek to make Nigeria a fulfilling climate for
                the smallest of investors.
              </p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.media.videos'}"
              >Watch Videos</router-link>
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
    name: "MediaSummaryPage",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    },
    computed: {
      isBasePage() {
        return this.$route.name === "site.media";
      }
    }
  };
</script>

<style lang="scss" scoped>
</style>
