<article class="entry">
  <div class="entry-img">
    <?php esc_url( the_post_thumbnail('',['class'=>'img-fluid'])); ?>
  </div>
  <h2 class="entry-title">
    <a href="<?php  the_permalink(); ?>"><?php esc_html(the_title()); ?></a>
  </h2>
  <div class="entry-meta">
    <ul>
      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <?php echo get_the_author_posts_link(); ?></li>
      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php  the_permalink(); ?>"><?php echo get_the_date( 'M j, Y' ); ?></a></li>
      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="<?php  the_permalink(); ?>"><?php echo get_comments_number(); ?> Comments</a></li>
    </ul>
  </div>
  <div class="entry-content">
  <?php //echo wp_trim_words( get_the_content(), 30); ?>
  <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
    <div class="read-more">
      <a href="<?php  the_permalink(); ?>">Read More</a>
    </div>
  </div>
</article><!-- End blog entry -->