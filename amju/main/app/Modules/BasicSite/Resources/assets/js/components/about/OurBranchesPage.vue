<template>
  <section class="section section-lg bg-default">
    <div class="container">
      <div class="row row-50 justify-content-between">
        <div class="col-md-6">
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
            <ul class="nav nav-tabs">
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link active"
                  href="#tab-airport-road"
                  data-toggle="tab"
                  @click="selected = 'Airport'"
                >Airport Road</a>
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  href="#tab-warri"
                  data-toggle="tab"
                  @click="selected = 'SapeleRd'"
                >Warri-Sapele Road</a>
              </li>

              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  href="#tab-asaba"
                  data-toggle="tab"
                  @click="selected = 'Asaba'"
                >Asaba</a>
              </li>

              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  href="#tab-ughelli"
                  data-toggle="tab"
                  @click="selected = 'Ughelli'"
                >Ughelli</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#tab-eku" data-toggle="tab" @click="selected = 'Eku'">Eku</a>
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  href="#tab-kurutie"
                  data-toggle="tab"
                  @click="selected = 'Kurutie'"
                >Kurutie</a>
              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab-airport-road">
                <ul class="contact-box">
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-map-marker"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="#">
                          71, Airport Road, by St Mary’s Junction,
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
                            <a
                              class="hover-light-text"
                              href="tel:+234 905 395 9936"
                            >+234 905 395 9936</a>
                          </li>
                          <!-- <li>
														<a class="hover-light-text" href="tel:+234 804 567 8996">+234 804 567 8996</a>
                          </li>-->
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-email-outline"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="mailto:amju.unique@amjuuniquemfbng.com">
                          <span>amju.unique@amjuuniquemfbng.com</span>
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="tab-warri">
                <ul class="contact-box">
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-map-marker"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="#">
                          71, Warri-Sapele road, opposite Sacred Heart Cathedral,
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
                            <a
                              class="hover-light-text"
                              href="tel:+234 905 395 9937"
                            >+234 905 395 9937</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-email-outline"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="mailto:amju.unique@amjuuniquemfbng.com">
                          <span>amju.unique@amjuuniquemfbng.com</span>
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="tab-pane fade" id="tab-asaba">
                <ul class="contact-box">
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-map-marker"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="#">
                          C134 Nnebisi Road, by Ogbogonogo Market,
                          <br class="veil reveal-lg-inline" />Asaba, Delta State
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
                            <a
                              class="hover-light-text"
                              href="tel:+234 905 395 9946"
                            >+234 905 395 9946</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-email-outline"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="mailto:amju.unique@amjuuniquemfbng.com">
                          <span>amju.unique@amjuuniquemfbng.com</span>
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="tab-pane fade" id="tab-ughelli">
                <ul class="contact-box">
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-map-marker"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="#">
                          42,Isoko Road,
                          <br class="veil reveal-lg-inline" />Ughelli, Delta State
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
                            <a
                              class="hover-light-text"
                              href="tel:+234 905 396 0978"
                            >+234 905 396 0978</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-email-outline"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="mailto:amju.unique@amjuuniquemfbng.com">
                          <span>amju.unique@amjuuniquemfbng.com</span>
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="tab-eku">
                <ul class="contact-box">
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-map-marker"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="#">
                          Eku junction, opposite Samajigi road,
                          <br class="veil reveal-lg-inline" />Abraka road, Delta State
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
                            <a
                              class="hover-light-text"
                              href="tel:+234 905 396 0989"
                            >+234 905 396 0989</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-email-outline"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="mailto:amju.unique@amjuuniquemfbng.com">
                          <span>amju.unique@amjuuniquemfbng.com</span>
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="tab-kurutie">
                <ul class="contact-box">
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-map-marker"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="#">
                          Nigeria Maritime University, Kurutie,
                          <br class="veil reveal-lg-inline" />Warri South west, Delta state
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
                            <a
                              class="hover-light-text"
                              href="tel:+234 815 089 7273"
                            >+234 815 089 7273</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <span class="icon mdi mdi-email-outline"></span>
                      </div>
                      <div class="unit-body">
                        <a class="hover-light-text" href="mailto:amju.unique@amjuuniquemfbng.com">
                          <span>amju.unique@amjuuniquemfbng.com</span>
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.154780971543!2d5.754702615089216!3d5.544054795980231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e26e4dd27ca20e2!2sAmju%20Unique%20micro%20finance%20bank!5e0!3m2!1sen!2sng!4v1571909792620!5m2!1sen!2sng"
            height="450"
            frameborder="0"
            style="border:0; width:100%"
            allowfullscreen
            v-show="selected == 'Airport'"
          ></iframe>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.154780971543!2d5.754702615089216!3d5.544054795980231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e26e4dd27ca20e2!2sAmju%20Unique%20micro%20finance%20bank!5e0!3m2!1sen!2sng!4v1571909792620!5m2!1sen!2sng"
            height="450"
            frameborder="0"
            style="border:0; width:100%"
            allowfullscreen
            v-show="selected == 'Eku'"
          ></iframe>

          <iframe
            v-show="selected == 'Asaba'"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.90150934108848!2d6.7148936538565405!3d6.207651587304175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1043f3ebba72f873%3A0x60e16f9bece38d47!2sOgbeogonogo%20market!5e0!3m2!1sen!2sng!4v1579575613729!5m2!1sen!2sng"
            width="600"
            height="450"
            frameborder="0"
            style="border:0; width:100%"
            allowfullscreen
          ></iframe>

          <iframe
            v-show="selected == 'Ughelli'"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.5008523617016!2d5.996730815218012!3d5.492373796017202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041bd93005ad1fd%3A0x34589e360e0664bb!2sAMJU%20UNIQUE%20MICOFINANCE%20BANK!5e0!3m2!1sen!2sng!4v1579575734349!5m2!1sen!2sng"
            width="600"
            height="450"
            frameborder="0"
            style="border:0; width:100%"
            allowfullscreen
          ></iframe>

          <iframe
            v-show="selected == 'SapeleRd'"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.3563635160162!2d5.742434315279221!3d5.514009935602442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041b2b8bdcd1f9d%3A0x34af8227fa32ff08!2sAmju%20Unique%20Microfinance%20Bank!5e0!3m2!1sen!2sng!4v1575305844357!5m2!1sen!2sng"
            width="600"
            height="450"
            frameborder="0"
            style="border:0; width:100%"
            allowfullscreen
          ></iframe>

          <iframe
            v-show="selected == 'Kurutie'"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62312.17411767074!2d5.326162734634941!3d5.61716216336818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10405de2f87b7815%3A0x3e47fb4d1bd19b22!2sNigeria%20Maritime%20University!5e0!3m2!1sen!2sng!4v1579574621398!5m2!1sen!2sng"
            width="600"
            height="450"
            frameborder="0"
            style="border:0; width:100%"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "OurBranchesPage",
    data: () => ({
      selected: "Airport"
    }),
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      // this.$unloadScript("/js/main.js");
      this.$emit("unload-main");
    }
  };
</script>

<style lang="scss" scoped>
</style>
