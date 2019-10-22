<template lang="html">
	<footer class="section footer-1">
		<div class="container">
			<div class="row row-40 wow fadeIn">
				<div class="col-md-6 col-lg-3 text-center">
					<img src="img/logo-round.png" alt="" width="100" height="58" />
					<div class="group-md group-middle social-items">
						<a class="icon icon-md novi-icon mdi mdi-facebook" data-nav target="_blank" :href="CONSTANTS.facebook"></a>
						<a class="icon icon-md novi-icon mdi mdi-twitter" data-nav target="_blank" :href="CONSTANTS.twitter"></a>
						<a class="icon icon-md novi-icon mdi mdi-instagram" data-nav target="_blank" :href="CONSTANTS.instagram"></a>
						<a class="icon icon-md novi-icon mdi mdi-facebook-messenger" data-nav target="_blank" :href="CONSTANTS.facebookMessenger"></a>
						<a class="icon icon-md novi-icon mdi mdi-linkedin" data-nav target="_blank" :href="CONSTANTS.linkedin"></a>
						<a class="icon icon-md novi-icon mdi mdi-snapchat" data-nav target="_blank" :href="CONSTANTS.snapchat"></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<h5 class="title">Customer Services</h5>
					<ul class="contact-box">
						<li class="pl-3">
							<div class="unit unit-horizontal unit-spacing-xxs">
								<div class="unit-body">
									<ul class="list-links">
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Help Center</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Internet Banking Security</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Card Security</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Online Security</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Bank Verification Number (BVN)</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Whistle Blower</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Dispense Error</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.contact'}" tag="li">
											<a>Contact Us</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Locate a Branch</a>
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
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Scam Alert</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Replace Your Card</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>e-Channels Products</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.contact'}" tag="li">
											<a>Amju Mobile App</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.contact'}" tag="li">
											<a>Verve Cards</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Reactivate Dormant Account</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Request Cheque Book</a>
										</router-link>
										<router-link data-nav :to="{name: 'site.root'}" tag="li">
											<a>Letter of Credit Application Form</a>
										</router-link>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3">
					<h5 class="title">Get in Touch</h5>
					<!-- RD Mailform-->
					<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
						method="post" @submit.prevent="sendMessage">
						<div class="form-wrap">
							<input class="form-input" id="contact-name-footer" type="text" name="name"
								data-constraints="@Required">
							<label class="form-label" for="contact-name-footer">Name</label>
						</div>
						<div class="form-wrap">
							<input class="form-input" id="contact-email-footer" type="email" name="email"
								data-constraints="@Email @Required">
							<label class="form-label" for="contact-email-footer">E-mail</label>
						</div>
						<div class="form-wrap">
							<label class="form-label" for="contact-message-footer">Message</label>
							<textarea class="form-input" id="contact-message-footer" name="message"
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
				<router-link data-nav :to="{name: 'site.privacy'}">Privacy Policy</router-link>\
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
        axios.post(siteContact, { ...this.details }).then(rsp => {
          console.log(rsp);

          if (rsp && rsp.status == 201) {
            this.details = {};
            swal.fire("Sent", `You will be contacted shortly`, "success");
          }
        });
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
