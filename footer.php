<?php global $reduxFwk; ?>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
             <?php if ( is_active_sidebar( 'first-widget' ) ) { ?>
                <ul id="sidebar">
                   <?php dynamic_sidebar('first-widget'); ?>
                </ul>
            <?php } ?>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Usefully Links</h4>
            <?php
              wp_nav_menu( array(
                'theme_location'  => 'footer_menu',
                'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                // 'container'       => 'nav',
                // 'container_class' => 'navbar',
                // 'menu_class'      => 'navbar-nav ',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4 class="mb-2">Contact Us</h4>
             <p class="pt-2">
             <?php echo $reduxFwk['address']; ?> <br>
              <strong>Phone:</strong><?php echo $reduxFwk['phone_number']; ?><br>
              <strong>Email:</strong><?php echo $reduxFwk['email']; ?><br>
              </p>
            <div class="social-links">
	            <?php if(!empty($reduxFwk['footer-socail-links']['Twitter'])) : ?>
              <a href="<?php echo $reduxFwk['footer-socail-links']['Twitter']; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
              <?php endif; ?>
	            <?php if(!empty($reduxFwk['footer-socail-links']['Facebook'])) : ?>
              <a href="<?php echo $reduxFwk['footer-socail-links']['Facebook']; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
              <?php endif; ?>
            	<?php if(!empty( $reduxFwk['footer-socail-links']['Instagram'])) : ?>
              <a href="<?php echo $reduxFwk['footer-socail-links']['Instagram']; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
              <?php endif; ?>
	            <?php if(!empty($reduxFwk['footer-socail-links']['Linkedin'])) : ?>
              <a href="<?php echo $reduxFwk['footer-socail-links']['Linkedin']; ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <?php endif; ?>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <?php if ( is_active_sidebar( 'newsletter' ) ) { ?>
                    <?php dynamic_sidebar('newsletter'); ?>
              <?php } ?>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Serenity</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php wp_footer(); ?>
</body>

</html>