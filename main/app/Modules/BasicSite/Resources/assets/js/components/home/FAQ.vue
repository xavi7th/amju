<template>
  <section class="section section-md bg-primary-dark">
    <div class="container">
      <h2 class="custom-title text-center">
        <span>Frequently Asked Questions</span>
      </h2>
      <div class="row row-40">
        <div class="col-sm-6 col-lg-6">
          <ul class="list-xl wow fadeIn">
            <li>
              <h5>What is the currency amount for the Amju Unique Micro Finance Bank Verve Card?</h5>
              <p class="text-gray-600">
                The minimum amount that can be loaded on the card is ₦10,000 or equivalent
                amount in other currency. The maximum amount would be as per Amju Unique Micro Finance Bank guidelines applicable from time
                to time. You can learn more about it by contacting our consultants.
              </p>
            </li>
            <li>
              <h5>What steps do I take if my card gets lost?</h5>
              <p class="text-gray-600">
                If you lose your card please immediately contact our customer support center.
                If you are in the USA please call +234 804 567 8996, for other countries please call +234 805 624 9328.
              </p>
            </li>
            <li>
              <h5>Do I have to maintain any minimum balance?</h5>
              <p
                class="text-gray-600"
              >Yes you do require a minimum balance of ₦1,000 to be present in your account</p>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-6">
          <ul class="list-xl wow fadeIn">
            <li>
              <h5>What kind of browser do I need for online banking?</h5>
              <p class="text-gray-600">
                Our Banking System supports all browsers. Some of the most popular ones are
                Internet Explorer, Chrome, Opera, Firefox, and Safari. If you are using Internet Explorer make sure the version of your
                browser is 7.0 or higher.
                You also must have pop-ups enabled in your browser.
              </p>
            </li>
            <li>
              <h5>Can I make online payments to foreign recipients?</h5>
              <p class="text-gray-600">
                Yes, you can! Our bank does not limit any payments to a certain country so
                whether you are using our online web-based banking system or an app for your device, you can safely transfer
                any amount of money or purchase services and products online to and from any country. Charges apply for all transactions.
                <router-link :to="{name:'site.contact'}">Contact us</router-link>or walk into any of our branches if you have any issues
              </p>
            </li>
            <li>
              <h5>What security features does the mobile banking have?</h5>
              <p class="text-gray-600">
                Mobile browser-based banking is very similar to PC based internet banking.
                The respective mobile handset browser replaces a PC browser to access the banking services. Some of
                the important security measures in place are 128 bit SSL from Sectigo, https:// based access,
                Intrusion detection system (IDS) etc.
              </p>
            </li>
          </ul>
        </div>
      </div>
      <!-- <div class="button-wrap-lg text-center">
        <a class="button button-lg button-primary" href="#">
          View All Asked
          Questions
        </a>
      </div>-->
    </div>
  </section>
</template>

<script>
  import { siteFAQ } from "@assets/js/config";
  export default {
    name: "FAQSection",
    data: () => ({
      faq: {}
    }),
    created() {
      axios.get(siteFAQ).then(({ data: { faq } }) => {
        this.faq = faq;
        this.$emit("faq-loaded");
      });
    }
  };
</script>

<style lang="scss" scoped>
  .text-gray {
    color: #f5f5f5;
  }
</style>
