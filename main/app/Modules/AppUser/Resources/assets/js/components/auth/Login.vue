<template>
  <!-- main content -->
  <div class="plyenz-main h-100v">
    <div class="auth-box card-animation">
      <div class="auth-logo">
        <div class="header-logo logo-type no-margin">
          <a href="/">Amju</a>
        </div>
      </div>
      <div class="auth-desc">
        <p class="mb-0">
          <span>Welcome,</span> sign in to continue.
        </p>
      </div>
      <form @submit.prevent="loginUser">
        <div class="form-group mb-20">
          <label for="form-mail">
            <strong>E-Mail</strong>
          </label>
          <input
            type="email"
            class="form-control form-control-pill"
            id="form-mail"
            v-model="details.email"
            v-validate="'required|email'"
            name="email"
          />
        </div>
        <div class="form-group mb-20">
          <label for="form-pass">
            <strong>Password</strong>
          </label>
          <input
            type="password"
            class="form-control form-control-pill"
            id="form-pass"
            v-model="details.password"
            v-validate="'required'"
            name="email"
          />
        </div>
        <div class="form-group">
          <label class="control control-checkbox">
            <span class="text-light">Remember</span>
            <input type="checkbox" v-model="details.remember" />
            <span class="control-icon"></span>
          </label>
        </div>
        <div class="form-group mt-20">
          <button class="btn btn-primary btn-shadow btn-round btn-block">Log In</button>
        </div>
        <div>
          <hr />
          <p class="fs-12 text-center text-light">
            Do not have an account?
            <router-link :to="{name:'dashboard.register'}" class="text-primary">Register</router-link>
          </p>
        </div>
      </form>
    </div>
  </div>
  <!-- main content #end -->
</template>

<script>
  import { siteLogin } from "@user-assets/js/config";
  import { mixins } from "@user-assets/js/config";
  export default {
    data: () => ({
      details: {}
    }),
    mixins: [mixins],
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/dashboard-main.js");
    },
    methods: {
      loginUser() {
        this.$validator.validateAll().then(result => {
          if (!result) {
            Toast.fire({
              title: "Invalid data! Try again",
              position: "center",
              type: "error"
            });
          } else {
            BlockToast.fire({
              text: "Accessing your dashboard..."
            });

            axios
              .post(siteLogin, { ...this.details })
              .then(rsp => {
                if (undefined !== rsp && rsp.status == 202) {
                  // location.replace("/user/dashboard");
                  swal.close();
                  this.$router.push({ name: "dashboard.root" });
                }
              })
              .catch(err => {
                if (err.response.status == 416) {
                  swal
                    .fire({
                      title: "Unverified",
                      text: `Your newly registered account has not been approved by our monitoring team. Kindly check back later.`,
                      type: "info"
                    })
                    .then(() => {
                      location.replace("/");
                    });
                }
              });
          }
        });
      }
    }
  };
</script>

<style lang="scss" scoped>
</style>
