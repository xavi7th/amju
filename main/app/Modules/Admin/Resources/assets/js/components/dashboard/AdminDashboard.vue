<template>
  <main>
    <div class="content">
      <div class="card">
        <div class="card-body"></div>
      </div>
    </div>
  </main>
</template>

<script>
  export default {
    name: "AdminDashboard",
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
