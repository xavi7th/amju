<template>
  <section class="blog-section spad">
    <div class="container">
      <div class="section-title text-center">
        <h2>Latest News</h2>
        <p>Keeping in touch with the .</p>
      </div>
      <div class="row">
        <div class="col-md-4" v-for="item in latestNews">
          <div class="blog-item">
            <figure class="blog-thumb">
              <img :src="item.urlToImage" alt />
            </figure>
            <div class="blog-text">
              <div class="post-date">{{ (new Date(item.publishedAt).toDateString()) }}</div>
              <h4 class="blog-title">
                <a :href="item.url" :title="item.description" target="_blank">{{ item.title }}</a>
              </h4>
              <div class="post-meta">
                <a>
                  <span>by</span>
                  {{ item.author || 'CFxPro.com' }}
                </a>
                <a>
                  <span>source</span>
                  {{ item.source.name }}
                </a>
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
    name: "LatestNews",
    data: () => ({
      latestNews: {}
    }),
    created() {
      axios
        .get(
          "https://newsapi.org/v2/everything?q=forex&pageSize=3&sortBy=publishedAt&apiKey=63bdc69c222946a29d968cd8513b6093",
          {
            transformRequest: [
              (data, headers) => {
                delete headers.common["X-CSRF-TOKEN"];
                delete headers.common["X-Requested-With"];
                return data;
              }
            ]
          }
        )
        .then(({ data: { articles }, status }) => {
          this.latestNews = articles;
        });
      this.$emit("clients-loaded");
    }
  };
</script>

<style scoped>
  .blog-text .post-meta a {
    color: #363c44;
  }
</style>
