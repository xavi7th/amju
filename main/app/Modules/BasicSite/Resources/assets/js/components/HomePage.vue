<template>
  <div>
    <!-- <hero-section></hero-section>
    <about-section></about-section>
    <features-section></features-section>
    <how-it-works-section></how-it-works-section>
    <platform-statistics></platform-statistics>
    <team-section></team-section>
    <testimonial-section></testimonial-section>
    <final-charts-section></final-charts-section>
    <contact-us></contact-us>
    <latest-news></latest-news>-->
  </div>
</template>

<script>
  import HeroSection from "@components/home/Hero";
  import AboutSection from "@components/home/AboutUs";
  import HowItWorksSection from "@components/home/HowitWorks";
  import FeaturesSection from "@components/home/Features";
  import PlatformStatistics from "@components/home/PlatformStatistics";
  import TeamSection from "@components/home/OurTeam";
  import TestimonialSection from "@components/home/Testimonials";
  import ContactUs from "@components/home/Contact";
  import LatestNews from "@components/home/LatestNews";
  // import TokenSection from "@components/home/Token";
  import FinalChartsSection from "@components/home/FinalCharts";
  export default {
    name: "HomePage",
    components: {
      HeroSection,
      AboutSection,
      HowItWorksSection,
      FeaturesSection,
      PlatformStatistics,
      TeamSection,
      TestimonialSection,
      ContactUs,
      LatestNews,
      FinalChartsSection
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
