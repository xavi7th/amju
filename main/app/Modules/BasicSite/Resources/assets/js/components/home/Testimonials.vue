<template>
  <section class="section section-md">
    <div class="container text-center">
      <h2 class="custom-title">
        <span>Testimonials</span>
      </h2>
      <!-- Owl Carousel-->
      <div
        class="owl-carousel owl-carousel-1"
        data-items="1"
        data-dots="true"
        data-nav="true"
        data-md-stage-padding="0"
        data-loop="true"
        data-margin="30"
        data-mouse-drag="false"
        data-autoplay="true"
      >
        <blockquote class="quote quote-large">
          <div class="quote-meta">
            <img class="img-bordered" src="img/index-1-3-220x220.jpg" alt width="220" height="220" />
          </div>
          <div class="quote-body">
            <div class="author heading-6">
              <cite>Mildred Bates</cite>
            </div>
            <div class="position">Jewelry Shop Owner</div>
            <q class="heading-5">
              When I needed financial assistance to expand my shop, I went directly to Amju Unique Micro Finance Bank.
              Securing financing helped us renovate and expand my jewelry shop and attract more clients.
            </q>
          </div>
        </blockquote>
        <blockquote class="quote quote-large">
          <div class="quote-meta">
            <img class="img-bordered" src="img/index-1-4-220x220.jpg" alt width="220" height="220" />
          </div>
          <div class="quote-body">
            <div class="author heading-6">
              <cite>Marie Hanson</cite>
            </div>
            <div class="position">Charity Organization Manager</div>
            <q class="heading-5">
              I chose Amju Unique Micro Finance Bank because I know they share my values of putting community first. Not
              only do they make banking easy, I see them out volunteering and investing in our community.
            </q>
          </div>
        </blockquote>
        <blockquote class="quote quote-large">
          <div class="quote-meta">
            <img class="img-bordered" src="img/index-1-5-220x220.jpg" alt width="220" height="220" />
          </div>
          <div class="quote-body">
            <div class="author heading-6">
              <cite>Ann Smith</cite>
            </div>
            <div class="position">International Company Owner</div>
            <q class="heading-5">
              Finding Amju Unique Micro Finance Bank, a reliable bank with the international reputation and specialized
              lending programs allowed me to finance my business and open a new office in Warri. Thank you!
            </q>
          </div>
        </blockquote>
      </div>
    </div>
  </section>
</template>

<script>
  import { siteTestimonials } from "@assets/js/config";
  export default {
    data: () => ({
      testimonials: {}
    }),
    created() {
      axios.get(siteTestimonials).then(rsp => {
        this.testimonials = rsp.data;
      });
    }
  };
</script>
