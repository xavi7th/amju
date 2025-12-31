<template>
  <section class="section">
    <div class="row row-flex no-gutters">
      <div class="col-md-6 col-lg-7">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.154780971543!2d5.754702615089216!3d5.544054795980231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e26e4dd27ca20e2!2sAmju%20Unique%20micro%20finance%20bank!5e0!3m2!1sen!2sng!4v1571909792620!5m2!1sen!2sng"
          height="450"
          frameborder="0"
          style="border:0; width:100%"
          allowfullscreen
        ></iframe>
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="section-lg">
          <div class="container-custom">
            <h5>Contact Information</h5>
            <ul class="contact-box">
              <li>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit-left">
                    <span class="icon mdi mdi-map-marker"></span>
                  </div>
                  <div class="unit-body">
                    <a class="hover-light-text" href="#">
                      71, Airport Road
                      <br class="veil reveal-lg-inline" />Warri, Delta State
                    </a>
                  </div>
                </div>
              </li>
              <li>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit-left">
                    <span class="icon mdi mdi-phone"></span>
                  </div>
                  <div class="unit-body">
                    <ul class="list-phones">
                      <li>
                        <a class="hover-light-text" href="tel:+234 804 567 8996">+234 804 567 8996</a>
                      </li>
                      <li>
                        <a class="hover-light-text" href="tel:+234 805 624 9328">+234 805 624 9328</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit-left">
                    <span class="icon mdi mdi-email"></span>
                  </div>
                  <div class="unit-body">
                    <a class="hover-light-text" href="mailto:amju.unique@amjuuniquemfbng.com">
                      <span>amju.unique@amjuuniquemfbng.com</span>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
            <div class="group-md group-middle social-items">
              <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook" href="#"></a>
              <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-twitter" href="#"></a>
              <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-instagram" href="#"></a>
              <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook-messenger" href="#"></a>
              <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-linkedin" href="#"></a>
              <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-snapchat" href="#"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "ContactUs",
    created() {
      this.$emit("contact-loaded");
    }
  };
</script>
