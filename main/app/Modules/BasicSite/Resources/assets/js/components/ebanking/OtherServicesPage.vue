<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h3>Overview</h3>
              <p>Amju Unique Micro Finance Bank has a host of other servvices to serve your needs.</p>
            </li>
            <li>
              <h5>NIBSS Instant Payment (NIP) Transfer</h5>
              <p>
                AMJU bank is registered with Nigerian Interbank Settlement System
                to enable instant payment to your account using NIP (Nigeria Instant Payment).
                This allows customer to transfer cash from all banks in Nigeria directly to their
                AMJU account and from their AMJU account to all the banks in Nigeria seamlessly.
              </p>
            </li>
            <li>
              <h5>PayDirect Funds Transfer</h5>
              <p>
                AMJU bank is registered with interswitch Nigeria limited to accept a direct payment into
                their account. With PayDirect customer credit can be made into AMJU customers account
                without paying to AMJU correspondent bank account.
              </p>
            </li>
            <li>
              <h5>AutoPay Funds Transfer</h5>
              <p>
                AMJU bank AUTOPAY Fund transfer is a transfer service which can be used to
                transfer cash from your AMJU bank account to any bank in Nigeria.
              </p>
            </li>
          </ul>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4">
          <div class="box-wrap-gray">
            <div class="thumbnail-1">
              <div class="media-wrap">
                <img src="/img/cash-count.jpeg" alt width="270" height="270" />
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
    name: "OtherServices",
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
