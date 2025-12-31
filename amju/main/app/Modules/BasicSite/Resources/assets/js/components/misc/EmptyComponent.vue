<template>
  <router-view @page-loaded="$emit('page-loaded')" @unload-main="unloadScr" />
</template>

<script>
  export default {
    methods: {
      unloadScr() {
        this.$unloadScript("/js/main.js");
      }
    }
  };
</script>
