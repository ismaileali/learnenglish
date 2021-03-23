<?php
/**
 * 
 * 
 * Template Name: Services 
 * 
 *
 */
 get_header(); ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Services</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
          </div>
        </div>
      </div>
      <div class="container py-3">
        <?php get_breadcrumb(); ?>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <?php
              $args = array(
                    'posts_per_page'   => 4,
                    'category_name'    => 'features',
                    'post_type'	       => 'post',
                    'post_status'	     => 'publish',
                    'paged' 		       => get_query_var( 'paged')
                );
                $query = new WP_Query( $args );
                        if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) :
                                    $query->the_post();
          ?>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
            <div class="card" style="background-image: url(<?php  echo $url; ?>);">
              <div class="card-body">
                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php esc_html( the_title()); ?></a></h5>
                <p class="card-text"><?php echo wp_trim_words(get_the_content(),15); ?></p>
                <div class="read-more"><a href="<?php the_permalink(); ?>"><i class="bi bi-arrow-right"></i> Read More</a></div>
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
    </section><!-- End Features Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>