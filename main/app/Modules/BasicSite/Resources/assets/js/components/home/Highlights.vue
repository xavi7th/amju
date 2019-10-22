<template>
  <section class="section section-negative">
    <div class="container section-negative-inner">
      <div class="row row-30 justify-content-center row-flex">
        <div class="col-md-6 col-lg-4">
          <div class="counter-boxed">
            <div class="counter-boxed-top">
              <div class="counter-boxed-media">
                <img src="img/progress-1-92x84.png" alt width="92" height="84" />
              </div>
              <div class="counter-boxed-title">
                <div class="subtitle">More than</div>
                <div class="counter-wrap">
                  <div class="counter heading-2">23754</div>
                </div>
                <div class="title heading-5">Issued Cards</div>
              </div>
            </div>
            <div class="counter-boxed-body">
              <div class="exeption">
                Our bank is an acknowledged leader in credit card distribution. We issue more
                than 5000 cards every year.
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="counter-boxed">
            <div class="counter-boxed-top">
              <div class="counter-boxed-media">
                <img src="img/progress-2-92x84.png" alt width="92" height="84" />
              </div>
              <div class="counter-boxed-title">
                <div class="subtitle">Up to</div>
                <div class="counter-wrap">
                  <div class="counter heading-2">30</div>
                  <div class="heading-2">%</div>
                </div>
                <div class="title heading-5">Cashback</div>
              </div>
            </div>
            <div class="counter-boxed-body">
              <div class="exeption">
                We offer amazing amount of cashback for payments made with one of our credit
                cards - Blue, Green, or Orange.
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="counter-boxed">
            <div class="counter-boxed-top">
              <div class="counter-boxed-media">
                <img src="img/progress-3-92x84.png" alt width="92" height="84" />
              </div>
              <div class="counter-boxed-title">
                <div class="subtitle">Up to</div>
                <div class="counter-wrap">
                  <div class="counter heading-2">25</div>
                  <div class="heading-2">%</div>
                </div>
                <div class="title heading-5">for Deposits</div>
              </div>
            </div>
            <div class="counter-boxed-body">
              <div class="exeption">
                Banque offers various deposits in all international currencies with interest
                rate up to 25% for all regular clients.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- The Best Banking Choice-->
    <div class="section-md context-dark">
      <div class="container">
        <div class="row row-fix justify-content-center text-center">
          <div class="col-md-10 col-xl-7">
            <h2 class="custom-title">
              <span>We fund your dream</span>
            </h2>
            <p>
              We are right here to fund that great dream of yours in a way that you may never imagine.
              Workers can plan their ways to own their businesses as we assist in creating the right
              mental environment and funds to get your dream business come to life
            </p>
          </div>
        </div>
        <div class="row row-40 align-items-lg-center">
          <div class="col-sm-6 col-lg-4">
            <ul class="service-list-1">
              <li class="service-item-1 service-item-1-right unit wow fadeIn">
                <div class="unit-item">
                  <div class="icon mercury-icon-gears"></div>
                </div>
                <div class="unit-body">
                  <h6 class="title">Ways to bank</h6>
                  <p>With our various banking solutions, there is an option for everyone</p>
                </div>
              </li>
              <li class="service-item-1 service-item-1-right unit wow fadeIn">
                <div class="unit-item">
                  <div class="icon mercury-icon-touch"></div>
                </div>
                <div class="unit-body">
                  <h6 class="title">Internet Banking</h6>
                  <p>Get instant access to your account on any device using our banking apps.</p>
                </div>
              </li>
              <li class="service-item-1 service-item-1-right unit wow fadeIn">
                <div class="unit-item">
                  <div class="icon mercury-icon-phone-24"></div>
                </div>
                <div class="unit-body">
                  <h6 class="title">Send a Message</h6>
                  <p>Our Support team is always ready to help you solve any banking issues.</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-4 d-none d-lg-block">
            <div class="text-center wow fadeIn">
              <img src="img/index-1-1-309x582.png" alt width="309" height="582" />
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <ul class="service-list-1">
              <li class="service-item-1 unit wow fadeIn">
                <router-link :to="{name: 'site.root'}" class="d-flex" data-nav>
                  <div class="unit-item">
                    <div class="icon mercury-icon-social"></div>
                  </div>
                  <div class="unit-body">
                    <h6 class="title">Products &amp; Services</h6>
                    <p>Our Bank has special programs with benefits for business owners and agro-based investors.</p>
                  </div>
                </router-link>
              </li>
              <li class="service-item-1 unit wow fadeIn">
                <div class="unit-item">
                  <div class="icon mercury-icon-case"></div>
                </div>
                <div class="unit-body">
                  <h6 class="title">Personal Profile</h6>
                  <p>Register your free personal profile online to begin using our services.</p>
                </div>
              </li>
              <li class="service-item-1 unit wow fadeIn">
                <div class="unit-item">
                  <div class="icon mercury-icon-globe-marker"></div>
                </div>
                <div class="unit-body">
                  <h6 class="title">Visit Our Branches</h6>
                  <p>We have offices in many locations. We are close to you so you are never without assistance</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "HighlightsSection"
  };
</script>

<style lang="scss" scoped>
  .section-negative {
    background: #012a53;
  }
</style>
