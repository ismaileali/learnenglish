<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                    <?php esc_html( the_post_thumbnail('',['class'=>'img-fluid'])); ?>
                <div class="social">
                  <a href="<?php echo get_post_meta($post->ID, 'time_twitter_url', true); ?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo get_post_meta($post->ID, 'time_fb_url', true); ?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo get_post_meta($post->ID, 'time_instagram_url', true); ?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo get_post_meta($post->ID, 'time_linkedin_url', true); ?>"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php esc_html( the_title()); ?></h4>
                <span><?php echo get_post_meta($post->ID, 'second_name', true); ?></span>
                 <?php the_content(); ?>
              </div>
            </div>
          </div>