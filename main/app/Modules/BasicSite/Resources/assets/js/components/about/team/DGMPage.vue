<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between flex-lg-row-reverse">
        <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4">
          <div class="box-wrap-gray">
            <div class="thumbnail-1">
              <div class="media-wrap">
                <img src="/img/team/Amju-DGM-full.jpg" alt width="270" height="270" />
              </div>
              <div class="title">
                <a href="#">Ogbeide Emmanuel Ebhozele</a>
              </div>
              <div class="position">DGM</div>
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
              <p
                class="lead-paragraph"
              >He is the D.G.M (Deputy General Manager) Finance &amp; Accounts of AMJU Unique Microfinance Bank,
							and possesses his first degree and Master’s degree in Banking and Finance from the University of Benin, Edo State, Nigeria.</p>
            </li>

            <li>
              <!-- <p>
                He is a Director and Shareholder of Amju Unique MFB Limited and he sits on the Board of Many companies including Top Rank Oil
                Services Limited, Universal Finance Consult Ltd, V-Capital Consulting Limited.
              </p> -->
							<p>
								He is a member of the Chartered Institute of Bankers of Nigeria (CIBN) foundation. He has worked as an Accountant, Auditor, Head Banking Operations,
								head Credit Administration and Recovery and has worked in establishments like Microfinance banks and companies. He has attended a course in
								<b><i>Credit Administration and Debt Recovery Techniques (CIBN)</i></b>, Introduction to Management (BBCB), Presentation of Audited Financial Statement (CBN),
								Agricultural Credit Guarantee Scheme (ACGS), Fundamentals of Micro Finance Banks and Interim Capacity Building for Microfinance Banks in Nigeria and other
								training courses and workshops.
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
    name: "DGMPage",
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
