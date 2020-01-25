<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h3>Overview</h3>
              <p>Amju Unique Micro Finance Bank has a host of other services to serve your needs.</p>
            </li>
            <li>
              <h5>NIBSS Instant Payment (NIP) Transfer</h5>
              <p>
                AMJU Unique MFB is registered with Nigerian Interbank Settlement System
                to enable instant payment to your account using NIP (NIBSS Instant Payment).
                This allows customer to transfer cash from all banks in Nigeria directly to their
                AMJU Unique MFB account and from their AMJU Unique MFB account to all the banks in Nigeria seamlessly.
              </p>
            </li>
            <li>
              <h5>PayDirect Funds Transfer</h5>
              <p>
                AMJU Unique MFB is registered with interswitch Nigeria limited to accept a direct payment into
                their account. With PayDirect customer credit can be made into AMJU customers account
                without paying to AMJU Unique MFB correspondent bank account.
              </p>
            </li>
            <li>
              <h5>AutoPay Funds Transfer</h5>
              <p>
                AMJU Unique MFB AUTOPAY Fund transfer is a transfer service which can be used to
                transfer cash from your AMJU Unique MFB account to any bank in Nigeria.
              </p>
            </li>
          </ul>
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
