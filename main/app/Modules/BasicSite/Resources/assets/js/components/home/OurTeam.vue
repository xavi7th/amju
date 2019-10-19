<template>
  <section class="team-section spad">
    <div class="container">
      <div class="section-title text-center">
        <h2>Meet Our Team</h2>
        <p>Our experts in the field of forex trading can always help you with any of your questions!</p>
      </div>
    </div>
    <div class="team-members clearfix">
      <div class="member" v-for="team_member in team">
        <div class="member-text">
          <div class="member-img set-bg" :data-setbg="team_member.img"></div>
          <h2>{{ team_member.name }}</h2>
          <span>{{ team_member.position }}</span>
        </div>
        <div class="member-info">
          <div class="member-text">
            <div class="member-img set-bg" :data-setbg="team_member.img"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import { siteTeam } from "@assets/js/config";
  export default {
    name: "TeamSection",
    data: () => ({
      team: {}
    }),
    created() {
      axios.get(siteTeam).then(rsp => {
        this.team = rsp.data;
        this.$emit("team-loaded");
      });
    }
  };
</script>

<style scoped>
  .member-text {
    text-align: center !important;
  }
  .member:hover .member-info .member-text {
    opacity: 1;
    transform: scale(1.3) translateY(20px);
  }
</style>
