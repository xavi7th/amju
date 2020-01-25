<template>
  <div>
    <section class="section section-lg">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-10">
            <!-- <h2>Management Team</h2> -->
            <div class="heading-6 block-lg">
              The Bank has a formidable Board and Management Team made up seasoned and successful professionals in their various endeavors.
              The Bank guarantees all her esteemed customers first class banking services, easy banking beyond the first.
              We at AMJU Unique Micro Finance Bank Limited are set out to give qualitative and superior banking services to our clients
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg bg-gray-100">
      <div class="container text-center">
        <h2>Leadership</h2>
        <!-- Owl Carousel-->
        <div
          class="owl-carousel"
          data-items="1"
          data-sm-items="2"
          data-lg-items="3"
          data-dots="true"
          data-nav="true"
          data-stage-padding="15"
          data-loop="true"
          data-margin="30"
          data-mouse-drag="false"
        >
          <div class="thumbnail-2" v-for="(member, idx) in MgtTeamMembers" :key="idx">
            <div class="media-wrap">
              <img :src="member.img.thumb" :alt="member.img.alt" width="149" height="149" />
            </div>
            <div class="title">
              <router-link
                :to="member.pageUrl"
                data-nav
              >{{ `${member.name.firstName} ${member.name.otherNames} ${member.name.lastName}` }}</router-link>
            </div>
            <div class="divider divider-1"></div>
            <div class="position">{{ member.position }}</div>
            <div class="group group-middle social-items">
              <a
                class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook"
                target="_blank"
                :href="member.social.facebook"
              ></a>
              <a
                class="icon icon-md icon-gray-400 novi-icon mdi mdi-twitter"
                target="_blank"
                :href="member.social.twitter"
              ></a>
              <a
                class="icon icon-md icon-gray-400 novi-icon mdi mdi-instagram"
                target="_blank"
                :href="member.social.instagram"
              ></a>
            </div>
          </div>
        </div>
      </div>

      <div
        class="modal fade"
        id="teamMemberDetails"
        tabindex="-1"
        role="dialog"
        aria-labelledby="teamMemberDetailsTitle"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="teamMemberDetailsTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">...</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
  import MgtTeamMembers from "@assets/js/mgtTeamList";
  export default {
    name: "ManagementTeamPage",
    data: () => {
      return {
        MgtTeamMembers
      };
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
  .modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - (1.75rem * 2));
  }
</style>
