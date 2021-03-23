<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
 <div class="icon-box">
    <div class="icon"><?php echo do_shortcode( get_post_meta($post->ID, 'services_icon', true));  ?></div>
    <h4 class="title"><a href="<?php the_permalink(); ?>"><?php esc_html(the_title()); ?></a></h4>
    <p class="description"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
 </div>
</div>