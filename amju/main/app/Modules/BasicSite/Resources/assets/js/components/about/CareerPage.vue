<template>
  <div>
    <section
      class="section section-lg section-bg-custom"
      style="background-image: url(/img/bg-image-1.jpg);"
    >
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-10">
            <h2>
              <span>Join Our Team</span>
            </h2>
            <div class="heading-6">
              Take a job opportunity of a lifetime – join the team of Amju Unique Micro Finance Bank. We cherish active
              employees willing to assist customers as they try to navigate the complexities of the finance sector.
              If you are enthusiastic about banking and ready to make impactful decisions, feel free to send us your CV.
            </div>

            <router-link
              data-nav
              class="button button-lg button-primary"
              :to="{name:'site.about.branches'}"
            >Visit Us</router-link>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-xs bg-primary-gradient">
      <div class="container">
        <div class="box-cta">
          <div class="box-cta-inner">
            <h3>
              Submit Your
              <span class="font-weight-bold">Resume</span> Online
            </h3>
          </div>
          <div class="box-cta-inner">
            <router-link
              class="button button-lg button-primary-dark"
              data-nav
              :to="{name:'site.about.career.apply'}"
            >Get Started</router-link>
          </div>
        </div>
      </div>
    </section>
    <!-- The Best Banking Choise-->
    <section class="section section-md bg-gray-100">
      <div class="container">
        <div class="block-lg text-center">
          <h3 class="custom-title">
            <span>The Best In Career Development</span>
          </h3>
          <p>
            Amju Unique Micro Finance Bank prides herself on the strong work ethics of her staff who are diligent, reliable,
            hardworking and committed to the continuos growth and success of the organisation. We value the well-being of
            our staff and we encourage them to strike a balance between their work and personal lives, thereby creating a
            healthy atmosphere for personal development and career success. Our work ethics include:
          </p>
        </div>
        <div class="row row-30 row-xl-60">
          <div class="col-sm-6 col-md-4">
            <div class="blurb-image">
              <h6 class="title">INTEGRITY</h6>
              <p
                class="exeption"
              >We continuously strive to uphold the highest ethical standards whilst delivering excellent service to our customers.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="blurb-image">
              <h6 class="title">TRANSPARENCY</h6>
              <p class="exeption">Lorem ipsum dolor sit amet, scripta legimus quaerendum ex.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="blurb-image">
              <h6 class="title">PROFESSIONALISM</h6>
              <p class="exeption">
                We adhere to the rules and regulations of the banking profession and perform our functions with a positive attitude,
                creatively applying our knowledge and skills to deliver high quality products and services.
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="blurb-image">
              <h6 class="title">CORPORATE GOVERNANCE</h6>
              <p class="exeption">
                Our business practices, operational rules, processes and policies are formulated to engender public
                trust and confidence while exceeding the expectations of all stakeholders.
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="blurb-image">
              <h6 class="title">LOYALTY</h6>
              <p class="exeption">
                We are committed to providing the best products and services to our customers
                that enhance their business objectives and also ensure a healthy environment that support our staff.
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="blurb-image">
              <h6 class="title">EXCELLENT SERVICE</h6>
              <p
                class="exeption"
              >We continuously deliver exceptional services which ensures remarkable customer satisfaction..</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="section section-md bg-gray-100">
      <div class="container text-center">
        <h3 class="custom-title">
          <span>Your Career Starts Here</span>
        </h3>
        <div class="row">
          <div class="col-lg-12">
            <div
              class="isotope-filters isotope-filters-horizontal isotope-filters-line isotope-inline-filters"
            >
              <button
                class="isotope-filters-toggle button button-sm button-primary"
                data-custom-toggle="#isotope-filters"
                data-custom-toggle-disable-on-blur="true"
              >
                Filter
                <span class="caret"></span>
              </button>
              <ul class="isotope-filters-list" id="isotope-filters">
                <li>
                  <a
                    class="active"
                    data-isotope-filter="*"
                    data-isotope-group="gallery"
                    href="#"
                  >All Cities</a>
                </li>
                <li>
                  <a
                    data-isotope-filter="Category 1"
                    data-isotope-group="gallery"
                    href="#"
                  >Airport Road</a>
                </li>
                <li>
                  <a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Asaba</a>
                </li>
                <li>
                  <a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">Eku</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-12 text-left">
            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery">
              <div class="row">
                <div class="col-sm-6 col-md-4 isotope-item" data-filter="*">
                  <router-link class="box-minimal" data-nav :to="{name:'site.about.career.apply'}">
                    <div class="hot">Immediate resumption</div>
                    <div class="box-minimal-title">Strategist</div>
                  </router-link>
                </div>
                <div class="col-sm-6 col-md-4 isotope-item" data-filter="Category 3">
                  <router-link class="box-minimal" data-nav :to="{name:'site.about.career.apply'}">
                    <div class="hot">Immediate resumption</div>
                    <div class="box-minimal-title">Marketer</div>
                  </router-link>
                </div>
                <div class="col-sm-6 col-md-4 isotope-item" data-filter="Category 3">
                  <router-link class="box-minimal" data-nav :to="{name:'site.about.career.apply'}">
                    <div class="box-minimal-title">Reporting Analyst</div>
                  </router-link>
                </div>
                <div class="col-sm-6 col-md-4 isotope-item" data-filter="Category 3">
                  <router-link class="box-minimal" data-nav :to="{name:'site.about.career.apply'}">
                    <div class="box-minimal-title">Finance Analyst</div>
                  </router-link>
                </div>
                <div class="col-sm-6 col-md-4 isotope-item" data-filter="Category 2">
                  <router-link class="box-minimal" data-nav :to="{name:'site.about.career.apply'}">
                    <div class="box-minimal-title">Office Manager</div>
                  </router-link>
                </div>
                <div class="col-sm-6 col-md-4 isotope-item" data-filter="Category 2">
                  <router-link class="box-minimal" data-nav :to="{name:'site.about.career.apply'}">
                    <div class="box-minimal-title">PR Manager</div>
                  </router-link>
                </div>
                <div class="col-sm-6 col-md-4 isotope-item" data-filter="Category 1">
                  <router-link class="box-minimal" data-nav :to="{name:'site.about.career.apply'}">
                    <div class="box-minimal-title">Wealth Strategy Associate</div>
                  </router-link>
                </div>
                <div class="col-sm-6 col-md-4 isotope-item" data-filter="Category 1">
                  <router-link class="box-minimal" data-nav :to="{name:'site.about.career.apply'}">
                    <div class="box-minimal-title">Accountant</div>
                  </router-link>
                </div>
                <div class="col-sm-6 col-md-4 isotope-item" data-filter="Category 1">
                  <router-link class="box-minimal" data-nav :to="{name:'site.about.career.apply'}">
                    <div class="box-minimal-title">Customer Care Manager</div>
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
  </div>
</template>

<script>
  export default {
    name: "CareerPage",
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
