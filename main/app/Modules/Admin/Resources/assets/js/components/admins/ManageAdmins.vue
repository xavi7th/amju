<template>
  <main>
    <page-header pageTitle="Dashboard"></page-header>
    <div class="content">
      <div class="card">
        <div class="card-body">Manage Admins</div>
      </div>
    </div>
  </main>
</template>

<script>
  import PageHeader from "@admin-components/partials/PageHeaderComponent";
  export default {
    name: "ManageAdmins",
    components: {
      PageHeader
    },
    mounted() {
      this.$emit("page-loaded");
    },
    beforeDestroy() {
      // this.$unloadScript("/js/dashboard-main.js");
    }
  };
</script>

<style lang="scss" scoped>
</style>
