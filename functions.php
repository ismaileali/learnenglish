<?php 
   // Add Enqueue script
   require_once get_template_directory() . '/inc/functions/enqueue.php';
   // Add Enqueue script
   require_once get_template_directory() . '/inc/functions/supports-learnenglish.php';
   // Create Custom Blog post type 
   require_once get_template_directory() . '/inc/post-type/blog-page.php';
   // Create Custom about post type 
   require_once get_template_directory() . '/inc/post-type/about-us1.php';
   // Create Custom user-custom-field post type 
   require_once get_template_directory() . '/inc/user-admin-custom-filds/user-custom-field.php';
   // Create Custom Blog post type 
   require_once get_template_directory() . '/inc/post-type/work-process.php';
   // Create Custom Blog post type 
   require_once get_template_directory() . '/inc/post-type/our-skills.php';
   // Create Custom Blog post type 
   require_once get_template_directory() . '/inc/post-type/our-clients.php';
   // Create Custom Blog post type 
   require_once get_template_directory() . '/inc/post-type/our-team.php';
   // Create Custom Blog post type 
   require_once get_template_directory() . '/inc/post-type/portfolio.php';
   // Create Custom Blog post type 
   require_once get_template_directory() . '/inc/post-type/faq.php';
   // Create Custom Blog post type 
   require_once get_template_directory() . '/inc/post-type/pricing.php';
   // Add Redux Framework
   require_once get_template_directory().'/redux-fwk/ReduxCore/framework.php';
   require_once get_template_directory().'/redux-fwk/sample/config.php';
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
?>