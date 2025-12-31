<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
              <p>
                AMJU Unique MFB POS solutions are made to all business customers to reduce the cost of doing
                business while increasing productivity, improving your bottom line and by enabling
                your customers to use different payment types, you can increase revenue as well
                as customer satisfaction.
              </p>
            </li>
            <li>
              <h5>Main Features</h5>
              <ul class="list-marked">
                <li>It reduces credit sales</li>
                <li>Increased Efficiency.</li>
                <li>Ease of Use</li>
                <li>Expanded Payment Capabilities</li>
                <li>Greater Accuracy</li>
                <li>Detailed Receipts</li>
              </ul>
            </li>
            <li>
              <h5>How to Apply</h5>
              <ul class="list-marked">
                <li>Open an individual or corporate current account with AMJU Unique MFB</li>
                <li>Write a letter of POS request with or without your letter head</li>
                <li>Fill AMJU Unique MFB indemnity form completely and submit</li>
                <li>You must have a minimum balance of #30,000 in your account</li>
              </ul>
            </li>
            <li>
              <h5>POS Payment and Settlement</h5>
              <ul class="list-marked">
                <li>POS charges is ₦5 on every ₦1000 (0.005 per transaction)</li>
                <li>COT concession is available to all our merchants</li>
              </ul>
            </li>
          </ul>
          <div class="button-wrap-lg text-center col-12">
            <a
              class="button button-lg button-primary"
              href="/download-pos-form"
              target="_blank"
              data-nav
            >Download POS Application Forms</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "POSServices",
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
