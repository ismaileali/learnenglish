<?php
/**
 *   Template Name: Fornt Page
 * Template part for displaying page content in fornt-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package learnenglish
 * 
 */
$reduxFwk;

get_header(); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1><?php echo $reduxFwk['banner-text']; ?></h1>
      <h2><?php echo $reduxFwk['banner-description']; ?></h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">
                 <?php get_template_part('template-parts/front-page/abouts/about', 'one'); ?>
            </div>
          </div>
        </div>

        <div class="row">
        <?php
              $args = array(
                          
                'posts_per_page'       => 1,
                          'post_type'	     => 'abouts',
                          'post_status'	     => 'publish',
                          'paged' 		     => get_query_var( 'paged')
                );
                $query = new WP_Query( $args );
                            if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) :
                                $query->the_post();
              ?>
               <?php get_template_part('template-parts/front-page/abouts/about', 'tow'); ?>
          <?php endwhile;
                  else : 
                get_template_part('template-parts/content', 'none');
        endif; 
           wp_reset_postdata();
          ?>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="fade-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
      <div class="container">

        <div class="section-title pt-5" data-aos="fade-up">
          <h2>Our Services</h2>
        </div>

        <div class="row">
        <?php
              $args = array(
                      'posts_per_page' => 6, 
                      'category_name'   => 'our-services',
                      'post_type' => 'post',
                      'post_status' => 'publish',
                      'paged' => get_query_var('paged')
                    );  
              $query = new WP_Query( $args );
                    if($query->have_posts() ) :
                          while ($query->have_posts() ) :
                                $query->the_post(); ?>
               <?php get_template_part('template-parts/front-page/servicess/services', 'one'); ?>
          <?php endwhile;
                  else : 
                      get_template_part('template-parts/content', 'none');
                  endif; 
                wp_reset_postdata();
               ?>
        </div>
      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>