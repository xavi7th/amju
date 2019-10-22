<template>
  <div></div>
</template>

<script>
  export default {
    name: "InvestorsOutlookAndInsightsPage",
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
