<template>
  <section class="section section-lg bg-default">
    <div class="container">
      <div class="row row-50 justify-content-between">
        <div class="col-md-5">
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
            <!-- Nav tabs-->
            <ul class="nav nav-tabs">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" href="#tabs-1-1" data-toggle="tab" @click="selected = 'Airport'">Airport Road</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#tabs-1-2" data-toggle="tab" @click="selected = 'Eku'">Eku</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#tabs-1-3" data-toggle="tab" @click="selected = 'Asaba'">Asaba</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#tabs-1-4" data-toggle="tab" @click="selected = 'SapeleRd'">Warri-Sapele Road</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#tabs-1-5" data-toggle="tab" @click="selected = 'Ughelli'">Ughelli</a>
              </li>
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-1-1">
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
              <div class="tab-pane fade" id="tabs-1-2">
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
              <div class="tab-pane fade" id="tabs-1-3">
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
              <div class="tab-pane fade" id="tabs-1-4">
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
              <div class="tab-pane fade" id="tabs-1-5">
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
        <div class="col-md-7">
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
        <iframe v-show="selected == 'Asaba'" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.3563635160162!2d5.742434315279221!3d5.514009935602442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041b2b8bdcd1f9d%3A0x34af8227fa32ff08!2sAmju%20Unique%20Microfinance%20Bank!5e0!3m2!1sen!2sng!4v1575305844357!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0; width:100%" allowfullscreen=""></iframe>

        <iframe v-show="selected == 'Ughelli'" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.5108256369103!2d5.999542715279191!3d5.490877235826706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041bd93005ad1fd%3A0x34589e360e0664bb!2sAMJU%20UNIQUE%20MICOFINANCE%20BANK!5e0!3m2!1sen!2sng!4v1575305976931!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0; width:100%" allowfullscreen=""></iframe>

				<iframe v-show="selected == 'SapeleRd'" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.3563635160162!2d5.742434315279221!3d5.514009935602442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041b2b8bdcd1f9d%3A0x34af8227fa32ff08!2sAmju%20Unique%20Microfinance%20Bank!5e0!3m2!1sen!2sng!4v1575305844357!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0; width:100%" allowfullscreen=""></iframe>

          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
		name: "OurBranchesPage",
		data:() => ({
			selected: 'Airport'
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
