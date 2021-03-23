<?php
/*
* 
*Template Name: single portfolio
*
*/

get_header(); ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Portfolio Details</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
          </div>
        </div>
      </div>
      <div class="container py-3">
          <?php get_breadcrumb(); ?>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
          <?php if(have_posts()) :
                  while(have_posts()) :
                      the_post(); ?>
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri();  ?>/assets/img/portfolio/portfolio-details-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri();  ?>/assets/img/portfolio/portfolio-details-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri();  ?>/assets/img/portfolio/portfolio-details-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: <?php the_field('select_the_category'); ?></li>
                <li><strong>Client</strong>: <?php the_field('client'); ?></li>
                <li><strong>Project date</strong>: <?php the_field('project_date'); ?></li>
                <li><strong>Project URL</strong>: <a href="<?php the_field('project_url'); ?>"><?php the_field('project_url'); ?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2><?php echo esc_html( get_the_title()); ?></h2>
               <?php echo get_the_content(); ?>
            </div>
          </div>
          <?php endwhile;
                endif;
                wp_reset_postdata();
          ?>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>