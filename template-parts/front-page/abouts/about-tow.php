<div class="col-lg-6 video-box align-self-baseline position-relative">
  <?php the_post_thumbnail('',['class'=>'img-fluid']); ?>
  <a href="<?php echo get_post_meta($post->ID, 'video_link', true); ?>" class="glightbox play-btn mb-4"></a>
</div>

<div class="col-lg-6 pt-3 pt-lg-0 content">
  <h3><?php esc_html(the_title()); ?></h3>
    
  <?php echo get_the_content(); ?>
</div>