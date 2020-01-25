<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between flex-lg-row-reverse">
        <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4">
          <div class="box-wrap-gray">
            <div class="thumbnail-1">
              <div class="media-wrap">
                <img src="/img/team/Amju-CEO-full.jpg" alt width="270" height="270" />
              </div>
              <div class="title">
                <a href="#">Dr. Jonathan Ososuakpor Ph.D</a>
              </div>
              <div class="position">MD / CEO</div>
              <p class="exeption">
                Dr. Jonathan Ososuakpor has his PhD in Economics from the Delta State University, Abraka. He is a fellow member of the Chartered
                Institute of Economist of Nigeria, Fellow of the Enterprise Risk Management of Nigeria and a certified Microfinance Bank practitioner (MCP).
              </p>
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
                He started his Banking career in 1983 at Union Bank of Nigeria Plc. He worked in various branches of Union Bank including Warri,
                Auchi and Oghara. He rose to the position of Manager Group 6 before he resigned to join Societe Generale Bank Nigeria Limited in
                2001 as Assistant Manager. He later joined Gateway Bank Plc in 2004 before the Bank’s merger with InterContinental Bank Plc in
                2005. In Intercontinental Bank Plc, he worked in various branches as Branch Manager, He was later transferred to Yenegoa as Head
                Public Sector, Bayelsa State, to Asaba as Head Public sector, Delta State and several branches of Intercontinental Bank Plc
                before he took up appointment with the defunct Oceanic Bank of Nigeria Plc on February 2009 as a full Manager. He became a
                senior Manager in Ecobank Nigeria Plc in 2012 before he resigned honourably to take over the mantle of leadership as the
                MD/CEO of AMJU UNIQUE MICROFINANCE BANK LIMITED in June, 2012.
              </p>
            </li>

            <li>
              <p>
                He is a Director and Shareholder of Amju Unique MFB Limited and he sits on the Board of Many companies including Top Rank Oil
                Services Limited, Universal Finance Consult Ltd, V-Capital Consulting Limited.
              </p>
            </li>

            <li>
              <p>
                Dr Jonathan Ososuakpor is a product of James Welch Grammar School, Emevor where he had his secondary education from 1976-1981.
                He is also a graduate of the University of Benin, Edo State where he bagged a second class Honour Upper Division in Banking
                and Finance in 1998, he also has a Master degree in Banking and Finance from the University of Benin in 2000. He has M.sc
                Economics from the Delta State University in 2002
              </p>
            </li>

            <li>
              <p>
                Dr. Jonathan Ososuakpor has his PhD in Economics from the Delta State University, Abraka. He is a fellow member of the Chartered
                Institute of Economist of Nigeria, Fellow of the Enterprise Risk Management of Nigeria He is certified Microfinance Bank
                practitioner (MCP) and an astute Banker with proven integrity; he rose from the rank and file in the Banking industry and is
                endowed with a lot of banking experience. Dr. Jonathan Ososuakpor is an icon in the industry and a man with high enthusiasm for
                work. He is a leader of the people, his entrance into AMJU UNIQUE MICROFINANCE BANK LIMITED has brought about a lot of Banking
                innovation and excellent Banking culture and custom coupled with excellent customers service unprecedented in the Banking
                Industry. In his word ‘’ we must eradicate poverty in our society ‘’ is being pursued. Dr. Jonathan Ososuakpor has a basket
                full of programmes that will take the Bank to the next level. The Board and management gladly welcome Dr. Jonathan Ososuakpor
                to the position of MD/CEO We all say welcome.
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
