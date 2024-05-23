</main>
<?php get_sidebar(); ?>
</div>
<!--Footer-->
<footer class="footer" role="contentinfo">
    <div class="footer_container container grid">
      <div class="footer_content grid">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer_logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-alt-group.png"/>
        </a>

        <div class="footer_social">
            <a href="#" target="_blank" class="footer_social-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-linkedin.png"/>
            </a>
            <a href="#" target="_blank" class="footer_social-link">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-facebook.png"/>
            </a>            
            <a href="#" target="_blank" class="footer_social-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-twitter.png"/>
            </a>
            <a href="#" target="_blank" class="footer_social-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-youtube.png"/>
            </a>
          </div>
  
        <ul class="footer_links">
          <li>
            <a href="#" class="footer_link">Blogs</a>
          </li>
  
          <li>
            <a href="#" class="footer_link">Careers</a>
          </li>
  
          <li>
            <a href="#" class="footer_link">Company</a>
          </li>

          <li>
            <a href="#" class="footer_link">Investors</a>
          </li>
  
          <li>
            <a href="#" class="footer_link">Newsletters</a>
          </li>
        </ul>

      </div>
    </div>
    <!--Preloader & scroll-to-top-->
    <div class="preloader">
      <div class="spinner">
          <span class="sk-inner-circle"></span>
      </div>
    </div>
    <div class="scroll-top not-visible">
          <i class="bi bi-arrow-up"></i>
    </div>
  </footer>
  <!--End Footer-->
</div>
<?php wp_footer(); ?>
</body>
</html>