<?php get_header(); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container py-3">

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
	        <h3 class="page-title">
				<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'newstemplate' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h3>
        <div class="row">

          <div class="col-lg-8 entries">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                     get_template_part('template-parts/content','search');
            endwhile;
                  else : 
                      get_template_part('template-parts/content', 'none');
                  endif; 
                wp_reset_postdata();
               ?>

             

          </div><!-- End blog entries list -->

          <div class="col-lg-4">
           <?php get_sidebar(); ?>
          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>