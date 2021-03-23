<?php
    /**
     * 
     * Template Name: About Us
     * 
     */
    get_header();
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>About</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
          </div>
        </div>
      </div>
      <div class="container py-3">
       <?php get_breadcrumb(); ?>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">
              <?php get_template_part('template-parts/front-page/abouts/about','one'); ?>
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

    <!-- ======= Work Process Section ======= -->
    <section id="work-process" class="work-process">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Work Process</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <?php
              $args = array(
                    'posts_per_page'       => 1,
                    'post_type'	     => 'work-process',
                    'post_status'	     => 'publish',
                    'paged' 		     => get_query_var( 'paged')
                );
                $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) :
                                $query->the_post();
              ?>
        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <?php the_post_thumbnail('',['img-fluid']); ?>
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3><?php esc_html( the_title()); ?></h3>
             <?php echo get_the_content(); ?>
          </div>
        </div>
        <?php endwhile;
                  else : 
                get_template_part('template-parts/content', 'none');
        endif; 
           wp_reset_postdata();
          ?>
      </div>
    </section><!-- End Work Process Section -->

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <?php
              $args = array(
                    'posts_per_page'       => 1,
                    'post_type'	     => 'skills',
                    'post_status'	     => 'publish',
                    'paged' 		     => get_query_var( 'paged')
                );
                $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) :
                                $query->the_post();
              ?>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <?php esc_url( the_post_thumbnail('',['class'=>'img-fluid'])); ?>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?php esc_html(the_title()); ?></h3>
            <?php echo get_the_content(); ?>
            <div class="skills-content">

              <div class="progress">
                <span class="skill">HTML <i class="val"><?php echo get_post_meta($post->ID, 'html', true); ?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_post_meta($post->ID, 'html', true); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val"><?php echo get_post_meta($post->ID, 'css', true); ?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_post_meta($post->ID, 'css', true); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val"><?php echo get_post_meta($post->ID, 'javascript', true); ?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_post_meta($post->ID, 'javascript', true); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val"><?php echo get_post_meta($post->ID, 'photoshop', true); ?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_post_meta($post->ID, 'photoshop', true); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
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
    </section><!-- End Our Skills Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Clients</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
       
        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
          <?php
              $args = array(
                    'post_type'	     => 'clients',
                    'post_status'	     => 'publish',
                    'paged' 		     => get_query_var( 'paged')
                );
                $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) :
                                $query->the_post();
              ?>
            <div class="swiper-slide"><?php esc_html( the_post_thumbnail('',['class'=>'img-fluid'])); ?></div>
            <?php endwhile;
                  else : 
                get_template_part('template-parts/content', 'none');
        endif; 
           wp_reset_postdata();
          ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>
