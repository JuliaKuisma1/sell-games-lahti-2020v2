    <footer id="main-footer" style="background-color: yellow">
    <div class="footer-container">
      <div class="row">
        <!-- SELL Logo and LAB logo -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="d-flex justify-content-center centered">
            <a href="<?php echo home_url(); ?>">
              <img class="sell-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/SELLGAMES_logo_footer.svg" height="85px" alt="Sell Games Lahti 2020">
            </a>
          </div>
          <div class="d-flex justify-content-center centered">
            <a href="https://www.lab.fi/en">
                <img class="lab-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/LAB_logo_c.png" alt="LAB logo" height="50px">
            </a>
          </div>
        </div>

        <!-- Contact info and social media -->
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="d-flex justify-content-center centered">
            <ul>
              <li>SELL Student Games 2020</li>
              <li>LAB University of Applied Sciences</li>
              <li>Mukkulankatu 19, 15210 Lahti</li>
              <li><a href="mailto:sellgames2020@lamk.fi">sellgames2020@lamk.fi</a></li>
            </ul>
          </div> 
          <div class="sosial-container d-flex justify-content-center centered">
            <a href="https://www.facebook.com/SELLgames2020/" target="blank"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="https://www.instagram.com/sellgames2020/" target="blank"><i class="fab fa-instagram fa-2x"></i><a>
            <a href="https://www.youtube.com/channel/UCqCLjasCVcWhM1v8lcD84mQ"><i class="fab fa-youtube fa-2x"></i></a>
          </div>
        </div>

        <!-- Partners -->
        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
          <div class="d-flex justify-content-center centered">
            <a href="https://oll.fi/en/home/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/OLL_logo_c.png" alt="OLL logo" height="90px">
            </a>
          </div>
        </div>

        <!-- Map container -->
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <?php echo do_shortcode('[wpgmza id="1"]'); ?>
        </div>

      </div>
    </div> <!-- End of row -->
      
    </footer>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
  </body>
</html>