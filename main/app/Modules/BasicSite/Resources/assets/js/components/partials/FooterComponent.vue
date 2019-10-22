<template lang="html">


			<footer class="section footer-1">
				<div class="container">
					<div class="row row-40 wow fadeIn">
						<div class="col-md-6 col-lg-4">
							<h5 class="title">About Us</h5>
							<p>Banque is the leading financial establishment providing high-quality international banking services.
								Our success is attributed to our loyal customers and to the talent and dedication of our professional
								and skilled employees. We are always ready to partner with you by offering full financial support to our
								clients worldwide.</p><a class="footer-logo" href="/"><img
									src="img/logo-round.png" alt="" width="150" height="58" /></a>
						</div>
						<div class="col-md-6 col-lg-4">
							<h5 class="title">Twitter Feed</h5>
							<!-- RD Twitter Feed-->
							<div class="twitter" data-twitter-username="leinad8th" data-twitter-date-hours=" hours ago"
								data-twitter-date-minutes=" minutes ago">
								<div class="tweet" data-twitter-type="tweet">
									<div class="tweet-left">
										<div class="icon fa-twitter"></div>
									</div>
									<div class="tweet-right">
										<div class="twitter-text text-dark" data-tweet="text"></div>
										<div class="twitter-meta">
											<div class="twitter-name" data-screen_name="text"></div>
										</div>
									</div>
								</div>
								<div class="tweet" data-twitter-type="tweet">
									<div class="tweet-left">
										<div class="icon fa-twitter"></div>
									</div>
									<div class="tweet-right">
										<div class="twitter-text text-dark" data-tweet="text"></div>
										<div class="twitter-meta">
											<div class="twitter-name" data-screen_name="text"></div>
										</div>
									</div>
								</div>
								<div class="tweet" data-twitter-type="tweet">
									<div class="tweet-left">
										<div class="icon fa-twitter"></div>
									</div>
									<div class="tweet-right">
										<div class="twitter-text text-dark" data-tweet="text"></div>
										<div class="twitter-meta">
											<div class="twitter-name" data-screen_name="text"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-10 col-lg-4">
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
					<!-- Rights-->
					<p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>All
							rights reserved</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
				</div>
			</footer>

</template>

<script>
  import { siteContact } from "@assets/js/config";
  export default {
    name: "SiteFooter",
    data: () => ({
      details: {}
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
