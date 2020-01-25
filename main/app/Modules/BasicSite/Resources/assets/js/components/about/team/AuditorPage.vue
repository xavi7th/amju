<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between flex-lg-row-reverse">
        <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4">
          <div class="box-wrap-gray">
            <div class="thumbnail-1">
              <div class="media-wrap">
                <img src="/img/team/Amju-Audit-full.jpg" alt width="270" height="270" />
              </div>
              <div class="title">
                <a href="#">Samuel Nwabugbogu Ikechukwu</a>
              </div>
              <div class="position">Head Audit, Internal Control and Risks Management</div>
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
                He holds an Associate Certificate of The Chartered Institute of Bankers of Nigeria (ACIB) and a Certified Microfinance Banker (MCIB).
                He is also a Student Member of Chartered Institute of Secretaries and Administrators of Nigeria. He is a pioneer staff of AMJU
                Unique MFB Limited. He has attended several courses, workshops and seminars which include Agricultural Lending Course, Credit Analysis and Project Evaluation and other related courses to microfinance banking.
              </p>
            </li>
            <li>
              <p>He has over 30 years working experience most of which is in commercial and retail banking in Nigeria. He had worked as a Branch Manager, Head of Regional Credit Department at Afribank Nigeria PLC before his retirement from Afribank in 2006.</p>
            </li>

            <li>
              <p>
                He holds an Associate Certificate of The Chartered Institute of Bankers of Nigeria (ACIB) and a Certified Microfinance Banker (MCIB).
                He is also a Student Member of Chartered Institute of Secretaries and Administrators of Nigeria. He is a pioneer staff of AMJU
                Unique MFB Limited. He has attended several courses, workshops and seminars which include Agricultural Lending Course, Credit Analysis and Project Evaluation and other related courses to microfinance banking.
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
