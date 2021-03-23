<?php
/*
 *
 * Template Name: portfolio
 * 
 */
get_header(); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Portolio</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
          </div>
        </div>
      </div>
      <div class="container py-3">
          <?php get_breadcrumb(); ?>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".webdesign">Web Design</li>
              <li data-filter=".wordpress">Wordpress</li>
              <li data-filter=".app">App</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up">
        <?php
            $args = array(         
                  'posts_per_page'       => 9,
                  'post_type'	           => 'portfolio',
                  'post_status'	         => 'publish',
                  'paged' 		           => get_query_var( 'paged')
                  );
                  $query = new WP_Query( $args );
                              if ( $query->have_posts() ) :
                                  while ( $query->have_posts() ) :
                                  $query->the_post();
              ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?php the_field('select_the_category'); ?>">
            <div class="portfolio-wrap">
              <?php esc_html( the_post_thumbnail('',['class'=>'img-fluid'])); ?>
              <div class="portfolio-info">
                <h4><?php echo esc_html( wp_trim_words(get_the_title(),3)); ?></h4>
                <p><?php echo wp_trim_words(get_the_content(),4); ?></p>
                <div class="portfolio-links">
                  <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php the_title_attribute( 'before=&after=' ); ?>"><i class="bx bx-plus"></i></a>
                  <a href="<?php the_permalink(); ?>" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile;
                  else : 
                get_template_part('template-parts/content', 'none');
                endif; 
                wp_reset_postdata();
          ?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>