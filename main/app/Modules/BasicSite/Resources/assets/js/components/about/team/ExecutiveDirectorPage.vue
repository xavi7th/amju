<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between flex-lg-row-reverse">
        <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4">
          <div class="box-wrap-gray">
            <div class="thumbnail-1">
              <div class="media-wrap">
                <img src="/img/team/Amju-ED-full.jpg" alt width="270" height="270" />
              </div>
              <div class="title">
                <a href="#">Mr Uche Ogelle</a>
              </div>
              <div class="position">Executive Director</div>
              <div class="group group-middle social-items">
                <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook" href="#"></a>
                <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-twitter" href="#"></a>
                <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-instagram" href="#"></a>
                <a class="icon icon-md icon-gray-400 novi-icon mdi mdi-linkedin" href="#"></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl">
            <li>
              <p class="lead-paragraph">
                Mr Uche Ogelle is an Executive Director of AMJU Unique Micro Finance Bank Ltd with great wealth of banking experiences in the
								commercial Banks which are Intercontinental Bank and Access Bank where he was a Branch Manager.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "CEOPage",
    data: () => {
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
<style lang="scss" scoped>
  .lead-paragraph {
    initial-letter: 2;
  }
</style>
