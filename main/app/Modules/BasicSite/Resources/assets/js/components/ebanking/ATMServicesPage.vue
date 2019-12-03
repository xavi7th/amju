<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
              <p>
                Amju Bank has deployed a large network of ATMs in all our branches,
                to offer our customers painless, quick and convenient access to their funds 24/7 every day.
              </p>
            </li>
            <li>
              <h5>Main Features</h5>
              <ul class="list-marked">
                <li>Bills Payments i.e. PHCN bills, Cable TV bills</li>
                <li>Airtime Recharge</li>
                <li>Funds Transfer</li>
                <li>Cash Withdrawal</li>
                <li>Balance Enquiry</li>
                <li>PIN Change</li>
                <li>Request a mini statement</li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4">
          <div class="box-wrap-gray">
            <div class="thumbnail-1">
              <div class="media-wrap">
                <img src="/img/atm.jpeg" alt width="270" height="270" />
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
    name: "ATMServices",
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
