<template>
  <section class="section section-md bg-primary-dark" id="faq">
    <div class="container">
      <h2 class="custom-title text-center">
        <span>Frequently Asked Questions</span>
      </h2>
      <div class="row row-40">
        <div class="col-sm-6 col-lg-6">
          <ul class="list-xl wow fadeIn">
            <li>
              <h5>What is the currency amount for the Amju Unique Micro Finance Bank Verve Card?</h5>
              <p
                class="text-gray-600"
              >The Amju Unique Micro Finance Bank Verve card is Nigerian Naira denominated and has an issuance fee of ₦1,000</p>
            </li>
            <li>
              <h5>What steps do I take if my card gets lost?</h5>
              <p class="text-gray-600">
                If you lose your card please immediately contact our customer support center.
                To contact our customer support, please call +234 905 396 0980 or send an email to amju.unique@amjuuniquemfbng.com.
              </p>
            </li>
            <li>
              <h5>What is the least amount to start ESUSU account?</h5>
              <p
                class="text-gray-600"
              >Our Amju Unique Micro Finance Bank Esusu account can be opened with a minimum deposit of ₦200.</p>
            </li>
            <li>
              <h5>How do I get AMJU POS as a merchant?</h5>
              <p class="text-gray-600">
                Open a current account, download our indemnity form and submit it at the nearest AMJU branch.
                Kindly come along with a POS request application letter printed out on your letter-headed paper.
              </p>
            </li>
            <li>
              <h5>Can I access loan as AMJU customer?</h5>
              <p
                class="text-gray-600"
              >AMJU gives loan to expand all our customers businesses as many as are interested.</p>
            </li>
            <li>
              <h5>How can I register AMJU Internet banking?</h5>
              <p class="text-gray-600">
                Visit our website, download the form and fill it completely. After you have signed the agreement, submit the form at any of our
                branches or upload it back to us and wait for registration instruction as a text message on the mobile line you provided.
              </p>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-6">
          <ul class="list-xl wow fadeIn">
            <li>
              <h5>Can I use AMJU ATM card to withdraw in every other bank machine?</h5>
              <p
                class="text-gray-600"
              >The Amju Unique Micro Finance Bank ATM card is useable on all ATMs within Nigeria.</p>
            </li>
            <li>
              <h5>Can I transfer money from directly to my AMJU personal account?</h5>
              <p class="text-gray-600">Yes, you can.</p>
            </li>
            <li>
              <h5>What is the maximum amount to transfer from my account with AMJU MOBILE APP?</h5>
              <p
                class="text-gray-600"
              >You can transfer up to a maximum of ₦500,000 at once using your AMJU Mobile Banking app</p>
            </li>
            <li>
              <h5>How can I have AMJU Mobile app on my phone?</h5>
              <p class="text-gray-600">
                Amju mobile only can be activated on Android phones at the moment. Visit google play store on your device.
                Search for Amju, click on amju logo and download. Install the app after downloading and register a new device.
                Insert your account number and an OTP would be sent to you as a text message. Please note that the OTP expires after 1 minute.
                If OTP expires, then you can click on resend OTP to get a new one.
                <br />Input the OTP and click on continue, create password and confirm the password created. Create 4 digit PIN also.
                After all these you can log in with your password and start transacting.
              </p>
            </li>
            <li>
              <h5>How can I open an AMJU bank account?</h5>
              <p class="text-gray-600">
                You can very easily open an account and get your account number in 5 minutes. Simply click
                <router-link :to="{name:'site.account.create'}" class="faq-link">here</router-link>to be AMJU customer.
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
  .faq-link {
    color: #fff;
    text-decoration: underline;
    margin-right: 5px;
  }
</style>
