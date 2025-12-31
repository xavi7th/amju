<template>
  <div class="loader" :style="{ width: size + 'px', height: size + 'px' }"></div>
</template>

<script>
  export default {
      name: 'Loader',
      props: {
        size: {
          type: Number,
          default: 30
        }
      }
  }
</script>

<style>
  .loader {
    display: block;
    border: 5px solid rgba(189,189,189, 0.25);
    border-left-color: rgb(3, 169, 244);
    border-top-color: rgb(3, 169, 244);
    border-radius: 50%;
    animation: rotate 600ms infinite linear;
    margin: 0 auto;
  }

  @keyframes rotate {
      to {
          transform: rotate(1turn)
        }
  }
</style>
