<template>
  <!-- header -->
  <header class="header layout-top-menu-dark">
    <div class="header-top">
      <div class="container">
        <!-- header left -->
        <div class="header-left">
          <div class="header-logo logo-type">
            <router-link :to="{name:'dashboard.root'}">CFxPro</router-link>
          </div>
        </div>
        <!-- header left #end -->

        <!-- header right -->
        <div class="header-right">
          <!-- dropdown  -->
          <div class="dropdown-logged-user dropdown">
            <a href data-toggle="dropdown" class="avatar dropdown-toggle">
              <img src="/img/avatar1.jpg" class="img-responsive" alt="..." />
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <ul>
                <li>
                  <a href class="dropdown-item">
                    <i class="fas fa-user-circle"></i> My Profile
                  </a>
                </li>

                <li>
                  <a href class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i> Logout
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- dropdown #end -->
        </div>
        <!-- header right #end -->
      </div>
    </div>
    <div class="header-menu">
      <div class="container">
        <nav class="nav">
          <ul>
            <li class="active">
              <a href="#">
                <i class="fas fa-th-large icon"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-gg icon"></i>
                <span>Make Investment</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fas fa-money-bill-wave icon"></i>
                <span>Make Withdrawal</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- header #end -->
</template>

<script>
  export default {};
</script>

<style lang="scss" scoped>
  .header-menu {
    .nav {
      > ul {
        justify-content: space-evenly;

        li {
          padding: 0 25px;
          transition: 300ms ease background-color;

          &:hover {
            background-color: #2b1e93;
          }
        }
      }
    }
  }
</style>
