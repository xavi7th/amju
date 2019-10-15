<template>
  <section class="newsletter-section">
    <div class="container text-white">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 newsletter-text">
          <div id="chart4"></div>
        </div>
        <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
          <div id="chart1"></div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import { testimonialChart, tokensChart3 } from "@assets/js/config/endpoints";
  export default {
    name: "FinalChartsSection",
    created() {
      this.$emit("charts-loaded");
      axios.get(testimonialChart).then(rsp => {
        /**
         *? Convert string to DOM Nodes
         */
        let frag = document
          .createRange()
          .createContextualFragment(rsp.data.template);
        document.querySelector("#chart1").replaceWith(frag);
      });

      axios.get(tokensChart3).then(rsp => {
        /**
         *? Convert string to DOM Nodes
         */
        let frag = document
          .createRange()
          .createContextualFragment(rsp.data.template);
        document.querySelector("#chart4").replaceWith(frag);
      });
    }
  };
</script>
