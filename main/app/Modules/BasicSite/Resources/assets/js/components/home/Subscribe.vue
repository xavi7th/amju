<template>
  <!-- Subscribe to Our Newsletter-->
  <section class="section section-sm bg-primary-gradient context-dark text-center">
    <div class="container">
      <div class="row row-20 justify-content-md-center">
        <div class="col-md-9 col-lg-6 col-xxl-7">
          <h3>
            Subscribe for
            <span class="font-weight-bold">News and Updates</span>
          </h3>
        </div>
        <div class="col-md-8 col-lg-5 col-xxl-4">
          <!-- RD Mailform-->
          <form
            class="rd-form rd-mailform rd-form-inline-2"
            data-form-output="form-output-global"
            data-form-type="subscribe"
            method="post"
            action="bat/rd-mailform.php"
          >
            <div class="form-wrap">
              <input
                class="form-input"
                id="subscribe-form-0-email"
                type="email"
                name="email"
                data-constraints="@Email @Required"
              />
              <label class="form-label" for="subscribe-form-0-email">Enter your e-mail</label>
            </div>
            <button class="form-icon-button mdi mdi-email-outline" type="submit"></button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "SubscribeToNewsletterSection",
    created() {
      this.$emit("subscribe-loaded");
    }
  };
</script>
