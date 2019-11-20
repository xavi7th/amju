<template>
  <div>
    <section class="section section-lg">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-10">
            <h2>A Wide Range of Banking & Financial Services</h2>
            <div class="heading-6 block-lg">
              We are right here to fund that great dream of yours in a way that you may never imagine.
              Workers can plan their ways to own their businesses as we assist in creating the right mental
              environment and funds to get your dream business come to life
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services-->
    <section class="section section-lg bg-gray-100">
      <div class="container">
        <div class="service-list">
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <img src="/img/services-1-540x327.jpg" alt width="540" height="327" />
            </div>
            <div class="col-md-6">
              <h3 class="title">Mortgage Financing</h3>
              <p class="exeption">
                Amju Unique Micro Finance Bank Equity Loans has been helping Western Canadians finance their dreams for more
                than fifteen years. Client care is our top priority, working with homeowners, farmers, and small businesses
                to fund projects and plans in all shapes and sizes.
                Amju Unique Micro Finance Bank proudly funds all types of projects, scenarios, and dreams from ₦10,000 – ₦5,000,000.
                Consistently A+ rated Amju Unique Micro Finance Bank seeks to meet the needs of all clients, regardless of their financial backgrounds.
                Often, clients that choose Amju Unique Micro Finance Bank have been turned down by other lenders and faced challenges in pursuing the
                financing they need. We go the extra mile to ensure that clients from all credit backgrounds can have access to
                reputable lending. Talk to a mortgage consultant today.
              </p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.contact'}"
              >Contact Us</router-link>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <img src="/img/services-2-540x327.jpg" alt width="540" height="327" />
            </div>
            <div class="col-md-6">
              <h3 class="title">School Fees Funding</h3>
              <p class="exeption">
                Your children’s education is a huge investment.
                The best schools are costly, and the school fees can seem relentless.
                Have you just paid the last account – and the next one is now due?
                At Amju Unique Micro Finance Bank we know that “Life Happens” to everyone –
                job loss, illness, divorce, or maybe you just need a holiday, time away/out with
                your partner to celebrate an anniversary or milestone birthday.
                None of these events should disrupt your children’s education or cause you excess stress.
                Amju Unique Micro Finance Bank can step into anyone of these life events to ensure your
                children’s education is not disrupted. At Amju Unique Micro Finance Bank we give you the chance
                to catch your breath, get back on your feet, or the ability to just take a break.
                Talk to a consultant today
              </p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.contact'}"
              >Contact Us</router-link>
            </div>
          </div>
          <div class="row row-20 service-item">
            <div class="col-md-6">
              <img src="/img/services-3-540x327.jpg" alt width="540" height="327" />
            </div>
            <div class="col-md-6">
              <h3 class="title">Start-ups Investments/Partnership</h3>
              <p class="exeption">
                Don’t let money stop you from pursuing your dreams.
                <br />If you want to start your own business but don’t have the funding, you can still get it off the ground with our start-up
                investment / partnership program. We at Amju Unique Micro Finance Bank realise that in our current economic climate it’s not
                easy to pioneer a start-up. In fact, studies have shown that only 2% of small businesses in the Nigeria will survive through
                their fifth year of operation. Furthermore, just 15% of those businesses make it through ten years.
                Based on this information, it’s clear that failure is more frequent than success when it comes to startup companies.
                We at Amju Unique Micro Finance Bank are here to partner you into that 2 percentile. Talk to our consultants today to find out how.
              </p>
              <router-link
                data-nav
                class="button button-lg button-primary"
                :to="{name: 'site.contact'}"
              >Contact Us</router-link>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
  export default {
    name: "InvestorsRelationsPage",
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
