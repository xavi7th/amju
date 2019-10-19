<template>
  <div class="plyenz-main">
    <div class="container">
      <div class="row">
        <!-- card -->
        <div class="col-lg-8 col-md-12">
          <div class="card card-animation">
            <div class="card-body pb-0">
              <div class="widget8">
                <div class="widget8-label">Total Balance</div>
                <div class="widget8-value">
                  <div class="mr-20">$27.317</div>
                </div>
                <div class="mt-30">
                  <a href class="btn btn-primary btn-round mr-5">Add Deposit</a>
                  <a href class="btn btn-dark btn-round">Make Withdrawal</a>
                </div>
                <div class="card-row">
                  <hr class="my-30" />
                  <div class="widget8-chart">
                    <div class="mx-30 mb-30 flex a-i-center j-c-between">
                      <span class="fs-16 text-light">Account trade statistic chart</span>
                      <!-- <form>
                        <select class="form-control">
                          <option>Today</option>
                          <option>This Week</option>
                          <option>This Month</option>
                          <option>This Year</option>
                        </select>
                      </form>-->
                    </div>

                    <canvas id="chart-area" height="100"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card #end -->

        <!-- card -->
        <div class="col-lg-4 col-md-12">
          <div class="card card-hover card-animation">
            <div class="card-body">
              <div class="flex a-i-center j-c-between py-3 mb-10">
                <div class>
                  <span class="d-block fs-24 fw-600 mt-10">$21,117</span>
                  <span class="text-light">Deposit Amount</span>
                </div>
                <i class="cc BTC fs-40" title="BTC"></i>
              </div>
              <div id="morris-line-1" class="h-25"></div>
            </div>
          </div>

          <!-- card -->
          <div class="card card-hover card-animation">
            <div class="card-body">
              <div class="flex a-i-center j-c-between py-3 mb-10">
                <div class>
                  <span class="d-block fs-24 fw-600 mt-10">$12,473</span>
                  <span class="text-light">Total Profit</span>
                </div>
                <i class="cc DOGE fs-40" title="DOGE"></i>
              </div>
              <div id="morris-line-2" class="h-25"></div>
            </div>
          </div>

          <!-- card -->
          <div class="card card-hover card-animation">
            <div class="card-body">
              <div class="flex a-i-center j-c-between py-3 mb-10">
                <div class>
                  <span class="d-block fs-24 fw-600 mt-10">$7,614</span>
                  <span class="text-light">Withdrawal Target</span>
                </div>
                <i class="cc XRP fs-40" title="XRP"></i>
              </div>
              <div id="morris-line-3" class="h-25"></div>
            </div>
          </div>
        </div>
        <!-- card #end -->
      </div>

      <div class="row">
        <!-- card -->
        <div class="col-lg-3 col-md-6">
          <div class="card card-hover">
            <div class="p-30 flex a-i-center j-c-between">
              <i class="cc ZEC fs-26"></i>
              <div>
                <span class="fs-20 fw-600">124.320</span>
                <span class="status-up">
                  <i class="fa fa-angle-up fs-14"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- card #end -->

        <!-- card -->
        <div class="col-lg-3 col-md-6">
          <div class="card card-hover">
            <div class="p-30 flex a-i-center j-c-between">
              <i class="cc XEM fs-26"></i>
              <div>
                <span class="fs-20 fw-600">14.104</span>
                <span class="status-down">
                  <i class="fa fa-angle-down fs-14"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- card #end -->

        <!-- card -->
        <div class="col-lg-3 col-md-6">
          <div class="card card-hover">
            <div class="p-30 flex a-i-center j-c-between">
              <i class="cc XMR fs-26"></i>
              <div>
                <span class="fs-20 fw-600">1.495</span>
                <span class="status-up">
                  <i class="fa fa-angle-up fs-14"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- card #end -->

        <!-- card -->
        <div class="col-lg-3 col-md-6">
          <div class="card card-hover">
            <div class="p-30 flex a-i-center j-c-between">
              <i class="cc DCR fs-26"></i>
              <div>
                <span class="fs-20 fw-600">89.000</span>
                <span class="status-down">
                  <i class="fa fa-angle-down fs-14"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- card #end -->
      </div>

      <!-- card -->
      <div class="card">
        <div class="card-title">
          <h4>ACTIVE ORDER</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-whs-nowrap">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Date</th>
                  <th>Amount</th>
                  <th>Price</th>
                  <th>Fee</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-success">Buy</td>
                  <td>04.10 - 09:20</td>
                  <td>
                    <i class="cc BTC-alt"></i> 0.67564
                  </td>
                  <td>$7500.10</td>
                  <td>
                    <span class="text-danger">-$8.00</span>
                  </td>
                  <td>
                    <div class="badge badge-success badge-pill w-75">Completed</div>
                  </td>
                </tr>
                <tr>
                  <td class="text-success">Buy</td>
                  <td>04.10 - 09:24</td>
                  <td>
                    <i class="cc BTC-alt"></i> 0.32510
                  </td>
                  <td>$3724.31</td>
                  <td>
                    <span class="text-danger">-$7.00</span>
                  </td>
                  <td>
                    <div class="badge badge-success badge-pill w-75">Completed</div>
                  </td>
                </tr>
                <tr>
                  <td class="text-danger">Sell</td>
                  <td>04.10 - 09:27</td>
                  <td>
                    <i class="cc BTC-alt"></i> 0.22514
                  </td>
                  <td>$2321.91</td>
                  <td>
                    <span class="text-danger">-$5.00</span>
                  </td>
                  <td>
                    <div class="badge badge-success badge-pill w-75">Completed</div>
                  </td>
                </tr>
                <tr>
                  <td class="text-success">Buy</td>
                  <td>04.10 - 09:24</td>
                  <td>
                    <i class="cc BTC-alt"></i> 0.44510
                  </td>
                  <td>$5254.09</td>
                  <td>
                    <span class="text-danger">-$8.00</span>
                  </td>
                  <td>
                    <div class="badge badge-warning badge-pill w-75">Pending</div>
                  </td>
                </tr>
                <tr>
                  <td class="text-danger">Sell</td>
                  <td>04.10 - 09:24</td>
                  <td>
                    <i class="cc BTC-alt"></i> 0.30510
                  </td>
                  <td>$4879.76</td>
                  <td>
                    <span class="text-danger">-$7.00</span>
                  </td>
                  <td>
                    <div class="badge badge-danger badge-pill w-75">Cancel</div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- card #end -->

      <div class="row">
        <!-- card -->
        <div class="col-lg-4 col-md-12">
          <div class="card">
            <div class="card-title">
              <h4>CONVERSION</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>From</label>
                      <select class="form-control">
                        <option>Bitcoin</option>
                        <option>Ripple</option>
                        <option>Ethereum</option>
                        <option>Litecoin</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>To</label>
                      <select class="form-control">
                        <option>USD</option>
                        <option>Ripple</option>
                        <option>Ethereum</option>
                        <option>Litecoin</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Amount</label>
                      <div class="input-group">
                        <input type="text" class="form-control m-input" value="0.54" />
                        <div class="input-group-append">
                          <span class="input-group-text">BTC</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Price</label>
                      <div class="input-group">
                        <input type="text" class="form-control m-input" value="0.54" />
                        <div class="input-group-append">
                          <span class="input-group-text">USD</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mt-10">
                      <button class="btn btn-primary btn-round btn-block">Conversion</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- card #end -->

        <!-- card  -->
        <div class="col-lg-4 col-md-12">
          <div class="card">
            <div class="card-title">
              <h4>PORTFOLIO</h4>
            </div>
            <div class="card-body">
              <div class="widget2">
                <div class="chart-wrapper">
                  <canvas id="chart-donut"></canvas>
                </div>
                <div class="widget2-list">
                  <div class="widget2-item">
                    <div>
                      <span class="badge badge-primary badge-dot badge-md"></span>
                      <span>Bitcoin (BTC)</span>
                    </div>
                    <span class="value">66%</span>
                  </div>
                  <div class="widget2-item">
                    <div>
                      <span class="badge badge-info badge-dot badge-md"></span>
                      <span>Ethereum (ETH)</span>
                    </div>
                    <span class="value">25%</span>
                  </div>
                  <div class="widget2-item">
                    <div>
                      <span class="badge badge-danger badge-dot badge-md"></span>
                      <span>Ripple (XRP)</span>
                    </div>
                    <span class="value">9%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card #end -->

        <!-- card  -->
        <div class="col-lg-4 col-md-12">
          <div class="card">
            <div class="card-body p-0">
              <ul class="nav nav-tabs px-30">
                <li class="nav-item" role="presentation">
                  <a
                    href="#tab-1-1"
                    class="nav-link active show"
                    data-toggle="tab"
                    aria-expanded="true"
                  >Buy</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a href="#tab-1-2" class="nav-link" data-toggle="tab" aria-expanded="true">Sell</a>
                </li>
              </ul>
              <div class="tab-content px-30 pb-30">
                <div class="tab-pane in active" id="tab-1-1">
                  <form>
                    <div class="form-group">
                      <label>
                        <strong>Amount</strong>
                      </label>
                      <div class="input-group">
                        <input type="text" class="form-control m-input" value=".00012354" />
                        <div class="input-group-append">
                          <span class="input-group-text">BTC</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Price Per Unit</label>
                      <div class="input-group">
                        <input type="text" class="form-control m-input" value="4.172.00" />
                        <div class="input-group-append">
                          <span class="input-group-text">USD</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Total Coast</label>
                      <div class="input-group">
                        <input type="text" class="form-control m-input" value="2.250.11" />
                        <div class="input-group-append">
                          <span class="input-group-text">USD</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-20 mb-0">
                      <button class="btn btn-success btn-round btn-w-xs">Buy</button>
                    </div>
                  </form>
                </div>

                <div class="tab-pane" id="tab-1-2">
                  <form>
                    <div class="form-group">
                      <label>
                        <strong>Amount</strong>
                      </label>
                      <div class="input-group">
                        <input type="text" class="form-control m-input" value=".00012354" />
                        <div class="input-group-append">
                          <span class="input-group-text">BTC</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Price Per Unit</label>
                      <div class="input-group">
                        <input type="text" class="form-control m-input" value="4.172.00" />
                        <div class="input-group-append">
                          <span class="input-group-text">USD</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Total Coast</label>
                      <div class="input-group">
                        <input type="text" class="form-control m-input" value="2.250.11" />
                        <div class="input-group-append">
                          <span class="input-group-text">USD</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-20 mb-0">
                      <button class="btn btn-danger btn-round btn-w-xs">Sell</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card #end -->
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "UserDashboard",
    components: {},
    created() {
      // axios.get(howItWorksChart).then(rsp => {
      //   /**
      //    *? Convert string to DOM Nodes
      //    */
      //   let frag = document
      //     .createRange()
      //     .createContextualFragment(rsp.data.template);
      //   document.querySelector("#chartHow").replaceWith(frag);
      // });
    },
    mounted() {
      // this.getForexRatesChart();
      // this.getChart1();
      // this.getChart6();
      // this.getChart3();
      // this.getChart4();
      // this.getChart5();
      this.$emit("page-loaded");
    },
    methods: {
      getChart1() {
        axios.get("/api/user-dashboard-chart1").then(rsp => {
          let frag = document
            .createRange()
            .createContextualFragment(rsp.data.template);
          document.querySelector("#chart1").replaceWith(frag);
        });
      },
      getChart6() {
        axios.get("/api/user-dashboard-chart6").then(rsp => {
          let frag = document
            .createRange()
            .createContextualFragment(rsp.data.template);
          document.querySelector("#chart6").replaceWith(frag);
        });
      },
      getChart3() {
        axios.get("/api/user-dashboard-chart3").then(rsp => {
          let frag = document
            .createRange()
            .createContextualFragment(rsp.data.template);
          document.querySelector("#chart3").replaceWith(frag);
        });
      },
      getChart4() {
        axios.get("/api/user-dashboard-chart4").then(rsp => {
          let frag = document
            .createRange()
            .createContextualFragment(rsp.data.template);
          document.querySelector("#chart4").replaceWith(frag);
        });
      },
      getChart5() {
        axios.get("/api/user-dashboard-chart5").then(rsp => {
          let frag = document
            .createRange()
            .createContextualFragment(rsp.data.template);
          document.querySelector("#chart5").replaceWith(frag);
        });
      }
    }
  };
</script>

<style lang="scss" scoped>
</style>
