<template>
  <section class="section section-lg bg-gray-100">
    <div class="container">
      <div class="row row-fix justify-content-center text-center">
        <div class="col-md-10 col-xl-7">
          <h2 class="custom-title">
            <span>Who We Are</span>
          </h2>
        </div>
      </div>
      <div class="row row-20 justify-content-center justify-content-lg-between pb-5">
        <div class="col-md-10 col-lg-6">
          <!-- <img class="img-bordered" src="img/index-1-2-570x352.jpg" alt width="570" height="352" /> -->
          <video
            width="570"
            height="352"
            controls
            poster="/img/amju-intro-video-poster.png"
            controlslist="nodownload"
            preload="none"
            playsinline
          >
            <source src="/img/amju-intro-video.mp4" type="video/mp4" />
            <source src="/img/amju-intro-video.webm" type="video/webm" />
            <a href="/img/amju-intro-video.mp4">download video</a>
          </video>
        </div>
        <div class="col-md-10 col-lg-6 col-xl-5">
          <div class="text-block-2">
            <h6>
              Amju Unique Micro Finance Bank was founded in ???? to introduce the new level of financial services in Nigeria. We are still
              dedicated to the success of our clients.
            </h6>
            <p>
              At Amju Unique Micro Finance Bank, we are guided by a common purpose to help make financial lives better by connecting
              clients and communities to the resource they need to be successful. We are driving growth – helping to
              create jobs, develop communities, foster economic mobility and address our society’s biggest challenges –
              while managing risk and providing a return to our clients and our shareholders.
            </p>
            <router-link
              class="button button-lg button-primary"
              :to="{name: 'site.about'}"
            >Learn More</router-link>
          </div>
        </div>
      </div>
      <div class="row row-30 row-flex mt-5">
        <div class="col-sm-6 col-lg-3 wow fadeInRight">
          <blockquote class="quote quote-default">
            <div class="quote-icon mdi mdi-format-quote"></div>
            <div class="quote-body">
              <q class="heading-6">
                At Amju Unique Micro Finance Bank, we aim to provide top quality banking services to a greater number of
                individual and corporate customers than any other microfinance bank in Nigeria.
              </q>
            </div>
            <div class="quote-meta">
              <div class="author">
                <cite>Ososuakpor Jonathan</cite>
              </div>
              <div class="position">MD/CEO, Amju Unique Micro Finance Bank</div>
            </div>
          </blockquote>
        </div>

        <!-- pick from DB -->
        <div class="col-sm-6 col-lg-3 wow fadeInRight">
          <article class="post-modern">
            <div class="media-wrapper">
              <router-link data-nav :to="{name: 'site.root'}">
                <img src="/img/amju-ceo.jpg" alt width="370" height="240" />
              </router-link>
              <ul class="list-tags">
                <!-- <li>
                  <router-link data-nav class="tag" :to="{name: 'site.root'}">Read More</router-link>
                </li>-->
              </ul>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay="0.1s">
          <article class="post-modern">
            <div class="media-wrapper">
              <router-link data-nav :to="{name: 'site.root'}">
                <img src="/img/customer-care.jpg" alt width="370" height="240" />
              </router-link>
              <ul class="list-tags">
                <!-- <li>
                  <router-link data-nav class="tag" :to="{name: 'site.root'}">Read More</router-link>
                </li>-->
              </ul>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay="0.1s">
          <article class="post-modern">
            <div class="media-wrapper">
              <router-link data-nav :to="{name: 'site.root'}">
                <img src="/img/slider-2-1920x879.jpg" alt width="370" height="240" />
              </router-link>
              <ul class="list-tags">
                <!-- <li>
                  <router-link data-nav class="tag" :to="{name: 'site.root'}">Read More</router-link>
                </li>-->
              </ul>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import { CONSTANTS } from "@assets/js/config";
  export default {
    name: "AboutSection",
    data() {
      return {
        CONSTANTS
      };
    },
    created() {
      this.$emit("about-loaded");
    }
  };
</script>

<style lang="scss" scoped>
  .post-modern {
    *:not(ul) {
      height: 100%;
    }
    ul {
      bottom: 0;
      left: 0;
      top: auto;
    }
    img {
      object-fit: cover;
      object-position: top;
    }
    .tag {
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
      font-size: 125%;
      font-weight: bold;
      padding: 5px 20px;
    }
  }
</style>
