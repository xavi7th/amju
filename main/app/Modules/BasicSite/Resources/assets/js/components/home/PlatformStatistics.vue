<template>
  <section class="fact-section gradient-bg" id="statistics">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="fact">
            <h2>60</h2>
            <p>
              Support
              <br />Countries
            </p>
            <i class="ti-basketball"></i>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="fact">
            <h2>12K</h2>
            <p>
              Transactions
              <br />per month
            </p>
            <i class="ti-panel"></i>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="fact">
            <h2>5B</h2>
            <p>
              Instant
              <br />Executions
            </p>
            <i class="ti-stats-up"></i>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="fact">
            <h2>7</h2>
            <p>
              Years
              <br />of Experience
            </p>
            <i class="ti-user"></i>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import CONSTANTS from "@assets/js/config";
  export default {
    name: "PlatformStatistics",
    data() {
      return {
        CONSTANTS
      };
    }
  };
</script>
