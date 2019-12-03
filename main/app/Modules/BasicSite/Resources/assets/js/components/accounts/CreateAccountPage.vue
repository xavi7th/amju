<template>
  <section class="section one-screen-page bg-gray-100">
    <div class="one-screen-page-inner">
      <div class="page-content text-center py-5 my-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-4">
              <h3>Complete this form</h3>
              <form class="rd-form form-lg rd-mailform" @submit.prevent="createAccount">
                <div class="form-wrap radio-group">
                  <label for="account-type" class="radio-group-label">Choose Account Type</label>

                  <div>
                    <input
                      type="radio"
                      name="account-type"
                      v-model="details.acc_type"
                      value="current"
                    />
                    <label for="account-type">Current</label>
                  </div>
                  <div>
                    <input
                      type="radio"
                      name="account-type"
                      v-model="details.acc_type"
                      value="savings"
                    />
                    <label for="account-type">Savings</label>
                  </div>
                  <div>
                    <input
                      type="radio"
                      name="account-type"
                      v-model="details.acc_type"
                      value="others"
                    />
                    <label for="account-type">Others</label>
                  </div>
                </div>
                <div class="form-wrap" v-if="otherAccTypes">
                  <select class="form-input" name="gender" v-model="details.acc_type">
                    <option value="others">Select Account Type</option>
                    <option value="flexi">Amju Flexi Savings</option>
                    <option value="edusave">Amju Edusave Savings</option>
                    <option value="thrift">Amju Thrift Savings</option>
                    <option value="marriage">Amju Marriage Savings</option>
                    <option value="christmas">Amju Christmas Savings</option>
                    <option value="esusu">Amju Esusu Savings</option>
                    <option value="entrepreneur">Amju Entrepreneur Savings</option>
                    <option value="platinum">Amju Platinum Account</option>
                    <option value="overdraft">Amju Overdraft Account</option>
                    <option value="divine">Amju Divine Account</option>
                    <option value="cooperative">Amju Cooperative Account</option>
                    <option value="groupleading">Amju Group Leading Account</option>
                  </select>
                </div>
                <div class="form-wrap">
                  <input
                    class="form-input"
                    id="user-name"
                    type="text"
                    name="user-name"
                    :data-constraints="fullnameConstraint"
                    v-model="details.full_name"
                  />
                  <label class="form-label" for="user-name">Full Name</label>
                </div>
                <div class="form-wrap">
                  <input
                    class="form-input"
                    id="user-phone"
                    type="text"
                    name="user-phone"
                    data-constraints=" @PhoneNumber @Required"
                    v-model="details.phone"
                  />
                  <label class="form-label" for="user-phone">Phone Number</label>
                </div>
                <div class="form-wrap">
                  <input
                    class="form-input"
                    id="user-email"
                    type="email"
                    name="user-email"
                    data-constraints="@Email @Required"
                    v-model="details.email"
                  />
                  <label class="form-label" for="user-email">E-mail Address</label>
                </div>
                <div class="form-wrap">
                  <input
                    class="form-input"
                    id="date-of-birth"
                    type="text"
                    name="date-of-birth"
                    :data-constraints="dateOfBirthConstraint"
                    v-model="details.dob"
                  />
                  <label class="form-label" for="date-of-birth">Date of Birth</label>
                </div>
                <div class="form-wrap">
                  <select
                    class="form-input"
                    name="gender"
                    id="gender"
                    :data-constraints="genderConstraint"
                    v-model="details.gender"
                  >
                    <option :value="null">Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                  </select>
                </div>
                <div class="form-wrap">
                  <input
                    class="form-input"
                    id="bvn"
                    type="text"
                    name="bvn"
                    :data-constraints="bvnConstraint"
                    v-model="details.bvn"
                  />
                  <label class="form-label" for="bvn">BVN (if any)</label>
                </div>
                <div class="form-wrap">
                  <textarea
                    class="form-input"
                    id="home-address"
                    type="text"
                    name="home-address"
                    data-constraints="@Required"
                    v-model="details.address"
                  ></textarea>
                  <label class="form-label" for="home-address">Address</label>
                </div>
                <div class="form-wrap">
                  <input
                    class="form-input"
                    id="upload-passport"
                    type="file"
                    name="upload-passport"
                    data-constraints="@Required"
                    v-show="false"
                    @change="attachFile"
                    ref="user_passport"
                    accept="image/*"
                  />
                  <label
                    class="form-label input-file-label"
                    for="upload-passport"
                  >{{ fileUploadName || 'Upload Passport'}}</label>
                </div>
                <button
                  class="button button-lg button-round button-block button-primary"
                  type="submit"
                  :disabled="!details.full_name || !details.gender || !details.user_passport || !details.acc_type || details.acc_type == 'others'"
                >Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import { siteCreateAccountApi } from "@assets/js/config";
  export default {
    name: "CreateNewAccountPage",
    data: () => ({
      fileUploadName: null,
      details: {
        gender: null
      }
    }),
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    },
    computed: {
      accountTypeConstraint() {
        return '@HTML5Required(message = "Select an account type")';
      },
      dateOfBirthConstraint() {
        return '@Above18Years @Past(format="MDY",message = "Date of Birth must be a date in the past") @Date @NotEmpty';
      },
      genderConstraint() {
        return '@Required(message = "Select your gender")';
      },
      bvnConstraint() {
        return '@Length(min=11, max=12, message = "Your BVN must be between 11 & 12 digits", ignoreEmpty=true) @Numeric(ignoreEmpty=true)';
      },
      fullnameConstraint() {
        return '@Pattern(regex=/^[A-Za-z-\\s\\.]+$/, message="A valid name is required") @Required';
      },
      otherAccTypes() {
        return (
          this.details.acc_type &&
          this.details.acc_type != "current" &&
          this.details.acc_type != "savings"
        );
      }
    },
    methods: {
      attachFile() {
        this.fileUploadName = this.$refs.user_passport.files[0].name;
        this.details.user_passport = this.$refs.user_passport.files[0];
      },
      createAccount() {
        if (window.hasValidationErrors) {
          Toast.fire({
            type: "error",
            text: "There are errors in the form",
            title: "Oops! "
          });
        } else {
          BlockToast.fire({
            text: "Setting up your new account ..."
          });
          this.details.dob = new Date(this.details.dob).toDateString();
          let formData = new FormData();

          _.forEach(this.details, (val, key) => {
            formData.append(key, val);
          });

          axios
            .post(siteCreateAccountApi, formData, {
              headers: {
                "Content-Type": "multipart/form-data"
              }
            })
            .then(({ status, data: { acc_num, full_name } }) => {
              if (status && status == 201) {
                sessionStorage.setItem(
                  "user_details",
                  JSON.stringify({ acc_num, full_name })
                );
                this.details = { gender: null };
                swal.fire({
                  title: "Success",
                  text: `Account Number is ${acc_num}`,
                  type: "success",
                  showConfirmButton: false,
                  footer:
                    '<a href="/account/create/success">What am I to do next?</a>'
                });
              }
            });
        }
      }
    }
  };
</script>

<style lang="scss">
  .radio-group {
    display: flex;
    justify-content: space-evenly;
    padding-bottom: 15px;
    text-align: center;
    padding-bottom: 15px;
    color: black;
    font-weight: bolder;
    flex-wrap: wrap;

    .radio-group-label {
      flex-basis: 100%;
      text-transform: uppercase;
      text-align: left;
    }

    .form-validation {
      top: auto;
      bottom: 0;
      right: auto;
      left: 50%;
      transform: translateX(-50%);
    }
  }

  .input-file-label {
    display: block;
    padding: 15px 21px;
    background: white;
    position: relative;
    border-radius: 7px;
    cursor: pointer;
    pointer-events: all;
    opacity: 1 !important;
    background-image: url(data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3…c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E);
    background-position: 96%;
    background-size: 3%;
    background-repeat: no-repeat;

    &:hover {
      background-color: #f9f9f9;
    }
  }

  [disabled] {
    cursor: not-allowed;
  }
</style>
