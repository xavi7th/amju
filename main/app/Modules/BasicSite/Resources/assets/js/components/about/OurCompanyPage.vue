<template>
  <div>
    <section class="section section-lg custom-image-section">
      <div class="container relative-container">
        <div class="row row-30 row-md-60 justify-content-between">
          <div class="col-md-12">
            <h2>Overview</h2>
          </div>
          <div class="col-12">
            <div class="heading-6">
              Amju Unique Micro Finance Bank was founded in ???? to introduce the new level of financial services in Nigeria.
              We are still dedicated to the success of our clients.
            </div>
            <p>
              At Amju Unique Micro Finance Bank, we are guided by a common purpose to help make financial lives better by connecting
              clients and communities to the resource they need to be successful. We are driving growth – helping to create jobs,
              develop communities, foster economic mobility and address our society’s biggest challenges – while managing risk and
              providing a return to our clients and our shareholders.
            </p>
          </div>
        </div>
        <img
          class="img-bordered image-item"
          src="/img/about-1-470x312.jpg"
          alt
          width="470"
          height="312"
        />
      </div>
    </section>
    <!-- Your Career Starts Here-->
    <section class="section section-lg bg-gray-100">
      <div class="container text-center">
        <h2 class="custom-title">
          <span>History</span>
        </h2>
        <!-- Owl Carousel-->
        <div
          class="owl-carousel text-left"
          data-items="1"
          data-sm-items="2"
          data-md-items="3"
          data-lg-items="4"
          data-dots="false"
          data-nav="false"
          data-stage-padding="15"
          data-loop="false"
          data-margin="30"
          data-mouse-drag="true"
        >
          <div class="timeline">
            <div class="date">June 2018</div>
            <div class="line"></div>
            <a class="media-item" href="#">
              <img src="/img/timeline-1-100x72.jpg" alt width="100" height="72" />
            </a>
            <h6 class="title">Lorem ipsum dolor sit amet, scripta legimus</h6>
            <p class="exeption">
              Lorem ipsum dolor sit amet, scripta legimus quaerendum ex vis, audire nonumes his an.
              Decore tamquam insolens usu, an duo omnium debitis adipiscing, ne postulant.
            </p>
          </div>
          <div class="timeline">
            <div class="date">April 2015</div>
            <div class="line"></div>
            <a class="media-item" href="#">
              <img src="/img/timeline-2-100x72.jpg" alt width="100" height="72" />
            </a>
            <h6 class="title">Lorem ipsum dolor sit amet, scripta legimus dolor sit amet, scripta</h6>
            <p class="exeption">
              Lorem ipsum dolor sit amet, scripta legimus quaerendum ex vis, audire nonumes his an.
              Decore tamquam insolens usu, an duo omnium debitis adipiscing, ne postulant.
            </p>
          </div>
          <div class="timeline">
            <div class="date">December 2012</div>
            <div class="line"></div>
            <a class="media-item" href="#">
              <img src="/img/timeline-3-100x72.jpg" alt width="100" height="72" />
            </a>
            <h6 class="title">Lorem ipsum dolor sit amet, scripta legimus</h6>
            <p class="exeption">
              Lorem ipsum dolor sit amet, scripta legimus quaerendum ex vis, audire nonumes his an.
              Decore tamquam insolens usu, an duo omnium debitis adipiscing, ne postulant.
            </p>
          </div>
          <div class="timeline">
            <div class="date">October 2010</div>
            <div class="line"></div>
            <a class="media-item" href="#">
              <img src="/img/timeline-4-100x72.jpg" alt width="100" height="72" />
            </a>
            <h6 class="title">Lorem ipsum dolor sit amet, scripta legimus</h6>
            <p class="exeption">
              Lorem ipsum dolor sit amet, scripta legimus quaerendum ex vis, audire nonumes his an.
              Decore tamquam insolens usu, an duo omnium debitis adipiscing, ne postulant.
            </p>
          </div>
          <div class="timeline">
            <div class="date">August 2005</div>
            <div class="line"></div>
            <a class="media-item" href="#">
              <img src="/img/timeline-5-100x72.jpg" alt width="100" height="72" />
            </a>
            <h6 class="title">Lorem ipsum dolor sit amet, scripta legimus</h6>
            <p class="exeption">
              Lorem ipsum dolor sit amet, scripta legimus quaerendum ex vis, audire nonumes his an.
              Decore tamquam insolens usu, an duo omnium debitis adipiscing, ne postulant.
            </p>
          </div>
          <div class="timeline">
            <div class="date">April 1999</div>
            <div class="line"></div>
            <a class="media-item" href="#">
              <img src="/img/timeline-6-100x72.jpg" alt width="100" height="72" />
            </a>
            <h6 class="title">Lorem ipsum dolor sit amet, scripta legimus</h6>
            <p class="exeption">
              Lorem ipsum dolor sit amet, scripta legimus quaerendum ex vis, audire nonumes his an.
              Decore tamquam insolens usu, an duo omnium debitis adipiscing, ne postulant.
            </p>
          </div>
          <div class="timeline">
            <div class="date">March 1998</div>
            <div class="line"></div>
            <a class="media-item" href="#">
              <img src="/img/timeline-7-100x72.jpg" alt width="100" height="72" />
            </a>
            <h6 class="title">Lorem ipsum dolor sit amet, scripta legimus</h6>
            <p class="exeption">
              Lorem ipsum dolor sit amet, scripta legimus quaerendum ex vis, audire nonumes his an.
              Decore tamquam insolens usu, an duo omnium debitis adipiscing, ne postulant.
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
  export default {
    name: "AboutCompanyPage",
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
