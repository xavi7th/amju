<template>
  <section class="section section-md">
    <div class="container text-center">
      <h2 class="custom-title">
        <span>Testimonials</span>
      </h2>
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
        <blockquote
          class="quote quote-large"
          v-for="testimonial in testimonials"
          :key="testimonial.id"
        >
          <div class="quote-meta">
            <img class="img-bordered" :src="testimonial.img" alt width="220" height="220" />
          </div>
          <div class="quote-body">
            <div class="author heading-6">
              <cite>{{ testimonial.name }}</cite>
            </div>
            <div class="position">{{ testimonial.city }}, {{ testimonial.country }}</div>
            <q class="heading-5">{{ testimonial.testimonial }}</q>
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
