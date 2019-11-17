<template>
  <main>
    <div class="flex a-i-center h-100">
      <div class="loader-ripple">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </main>
</template>

<script>
  export default {};
</script>

<style lang="scss" scoped>
  main {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    position: absolute;
    right: 0;
    left: 0;
    z-index: 1;
  }
</style>
