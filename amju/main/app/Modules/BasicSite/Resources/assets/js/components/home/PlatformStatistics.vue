<template>
  <section class="section section-md bg-primary-dark">
    <div class="container">
      <div class="row row-fix justify-content-center text-center">
        <div class="col-md-10 col-xl-7">
          <h2 class="custom-title">
            <span>Latest Statistical Information</span>
          </h2>
          <p>
            Our Bank regularly compiles and publishes a range of monetary and financial statistics. These include
            domestic banking statistics, external finance statistics, and international banking statistics.
          </p>
        </div>
      </div>
      <div class="row row-40 justify-content-between">
        <div class="col-lg-4">
          <!-- gradient blocks-->
          <!-- gradient primary-->
          <svg class="svg-hidden">
            <!-- gradient-->
            <lineargradient id="linear-gradient-primary" x1="50%" y1="30%" x2="50%" y2="100%">
              <stop offset="0%" stop-color="#a371f7" />
              <stop offset="100%" stop-color="#fff" />
            </lineargradient>
          </svg>
          <!-- gradient secondary-->
          <svg class="svg-hidden">
            <!-- gradient-->
            <lineargradient id="linear-gradient-secondary" x1="50%" y1="30%" x2="50%" y2="100%">
              <stop offset="0%" stop-color="#a371f7" />
              <stop offset="100%" stop-color="#130c37" />
            </lineargradient>
          </svg>
          <div class="d3-chart" id="spline-chart" style="width:100%; margin: 0 auto"></div>
          <p>With the development of online banking, our number of customers increased up to 6 million worldwide.</p>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 text-center">
          <div class="row row-30 row-xxl-40 row-fix">
            <div class="col-6">
              <div
                class="progress-bar-circle"
                data-value="0.25"
                data-gradient="#36f1f8"
                data-empty-fill="#7b59d0"
                data-size="100"
                data-thickness="2"
              >
                <span></span>
              </div>
              <p class="progress-bar-circle-title">Economy</p>
            </div>
            <div class="col-6">
              <div
                class="progress-bar-circle"
                data-value="0.50"
                data-gradient="#36f1f8"
                data-empty-fill="#7b59d0"
                data-size="100"
                data-thickness="2"
              >
                <span></span>
              </div>
              <p class="progress-bar-circle-title">Cashback</p>
            </div>
            <div class="col-6">
              <div
                class="progress-bar-circle"
                data-value="0.75"
                data-gradient="#36f1f8"
                data-empty-fill="#7b59d0"
                data-size="100"
                data-thickness="2"
              >
                <span></span>
              </div>
              <p class="progress-bar-circle-title">Stability</p>
            </div>
            <div class="col-6">
              <div
                class="progress-bar-circle"
                data-value="1"
                data-gradient="#36f1f8"
                data-empty-fill="#7b59d0"
                data-size="100"
                data-thickness="2"
              >
                <span></span>
              </div>
              <p class="progress-bar-circle-title">Guarantee</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <p class="text-gray-600">
            Our financial services deeply rely on certain banking procedures that have been
            perfected over the years and helped us get prestigious awards.
          </p>
          <div class="progress-linear-wrap">
            <!-- Linear progress bar-->
            <article class="progress-linear">
              <div class="progress-header">
                <p>Financial Consulting</p>
                <span class="progress-value">75</span>
              </div>
              <div class="progress-bar-linear-wrap">
                <div class="progress-bar-linear"></div>
              </div>
            </article>
            <!-- Linear progress bar-->
            <article class="progress-linear">
              <div class="progress-header">
                <p>Online Reporting</p>
                <span class="progress-value">50</span>
              </div>
              <div class="progress-bar-linear-wrap">
                <div class="progress-bar-linear"></div>
              </div>
            </article>
            <!-- Linear progress bar-->
            <article class="progress-linear">
              <div class="progress-header">
                <p>Online Banking</p>
                <span class="progress-value">80</span>
              </div>
              <div class="progress-bar-linear-wrap">
                <div class="progress-bar-linear"></div>
              </div>
            </article>
            <!-- Linear progress bar-->
            <article class="progress-linear">
              <div class="progress-header">
                <p>24/7 Support</p>
                <span class="progress-value">75</span>
              </div>
              <div class="progress-bar-linear-wrap">
                <div class="progress-bar-linear"></div>
              </div>
            </article>
          </div>
        </div>
      </div>
      <div class="button-wrap-lg text-center">
        <a class="button button-lg button-primary" href="#">
          View All
          Statistics
        </a>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "PlatformStatistics"
  };
</script>
