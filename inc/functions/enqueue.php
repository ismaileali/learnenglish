<?php
/**
 * Proper way to enqueue scripts and styles.
 */
function learnenglish_scripts() {
    wp_enqueue_style( 'aos-style', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
   
    wp_enqueue_style( 'google-fonts', learnenglish_fonts_url(), array(), '1.0.0');
  
    wp_enqueue_style( 'bootstrap-icon', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'boxicons-style', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'glightbox-style', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'swiper-bundle-style', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );


    wp_enqueue_script( 'script-aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-noframework', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'learnenglish_scripts' );


/**
 * Add Google fonts
 */
// <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

function learnenglish_fonts_url() {
    $fonts_url = '';

    $opensans = _x( 'on', 'Open Sans font: on or off', 'learnenglish' );
    $raleway = _x( 'on', 'Raleway font: on or off', 'learnenglish' );
    $poppins = _x( 'on', 'Poppins font: on or off', 'learnenglish' );
     

    if ( 'off' !== $opensans || 'off' !== $raleway  || 'off' !== $poppins ) {
        $font_families = array();
         
        if ( 'off' !== $opensans ) {
        $font_families[] = 'Open+Sans:300,300i,400,400i,600,600i,700,700i';
        }
         
        if ( 'off' !== $raleway ) {
        $font_families[] = 'Raleway:300,300i,400,400i,500,500i,600,600i,700,700i';
        }

        if ( 'off' !== $poppins ) {
            $font_families[] = 'Poppins:300,300i,400,400i,500,500i,600,600i,700,700i';
            }

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'devanagari,latin-ext,latin,cyrillic-ext,cyrillic,greek-ext,greek,vietnamese' ),
            );
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }
        

    return $fonts_url;
    }

    // Adding Google fonts to the editor
    function learnenglish_editor_styles() {
        $opensans = ( array( 'editor-style.css', '//fonts.googleapis.com/css?Open+Sans:300,300i,400,400i,600,600i,700,700i' ) );
        $raleway = ( array( 'editor-style.css', '//fonts.googleapis.com/css?Raleway:300,300i,400,400i,500,500i,600,600i,700,700i' ) );
        $poppins = ( array( 'editor-style.css', '//fonts.googleapis.com/css?Poppins:300,300i,400,400i,500,500i,600,600i,700,700i' ) );
     
        add_editor_style( $opensans, $raleway, $poppins );
    }
        add_action( 'after_setup_theme', 'learnenglish_editor_styles' );

    // Adding fonts to the Custom Header screen
    function learnenglish_custom_header_fonts() {
        wp_enqueue_style( 'OpenSans-font', '//fonts.googleapis.com/css?Open+Sans:300,300i,400,400i,600,600i,700,700i', array(), null );
        wp_enqueue_style( 'Raleway-font', '//fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i', array(), null );
        wp_enqueue_style( 'Poppins-font', '//fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i', array(), null );
        }
        add_action( 'admin_print_styles-appearance_page_custom-header', 'learnenglish_custom_header_fonts' );

?>
