            <div class="sidebar">
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form role="search" method="get" class="search-box" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <input type="search" placeholder="Search for blog posts" name="s" value="<?php echo get_search_query(); ?>" required="required" autofocus="" title="<?php echo esc_attr_x( 'Search for blog posts', '', 'learnenglish'); ?>" >
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                <?php $categories = get_categories(array(
                                  'number'          => 5,
                                  'orderby'         => 'name',
                                  'order'           => 'ASC'
                                  ));
                  foreach($categories as $category){
                      echo ' <li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><span>('. $category->count .')</span></li>';
                      } ?>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
              <?php
                $args = array(
                            'posts_per_page'   => 5,
                            'post_type'	     => 'blogs',
                            'post_status'	     => 'publish',
                            'paged' 		     => get_query_var( 'paged')
                  );
                  $query = new WP_Query( $args );
                              if ( $query->have_posts() ) :
                                  while ( $query->have_posts() ) :
                                  $query->the_post();
              ?>
                <div class="post-item clearfix">
                  <?php the_post_thumbnail('',['class'=>'sidebar-img img-fluid']); ?>
                  <h4><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 6,'...'); ?></a></h4>
                   <time datetime=""><?php echo get_the_date('M j, Y'); ?></time>
                </div>
                <?php endwhile;
                  else : 
                    get_template_part('template-parts/content', 'none');
                  endif; 
                    wp_reset_postdata();
                ?>
              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                <?php $tags  = get_tags(array(
                              'orderby' => 'name',
                              'order'   => 'ASC'
                        ));
                foreach($tags as $tag ){
                    echo '<li><a href="' . get_category_link($tag ->term_id) . '">' . $tag ->name . '</a></li>';
                    } ?>
                </ul>
              </div><!-- End sidebar tags-->
            </div><!-- End sidebar -->
