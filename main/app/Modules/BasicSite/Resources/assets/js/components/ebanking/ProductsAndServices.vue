<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>AMJU ALTERNATIVE INCOME FOR WORKERS</h5>
              <p>
                Entrepreneurship is crucial to all economies.
                Transforming the life of workers to an entrepreneur.
                Small business creates job for others.
                Change your income base and stop waiting for salary.
                We set up SME for you while still working
              </p>
            </li>
            <li>
              <h5>NATURE OF BUSINESS</h5>
              <p>
                Set up your factory, manufacturing concerns, trading concerns, distribution business,
                bakery, fish ponds and poultry, agrictural ventures, food processing factories etc.
              </p>
            </li>
            <li>
              <h5>WHO QUALIFIES FOR THIS PRODUCT?</h5>
              <p>Civil servants, private and public workers, salary earners from reputable firms/business,professionals etc</p>
            </li>
            <li>
              <h5>TERMS AND CONDITION FOR QUALIFICATION</h5>
              <ul class="list-marked">
                <li>Salary Domiciliation</li>
                <li>Open account with minimum of #5000</li>
                <li>Minimum of 3months account operation</li>
                <li>Present a feasibility study/business plan</li>
              </ul>
            </li>
            <li>
              <h5>SOME OTHER BENEFITS ARE:</h5>
              <ul class="list-marked">
                <li>Salary advance for all classes of workers</li>
                <li>Farmers support, Scheme youth &amp; women</li>
                <li>Empowerment program, Trade working capital finance</li>
                <li>Private school financing</li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4">
          <div class="box-wrap-gray">
            <div class="thumbnail-1">
              <div class="media-wrap">
                <img src="/img/classic-blog-4-770x456.jpg" alt width="270" height="270" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "ProductsAndServices",
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
