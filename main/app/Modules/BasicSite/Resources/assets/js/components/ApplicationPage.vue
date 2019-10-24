<template>
  <div class="temp-page">
    <h2>
      <span>Blank Page</span>
    </h2>
  </div>
</template>

<script>
  export default {
    name: "UploadResumePage",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    }
  };
</script>
