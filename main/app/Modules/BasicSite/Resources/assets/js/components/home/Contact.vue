<template>
  <section class="newsletter-section gradient-bg" id="contact-us">
    <div class="container text-white">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 newsletter-text">
          <h2>Contact us for any enquiries</h2>
          <p>Drop us a note and a customer service rep will get back to you within 24 hours.</p>
        </div>
        <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
          <form class="newsletter-form" @submit.prevent="sendMessage">
            <input v-model="details.email" type="email" placeholder="Enter your Email" />
            <input v-model="details.phone" type="text" placeholder="Phone Number" />
            <input v-model="details.subject" type="text" placeholder="Subject" />
            <button type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import { CONSTANTS } from "@assets/js/config";
  import { siteContact } from "@assets/js/config";
  export default {
    name: "ContactUs",
    data() {
      return {
        CONSTANTS,
        details: {}
      };
    },
    created() {
      this.$emit("contact-loaded");
    },
    methods: {
      sendMessage() {
        axios.post(siteContact, { ...this.details }).then(rsp => {
          console.log(rsp);

          if (rsp && rsp.status == 201) {
            this.details = {};
            swal.fire("Sent", `You will be contacted shortly`, "success");
          }
        });
      }
    }
  };
</script>

<style scoped lang="scss">
  .newsletter-section {
    padding: 30px 0;
  }
  .newsletter-form {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;

    input {
      padding: 10px 20px;
      flex-basis: 50%;
    }

    button {
      position: static;
      flex-basis: 50%;
      padding: 12px 20px;

      @media (max-width: 576px) {
        margin-top: 0 !important;
      }
    }

    & :nth-child(n) {
      border-radius: 50px 0px 0px 50px;
    }

    & :nth-child(2n) {
      border-radius: 0 50px 50px 0;
    }

    & :nth-child(-n + 2) {
      margin-bottom: 10px;
    }
  }
</style>
