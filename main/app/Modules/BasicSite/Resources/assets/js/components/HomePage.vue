<template>
  <div>
    <hero-section></hero-section>
    <amju-highlights></amju-highlights>
    <about-section></about-section>
    <!-- <testimonial-section></testimonial-section> -->
    <!-- <platform-statistics></platform-statistics> -->
    <create-account-cta></create-account-cta>
    <order-card-section></order-card-section>
    <faq-section></faq-section>
    <!-- <latest-news></latest-news> -->
    <!-- <subscribe-section></subscribe-section> -->
    <contact-us></contact-us>
  </div>
</template>

<script>
  import HeroSection from "@components/home/Hero";
  import AmjuHighlights from "@components/home/Highlights";
  import AboutSection from "@components/home/AboutUs";
  import SubscribeSection from "@components/home/Subscribe";
  import CreateAccountCta from "@components/home/CreateAccount";
  import PlatformStatistics from "@components/home/PlatformStatistics";
  import FaqSection from "@components/home/FAQ";
  import TestimonialSection from "@components/home/Testimonials";
  import ContactUs from "@components/home/Contact";
  import LatestNews from "@components/home/LatestNews";
  import OrderCardSection from "@components/home/OrderCard";
  export default {
    name: "HomePage",
    components: {
      HeroSection,
      AmjuHighlights,
      AboutSection,
      SubscribeSection,
      CreateAccountCta,
      PlatformStatistics,
      FaqSection,
      TestimonialSection,
      ContactUs,
      LatestNews,
      OrderCardSection
      // TokenSection,
    },
    data() {
      return {};
    },
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    }
  };
</script>

<style scoped>
</style>
