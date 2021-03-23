<?php 
/**
 * 
 * Template Name: our Team
 * 
 */
get_header(); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Team</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
          </div>
        </div>
      </div>
      <div class="container py-4">
        <?php get_breadcrumb(); ?>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">
        <?php
            $args = array(
                  'post_type'	     => 'teams',
                  'post_status'	     => 'publish',
                  'paged' 		     => get_query_var( 'paged')
              );
              $query = new WP_Query( $args );
                      if ( $query->have_posts() ) :
                          while ( $query->have_posts() ) :
                                   $query->the_post();
        ?>
          <?php get_template_part('template-parts/team', get_post_type()); ?>
          <?php endwhile;
                  else : 
                  get_template_part('template-parts/content', 'none');
                  endif; 
                  wp_reset_postdata();
          ?>
        </div>
      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>