<template>
  <div>
    <section class="section section-lg custom-image-section">
      <div class="container relative-container">
        <div class="row row-30 row-md-60 justify-content-between">
          <div class="col-md-12">
            <h2>Information Security Management System Policy</h2>
          </div>
          <div class="col-12">
            <div class="heading-6">
              AMJU Unique MFB is committed to maintaining and improving information security processes by adopting an information security management system. This system provides a framework for integrating the ISO 27001:2022 standard.
            </div>
            <p>
              The company defines our core values for the Information Security Management System as follows:
            </p>

            <div class="policy-values">
              <ul class="list-marked">
                <li>To ensure uninterrupted availability of all key business resources required to support essential (or critical) business activities.</li>
                <li>To reduce the number of information security and business continuity high-priority risks on AMJU Unique MFB's risk register.</li>
                <li>To provide for an orderly and expedited recovery/continuity of critical business processes after a disruptive incident.</li>
                <li>To endeavour to ensure that all persons employed by us are competent to carry out the specific work tasks by providing all necessary information, instruction, training, and supervision.</li>
                <li>To reduce or avoid information security breaches and related losses.</li>
                <li>To Ensure Compliance with AMJU Unique MFB's Contractual, Regulatory, and Legal requirements and reduce information security-related regulatory sanctions/penalties.</li>
                <li>To ensure Information collected, held, and used by the organization is appropriately protected and available in line with business requirements.</li>
                <li>To improve information security culture and consciousness in the organization.</li>
                <li>To provide training in information security for key resources</li>
                <li>Create awareness among all staff on the needs and responsibilities of Information Security Management.</li>
                <li>To ensure that the Confidentiality, Integrity, and Availability of information is maintained throughout business functions and processes</li>
                <li>To ensure information is only accessible to authorized persons from within or outside the company, and minimize damage by preventing and reducing the impact of security incidents</li>
                <li>To optimize our business processes to always strive for a zero defect and no waste attitude</li>
                <li>To satisfy the requirements of the services provided</li>
                <li>To ensure data protection and data privacy of customer information is maintained</li>
                <li>To ensure continual improvement of our Information Security Management system.</li>
              </ul>
            </div>

            <p>
              The organization's Information Security Management System (ISMS) policy serves as the foundation for establishing ISMS objectives. This policy undergoes an annual review by Top Management, with more frequent reviews conducted as necessary. It is ensured that all employees and associated personnel are thoroughly familiarized with this policy. Furthermore, the policy is readily accessible to the public, stakeholders, and other interested parties upon request.
            </p>

            <div class="signature-section">
              <p><strong>Signed by Management:</strong></p>
              <div class="signature-block">
                <div class="media-wrap">
                  <img src="/img/amju-ceo-sign.png" alt width="270" height="270" />
                </div>
                <p><strong>MD/CEO</strong></p>
                <p>AMJU Unique Microfinance Bank Limited</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
  export default {
    name: "InformationSecurityPolicyPage",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$emit("unload-main");
    }
  };
</script>

<style lang="scss" scoped>
.policy-values {
  margin: 20px 0;

  ul.list-marked {
    padding-left: 20px;

    li {
      margin-bottom: 10px;
      line-height: 1.5;
    }
  }
}

.signature-section {
  margin-top: 30px;
  padding-top: 20px;
  border-top: 1px solid #e0e0e0;
}

.signature-block {
  margin-top: 15px;

  p {
    margin-bottom: 5px;
  }
}
</style>
