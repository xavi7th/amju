<template></template>

<script>
  import {
    tokensChart1,
    tokensChart2
    // tokensChart3
  } from "../../config/endpoints";
  export default {
    name: "TokenSection",
    created() {
      this.$emit("token-loaded");
      axios.get(tokensChart1).then(rsp => {
        /**
         *? Convert string to DOM Nodes
         */
        let frag = document
          .createRange()
          .createContextualFragment(rsp.data.template);
        document.querySelector("#chart2").replaceWith(frag);
      });
      axios.get(tokensChart2).then(rsp => {
        /**
         *? Convert string to DOM Nodes
         */
        let frag = document
          .createRange()
          .createContextualFragment(rsp.data.template);
        document.querySelector("#chart3").replaceWith(frag);
      });

      // axios.get(tokensChart3).then(rsp => {
      //   /**
      //    *? Convert string to DOM Nodes
      //    */
      //   let frag = document
      //     .createRange()
      //     .createContextualFragment(rsp.data.template);
      //   document.querySelector("#chart4").replaceWith(frag);
      // });
    }
  };
</script>
