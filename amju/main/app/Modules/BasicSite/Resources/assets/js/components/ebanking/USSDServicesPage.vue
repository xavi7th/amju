<template>
  <section class="section section-lg">
    <div class="container">
      <div class="row row-30 justify-content-between">
        <div class="col-md-6 col-xl-7">
          <ul class="list-xxl pl-5">
            <li>
              <h5>Overview</h5>
              <p>
                <b>CARRY YOUR BANK ROUND THE WORLD WITH *723*306#</b>.
                <i>*723*306#</i> Amju EazyBanking is a convenient,
                fast, secure, and affordable way to access your bank account 24 hours a day, 7 days a week
                through your mobile phone without internet data.
              </p>
            </li>
            <li>
              <h5>Main Features</h5>
              <ul class="list-marked">
                <li>Check Balance</li>
                <li>Transfer money</li>
                <li>Purchase airtime and data</li>
                <li>
                  Bills &amp; Payments: Cable TV Bills, Electricity Payments,
                  Sports and Gaming Payments, Taxes and Levies, etc.
                </li>
              </ul>
            </li>
            <li>
              <h5>How To Activate AMJU EAZYBANKING On Your Mobile Phone</h5>
              <ul class="list-marked">
                <li>Simply dial 723*306*0#</li>
                <li>it will prompt you to register first your PIN(You can create another PIN not your ATM)</li>
                <li>It will ask you to type the 723*306*0# again to make balance enquiry.</li>
                <li>Wait for 24hours which is the next day before you can be able to carry out transactions like bills payment, fund transfer and airtime recharge</li>
              </ul>
            </li>
            <li>
              <h5>BALANCE ENQUIRY</h5>
              <p>
                <b>Check your account balance anywhere, anytime.</b>
                To check for balances on any of your accounts, all you need to do is simply dial; *723*306*0# on your mobile phone
              </p>
            </li>
            <li>
              <h5>AIRTIME TOPUP FOR YOU</h5>
              <p>
                <b>Top UP your Airtime and stay connected with friends and family.</b>
                To load recharge card from your account on your phone and buy data simply dial; *723*306*amount# on your mobile phone .EG (*723*306*500#)
              </p>
            </li>
            <li>
              <h5>AIRTIME TOPUP FOR OTHERS</h5>
              <p>
                <b>Build a relationship with Top Up</b>
                To load recharge card from your account to others and buy data simply dial; *723*306*phone number*amount# on your mobile phone .EG (*723*306*09032258899*500#)
              </p>
            </li>
            <li>
              <h5>TRANSFER MONEY</h5>
              <p>
                <b>TAKE YOUR MONEY ROUND THE WORLD</b>
                To transfer your money from one bank to another simply dial; *723*306*account number*amount#
                on your mobile phone .EG (*723*306*3002055889*500#)
              </p>
            </li>
            <li>
              <h5>BILLS PAYMENT</h5>
              <p>
                <b>Pay DStv, PHCN and other Billers conveniently.</b>
                To pay for any kinds of bills payment simply dial; *723*306*biller code*amount# OR *723*306*biller
                code*customer id *amount# “THE CUSTOMER CODE” is the IUD of your decode. .EG (*723*306*1002589652*500#) OR
                (723*306*1002589652*558966*500#)
              </p>
            </li>
          </ul>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4">
          <div class="box-wrap-gray">
            <div class="thumbnail-1">
              <div class="media-wrap">
                <img src="/img/ussd-ict4d.png" alt width="270" height="270" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "USSDServices",
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      this.$unloadScript("/js/main.js");
    }
  };
</script>

<style lang="scss" scoped>
</style>
