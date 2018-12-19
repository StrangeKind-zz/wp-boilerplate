  <footer class="footer" role="contentinfo">
    <div class="footer--contact">
      <div class="grid">
        <div class="col-md-4">
          <h4>Diensten</h4>
          <?php wp_nav_menu( array( 'footer-options' => 'Footer Options' ) ); ?>
        </div>

        <div class="col-md-4">
          <h4>Let's have tea</h4>
          <ul>
            <li><a href="mailto:welkom@marjolijnvlug.nl">welkom@marjolijnvlug.nl</a></li>
            <li><a href="tel:+31640393413">+31 (0)6-40393413</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h4>Partners</h4>
          <ul>
            <li><a class="no-after" target="_Blank" href="https://hr-communicatie.nl/"><img src="http://www.marjolijnvlug.nl/wp-content/themes/toko-blank/src/img/assets/hr-communicatie--logo.png"></a></li>
            <li><a class="no-after" target="_Blank" href="#"><img src="http://www.marjolijnvlug.nl/wp-content/themes/toko-blank/src/img/assets/architechts--logo.png"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer--copyright">
      <div class="footer--copyright__details">
        <div class="grid-l">
          <?php echo sprintf( __( '%1$s <strong>%2$s</strong> %3$s', 'blankslate' ), '&copy;', esc_html( get_bloginfo( 'name' ) ), date( 'Y' ) ); ?>
        </div>
      </div>
      <div class="footer--copyright__social">
        <div class="grid-r">
          <ul>
            <li><a target="_Blank" href="https://twitter.com/marjolijnvlug"><img src="http://www.marjolijnvlug.nl/wp-content/themes/toko-blank/src/img/assets/social--twitter.svg"></a></li>
            <li><a target="_Blank" href="https://www.linkedin.com/in/marjolijnvlug/?originalSubdomain=nl"><img src="http://www.marjolijnvlug.nl/wp-content/themes/toko-blank/src/img/assets/social--linkedin.svg"></a></li>
            <li><a href="#" class="fb-link"><img src="http://www.marjolijnvlug.nl/wp-content/themes/toko-blank/src/img/assets/social--facebook.svg"></a></li>
            <li><a target="_Blank" href="#"><img src="http://www.marjolijnvlug.nl/wp-content/themes/toko-blank/src/img/assets/social--insta.svg"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer--links__fb">
      <div class="grid">
        <ul>
          <li><a href="#">HR-Coaching</a></li>
          <li><a href="#">Sollicitatie coaching</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!--build:js src/js/main.min.js -->
    <script src="http://www.marjolijnvlug.nl/wp-content/themes/toko-blank/src/js/jquery.js"></script>
    <script src="http://www.marjolijnvlug.nl/wp-content/themes/toko-blank/src/js/main.js"></script>
    <script src="http://www.marjolijnvlug.nl/wp-content/themes/toko-blank/src/js/bootstrap.min.js"></script>
    <!-- endbuild -->
  <?php wp_footer(); ?>

</body>
</html>
