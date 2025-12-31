<template>
  <div class="temp-page">
    <h2>
      <span>Blank Page</span>
    </h2>
  </div>
</template>

<script>
  export default {
    name: "InvestorsNewsPage",
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
