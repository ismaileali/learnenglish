<?php
     if ( ! function_exists( 'learnenglish_setup' ) ) :
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which runs
         * before the init hook. The init hook is too late for some features, such as indicating
         * support post thumbnails.
         */
        function learnenglish_setup() {
         
            /**
             * Make theme available for translation.
             * Translations can be placed in the /languages/ directory.
             */
            load_theme_textdomain( 'learnenglish', get_template_directory() . '/languages' );
         
            /**
             * Add default posts and comments RSS feed links to <head>.
             */
            add_theme_support( 'automatic-feed-links' );
         
            /**
             * Enable support for post thumbnails and featured images.
             */
            add_theme_support( 'post-thumbnails' );
            /**
             * Add support for two custom navigation menus.
             */
            register_nav_menus( array(
                'min_menu'   => __( 'Min Menu', 'learnenglish' ),
                'footer_menu' => __('Footer Menu', 'learnenglish' )
            ) );
         
            /**
             * Enable support for the following post formats:
             * aside, gallery, quote, image, and video
             */
            add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

          // Threaded comment reply styles.
            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                wp_enqueue_script( 'comment-reply' );
            }
        }
        endif; // learnenglish_setup
        add_action( 'after_setup_theme', 'learnenglish_setup' );







        // Custom Excerpt defind function coll & red more btn
       function my_excerpt_length($limit) {
       return wp_trim_words(get_the_excerpt(), $limit, '<a href="'. esc_url( get_permalink() ) . '">' . __( ' Read more', 'ismaile' ) . '</a>');
}
/**
 * Generate breadcrumbs
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'First Widget', 'textdomain' ),
        'id'            => 'first-widget',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'OUR NEWSLETTER', 'textdomain' ),
        'id'            => 'newsletter',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<p id="%1$s" class="widget %2$s">',
        'after_widget'  => '</p>',
        // 'before_title'  => '<h4 class="widgettitle">',
        // 'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );
?>