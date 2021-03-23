<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package learnenglish
 */

get_header();
?>
<h1>hello
</h1>
<div class="container">
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container py-3">
        <?php get_breadcrumb(); ?>
      </div>
    </section><!-- End Breadcrumbs -->

	<div class="row">
	  <div class="col-12">
	   <main id="primary" class="site-main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'learnenglish' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'learnenglish' ); ?></p>
						<?php get_search_form(); ?>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work-process-4.png" class="img-fluid" alt="">
				</div>
			</section><!-- .error-404 -->
		</main><!-- #main -->	  
	  </div>
	</div>
</div>
<?php
get_footer();
