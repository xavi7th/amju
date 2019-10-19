<template>
  <section class="review-section spad" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 push-8">
          <img src="/img/quote.png" alt class="quote mb-5" />
          <div class="review-text-slider owl-carousel">
            <div class="review-text" v-for="testimonial in testimonials" :key="testimonial.id">
              <p>{{ testimonial.testimonial }}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 pr-0 pull-3">
          <div class="review-meta-slider owl-carousel pt-5">
            <div class="author-meta" v-for="testimonial in testimonials" :key="testimonial.id">
              <div class="author-avatar set-bg" :data-setbg="testimonial.img"></div>
              <div class="author-name">
                <h4>{{ testimonial.name }}</h4>
                <p>{{ testimonial.city }}, {{ testimonial.country }}</p>
              </div>
            </div>
          </div>
        </div>
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
