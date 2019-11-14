<template>
  <div class="auth-split">
    <div class="auth-left">
      <div class="auth-box-wrapper">
        <div class="auth-logo">
          <div class="logo">
            <div class="logo-type logo-type-colored">
              <a href="index.html">
                <span>
                  amju
                  <span>unique</span>
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="fs-18 fw-600 text-center mb-30 text-title">Log In</div>
        <form action>
          <div class="form-group mb-20">
            <label for="form-mail">
              <strong>E-Mail</strong>
            </label>
            <input type="text" class="form-control form-control-pill" id="form-mail" />
          </div>
          <div class="form-group mb-20">
            <label for="form-pass">
              <strong>Password</strong>
            </label>
            <input type="password" class="form-control form-control-pill" id="form-pass" />
          </div>
          <div class="form-group">
            <label class="control control-checkbox">
              <div class="flex a-i-center j-c-between">
                <span class="text-light fs-12">Remember</span>
              </div>
              <input type="checkbox" />
              <span class="control-icon"></span>
            </label>
          </div>
          <div class="form-group flex j-c-center mt-30">
            <button class="btn btn-primary btn-shadow btn-round">Log In</button>
          </div>
        </form>
      </div>
    </div>
    <div class="auth-right" style="background-image:url('/img/amju-building.jpg')">
      <div class="auth-content">
        <div class="auth-right__caption">
          <h1>Admin Panel</h1>
          <p>
            Unauthorized attempts to access information or change information on these pages are strictly prohibited and
            are punishable under the Computer Fraud and Abuse Act of 2010 and the Private Information Infrastructure Protection Act.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "AdminAuth",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      // this.$unloadScript("/js/main.js");
    }
  };
</script>

<style lang="scss" scoped>
  .auth-right {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;

    .auth-right__caption {
      font-size: larger;
    }
  }
  .logo .logo-type-colored a span {
    text-transform: capitalize;
    color: #1b97eb;

    & > span {
      color: #f90a48;
    }
  }

  .auth-split .auth-left button {
    font-weight: bold;
  }
</style>
