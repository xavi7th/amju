<template lang="html">
	<footer class="section footer-1">
		<div class="container">
			<div class="row row-40 wow fadeIn">
				<div class="col-md-6 col-lg-3 text-center">
					<img src="/img/logo-round.png" alt="" width="100" height="58" />
					<div class="group-md group-middle social-items">
						<a data-nav class="icon icon-md novi-icon mdi mdi-facebook"  target="_blank" :href="CONSTANTS.facebook"></a>
						<a data-nav class="icon icon-md novi-icon mdi mdi-twitter"  target="_blank" :href="CONSTANTS.twitter"></a>
						<a data-nav class="icon icon-md novi-icon mdi mdi-instagram"  target="_blank" :href="CONSTANTS.instagram"></a>
						<a data-nav class="icon icon-md novi-icon mdi mdi-facebook-messenger"  target="_blank" :href="CONSTANTS.facebookMessenger"></a>
						<a data-nav class="icon icon-md novi-icon mdi mdi-linkedin"  target="_blank" :href="CONSTANTS.linkedin"></a>
						<a data-nav class="icon icon-md novi-icon mdi mdi-snapchat"  target="_blank" :href="CONSTANTS.snapchat"></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<h5 class="title">Customer Services</h5>
					<ul class="contact-box">
						<li class="pl-3">
							<div class="unit unit-horizontal unit-spacing-xxs">
								<div class="unit-body">
									<ul class="list-links">
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Help Center</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Internet Banking Security</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Card Security</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Online Security</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Bank Verification Number (BVN)</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Whistle Blower</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Dispense Error</a>
										</router-link>
										<router-link  :to="{name: 'site.contact'}" tag="li">
											<a data-nav>Contact Us</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Locate a Branch</a>
										</router-link>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3">
					<h5 class="title">Quick Links</h5>
					<ul class="contact-box">
						<li class="pl-3">
							<div class="unit unit-horizontal unit-spacing-xxs">
								<div class="unit-body">
									<ul class="list-links">
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Scam Alert</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Replace Your Card</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>e-Channels Products</a>
										</router-link>
										<router-link  :to="{name: 'site.contact'}" tag="li">
											<a data-nav>Amju Mobile App</a>
										</router-link>
										<router-link  :to="{name: 'site.contact'}" tag="li">
											<a data-nav>Verve Cards</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Reactivate Dormant Account</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Request Cheque Book</a>
										</router-link>
										<router-link  :to="{name: 'site.root'}" tag="li">
											<a data-nav>Letter of Credit Application Form</a>
										</router-link>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3">
					<h5 class="title">Get in Touch</h5>
					<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
						method="post" @submit.prevent="sendMessage">
						<div class="form-wrap">
							<input class="form-input" id="contact-name-footer" type="text" name="name" v-model="details.name"
								data-constraints="@Required">
							<label class="form-label" for="contact-name-footer">Name</label>
						</div>
						<div class="form-wrap">
							<input class="form-input" id="contact-email-footer" type="email" name="email" v-model="details.email"
								data-constraints="@Email @Required">
							<label class="form-label" for="contact-email-footer">E-mail</label>
						</div>
						<div class="form-wrap">
							<label class="form-label" for="contact-message-footer">Message</label>
							<textarea class="form-input" id="contact-message-footer" name="message" v-model="details.msg"
								data-constraints="@Required"></textarea>
						</div>
						<button class="button button-primary" type="submit">Send</button>
					</form>
				</div>
			</div>

			<p class="rights">
				<span>&copy;&nbsp; </span>
				<span class="copyright-year"></span>
				<span>&nbsp;</span>
				<span>All rights reserved</span>
				<span>.&nbsp;</span>
				<router-link data-nav :to="{name: 'site.privacy'}">Privacy Policy</router-link>
			</p>
		</div>
	</footer>
</template>

<script>
  import { siteContact, CONSTANTS } from "@assets/js/config";
  export default {
    name: "SiteFooter",
    data: () => ({
      details: {},
      CONSTANTS
    }),
    methods: {
      sendMessage() {
        if (window.hasValidationErrors) {
          Toast.fire({
            type: "error",
            text: "There are errors in the form",
            title: "Oops! "
          });
        } else {
          axios.post(siteContact, { ...this.details }).then(rsp => {
            console.log(rsp);

            if (rsp && rsp.status == 201) {
              this.details = {};
              swal.fire("Sent", `You will be contacted shortly`, "success");
            }
          });
        }
      }
    }
  };
</script>

<style lang="scss" scoped>
  .footer-1 {
    a {
      color: #f5f5f5;
    }
  }
</style>
