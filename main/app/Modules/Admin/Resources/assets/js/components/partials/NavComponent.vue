<template>
  <aside class="main-navigation">
    <nav data-simplebar>
      <div class="header">
        <div class="logo">
          <div class="logo-type">
            <router-link :to="{name:'admin.root'}">
              <img src="/img/logo-round-small.png" alt="Amju Unique Logo" class="loader-img" />
              <span id="logo-caption">
                amju
                <span>unique</span>
              </span>
            </router-link>
          </div>
        </div>
      </div>
      <ul class="menu">
        <li class="menu-category">ADMIN</li>

        <li
          v-for="(item, index) in routes.filter(x => x.path !== '*')"
          :key="index"
          :class="{'nav-sub':!item.name}"
        >
          <router-link :to="item.path" v-if="item.name">
            <i class="fa fa-home nav-icon" :class="item.meta.iconClass"></i>
            {{item.meta.menuName}}
          </router-link>
          <a href="#" v-else>
            <i class="fa fa-desktop nav-icon" v-bind:class="item.meta.iconClass"></i>
            {{item.meta.menuName}}
          </a>
          <ul class="sub-menu" v-if="item.children">
            <li v-for="childItem in item.children" :key="childItem.name">
              <router-link :to="childItem.path">{{childItem.meta.menuName}}</router-link>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </aside>
</template>

<script>
  export default {
    name: "AdminNav",
    computed: {
      routes() {
        return this.$router.options.routes;
      }
    }
  };
</script>

<style lang="scss" scoped>
  .logo-caption {
    color: #24adef;
  }
  .loader-img {
    margin: 55px auto 15px;
    height: 60px;
  }
</style>
