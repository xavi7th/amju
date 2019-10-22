<template>
  <section class="section">
    <div class="row row-flex no-gutters">
      <div class="col-md-6 col-lg-7">
        <div
          class="google-map-container google-map-align"
          data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
          data-zoom="14"
          data-icon="img/gmap_marker_2.png"
          data-icon-active="img/gmap_marker_active_2.png"
          data-styles="[{&quot;featureType&quot;: &quot;all&quot;,&quot;elementType&quot;: &quot;labels.text.fill&quot;,&quot;stylers&quot;: [{&quot;saturation&quot;: 36},{&quot;color&quot;: &quot;#333333&quot;},{&quot;lightness&quot;: 40}]},{&quot;featureType&quot;: &quot;all&quot;,&quot;elementType&quot;: &quot;labels.text.stroke&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;on&quot;},{&quot;color&quot;: &quot;#ffffff&quot;},{&quot;lightness&quot;: 16}]},{&quot;featureType&quot;: &quot;all&quot;,&quot;elementType&quot;: &quot;labels.icon&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]},{&quot;featureType&quot;: &quot;administrative&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#fefefe&quot;},{&quot;lightness&quot;: 20}]},{&quot;featureType&quot;: &quot;administrative&quot;,&quot;elementType&quot;: &quot;geometry.stroke&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#fefefe&quot;},{&quot;lightness&quot;: 17},{&quot;weight&quot;: 1.2}]},{&quot;featureType&quot;: &quot;landscape&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#f5f5f5&quot;},{&quot;lightness&quot;: 20}]},{&quot;featureType&quot;: &quot;landscape&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#d5d5d5&quot;}]},{&quot;featureType&quot;: &quot;landscape.man_made&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#7574c0&quot;},{&quot;saturation&quot;: &quot;-37&quot;},{&quot;lightness&quot;: &quot;75&quot;}]},{&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#f5f5f5&quot;},{&quot;lightness&quot;: 21}]},{&quot;featureType&quot;: &quot;poi.business&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#7574c0&quot;},{&quot;saturation&quot;: &quot;-2&quot;},{&quot;lightness&quot;: &quot;53&quot;}]},{&quot;featureType&quot;: &quot;poi.park&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#dedede&quot;},{&quot;lightness&quot;: 21}]},{&quot;featureType&quot;: &quot;poi.park&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#7574c0&quot;},{&quot;lightness&quot;: &quot;69&quot;}]},{&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;geometry.fill&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#7574c0&quot;},{&quot;lightness&quot;: &quot;25&quot;}]},{&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;geometry.stroke&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#ffffff&quot;},{&quot;lightness&quot;: 29},{&quot;weight&quot;: 0.2}]},{&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;labels.text.fill&quot;,&quot;stylers&quot;: [{&quot;lightness&quot;: &quot;38&quot;},{&quot;color&quot;: &quot;#000000&quot;}]},{&quot;featureType&quot;: &quot;road.arterial&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#ffffff&quot;},{&quot;lightness&quot;: 18}]},{&quot;featureType&quot;: &quot;road.local&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#ffffff&quot;},{&quot;lightness&quot;: 16}]},{&quot;featureType&quot;: &quot;transit&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#f2f2f2&quot;},{&quot;lightness&quot;: 19}]},{&quot;featureType&quot;: &quot;water&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;color&quot;: &quot;#e9e9e9&quot;},{&quot;lightness&quot;: 17}]}]"
        >
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li
              data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
              data-description="9870 St Vincent Place, Glasgow"
            ></li>
          </ul>
        </div>
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
                      2130 Fulton Street,
                      <br class="veil reveal-lg-inline" />San Diego, CA 94117-1080 USA
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
                        <a class="hover-light-text" href="tel:#">1-800-1234-567</a>
                      </li>
                      <li>
                        <a class="hover-light-text" href="tel:#">1-800-1234-567</a>
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
                    <a class="hover-light-text" href="/cdn-cgi/l/email-protection#0d2e">
                      <span
                        class="__cf_email__"
                        data-cfemail="a3cacdc5cce3c7c6cecccfcacdc88dccd1c4"
                      >[email&#160;protected]</span>
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
