<?php get_header(); ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
 
      <div class="container py-3">
         <?php get_breadcrumb(); ?>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
          <?php if(have_posts()):
                   while (have_posts()) :
                        the_post();   ?>
            <article class="entry entry-single">

              <div class="entry-img">
                <?php the_post_thumbnail('',['class'=>'img-fluid']); ?>
              </div>

              <h2 class="entry-title"><?php esc_html(the_title()); ?></h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i><a href="blog-single.html"><?php echo get_the_author_posts_link(); ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i><?php echo get_the_date('M j, Y'); ?></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i><?php echo get_comments_number(); ?></li>
                </ul>
              </div>

              <div class="entry-content">
                  <?php echo get_the_content(); ?>
              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="<?php the_permalink(); ?>"><?php the_category(); ?></a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <?php the_tags(); ?>
              </div>

            </article><!-- End blog entry -->
            <?php
            // https://www.wpbeginner.com/wp-tutorials/how-to-add-an-author-info-box-in-wordpress-posts/    OR
            // https://developer.wordpress.org/reference/functions/get_the_author_meta/
                global $post;
                $author_id = $post->post_author;
                $author_id = get_the_author_meta( 'ID' );
          ?>
            <div class="blog-author d-flex align-items-center">
              <img src="<?php echo get_avatar_url($author_id); ?>" class="rounded-circle float-left" alt="">
              <div>
                <h4><?php
                   
                   // Get author's display name 
                  echo $display_name = get_the_author_meta( 'display_name', $post->post_author );
                     
                   // If display name is not available then use nickname as display name
                   if ( empty( $display_name ) ) {
                   echo $display_name = get_the_author_meta( 'nickname', $post->post_author );
                     
                   }
               ?></h4>
                <div class="social-links">
                  <a href="<?php echo get_the_author_meta( 'twitter', $author_id ); ?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo get_the_author_meta( 'facebook', $author_id ); ?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo get_the_author_meta( 'instagram', $author_id ); ?>"><i class="biu bi-instagram"></i></a>
                </div>
                <?php 
                          echo wp_trim_words($user_description = get_the_author_meta( 'user_description', $post->post_author ), 30);
                      ?>
              </div>
            </div><!-- End blog author bio -->
            <?php endwhile;
                  else : 
                get_template_part('template-parts/content', 'none');
                endif; 
                wp_reset_postdata();
          ?>

            <div class="blog-comments">
                 <?php 	// If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                      comments_template();
                    } ?>
            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">
             <?php get_sidebar(); ?>
          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>