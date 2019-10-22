<template>
  <!-- Latest Blog Posts-->
  <section class="section section-md bg-gray-100">
    <div class="container">
      <div class="row row-fix justify-content-center text-center">
        <div class="col-md-10 col-lg-8 col-xl-6">
          <h2 class="custom-title">
            <span>Latest Blog Posts</span>
          </h2>
          <p>
            Our team regularly publishes articles about banking & financial news as well as updates on special
            offers and tips from our consultants.
          </p>
        </div>
      </div>
      <div class="row row-40 justify-content-center">
        <div class="col-md-4 wow fadeInLeft">
          <article class="post-modern">
            <div class="media-wrapper">
              <a href="single-post.html">
                <img src="img/modern-blog-1-370x240.jpg" alt width="370" height="240" />
              </a>
              <ul class="list-tags">
                <li>
                  <a class="tag" href="single-post.html">News</a>
                </li>
              </ul>
            </div>
            <div class="post-body">
              <div class="post-author">
                <a class="img-author" href="single-post.html">
                  <img src="img/modern-author-1-72x72.jpg" alt width="72" height="72" />
                </a>
                <div class="post-author-name">Martha Ryan</div>
              </div>
              <h5 class="post-title">
                <a href="single-post.html">7 Banking Services That Can Save Retirees Money</a>
              </h5>
              <p class="post-exeption">
                Long gone are the days in which you need to visit a branch to do your
                banking. Today, banks offer an array of services...
              </p>
              <div class="post-date">May 23, 2018, at 8:49 am</div>
            </div>
          </article>
        </div>
        <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.1s">
          <article class="post-modern">
            <div class="media-wrapper">
              <a href="single-post.html">
                <img src="img/modern-blog-2-370x240.jpg" alt width="370" height="240" />
              </a>
              <ul class="list-tags">
                <li>
                  <a class="tag" href="single-post.html">Finance</a>
                </li>
              </ul>
            </div>
            <div class="post-body">
              <div class="post-author">
                <a class="img-author" href="single-post.html">
                  <img src="img/modern-author-2-72x72.jpg" alt width="72" height="72" />
                </a>
                <div class="post-author-name">Lawrence Kelly</div>
              </div>
              <h5 class="post-title">
                <a href="single-post.html">
                  Stocks Could Surge Another 10% Between Now And
                  2018
                </a>
              </h5>
              <p class="post-exeption">
                Experts point out that the next couple of months could become bumpy as the
                markets deal with uncertainty over...
              </p>
              <div class="post-date">May 23, 2018, at 8:49 am</div>
            </div>
          </article>
        </div>
        <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.1s">
          <article class="post-modern">
            <div class="media-wrapper">
              <a href="single-post.html">
                <img src="img/modern-blog-3-370x240.jpg" alt width="370" height="240" />
              </a>
              <ul class="list-tags">
                <li>
                  <a class="tag" href="single-post.html">Banks</a>
                </li>
              </ul>
            </div>
            <div class="post-body">
              <div class="post-author">
                <a class="img-author" href="single-post.html">
                  <img src="img/modern-author-3-72x72.jpg" alt width="72" height="72" />
                </a>
                <div class="post-author-name">John Doe</div>
              </div>
              <h5 class="post-title">
                <a href="single-post.html">Wall Street Analysts Are Nailing It This Year</a>
              </h5>
              <p class="post-exeption">
                Wall Street analysts have made the right calls so far this year. Analysts' 50
                most loved stocks at the start of the year are...
              </p>
              <div class="post-date">May 23, 2018, at 8:49 am</div>
            </div>
          </article>
        </div>
      </div>
      <div class="button-wrap-lg text-center">
        <a class="button button-lg button-primary" href="classic-blog.html">View All Blog Posts</a>
      </div>
    </div>

    <div class="container">
      <div class="section-title text-center">
        <h2>Latest News</h2>
        <p>Keeping in touch with the .</p>
      </div>
      <div class="row">
        <div class="col-md-4" v-for="(item, idx) in latestNews" :key="idx">
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
                  {{ item.author }}
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
