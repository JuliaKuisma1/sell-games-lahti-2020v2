    <footer id="main-footer" style="background-color: yellow">
    <div class="footer-container">
      <div class="row">
        <div class="col-sm-6 col-md-5 col-xs-12">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/SELLGAMES_logo.png" height="90px" alt="Sell Games Lahti 2020">
          </a>
        </div>
        <div class="col-sm-6 col-md-5 col-xs-12">
          <ul>
            <?php
                  /**
                   * Displays the main menu
                   * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                   */
                  $args = array(
                    'menu' => 'main-menu',
                    'menu_id' => 'main-menu',
                    'container' => 'nav',
                    'depth' => 1,
                    'echo' => false,
                    'wrap-class' => 'footer-navigation',
                    'items_wrap' => '%3$s'
                  );
                  echo strip_tags( wp_nav_menu( $args ), '<a><li>' );
              ?>
          </ul>
        </div>
        <div class="col-6 col-md-2 col-xs-12">
          <div class="sosial-container">
            <a href="https://www.facebook.com/SELLgames2020/"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="https://www.instagram.com/sellgames2020/"><i class="fab fa-instagram fa-2x"></i><a>
          </div>
        </div>
      </div>
    </div>
      
    </footer>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
  </body>
</html>