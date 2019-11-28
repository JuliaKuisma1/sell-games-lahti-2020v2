    <footer id="main-footer">
      <nav class="navbar navbar-light bg-light">
        <span class="navbar-text">
          <?php
              /**
               * Displays the main menu
               * https://developer.wordpress.org/reference/functions/wp_nav_menu/
               */
              $args = array(
                'menu' => 'some-menu',
                'menu_id' => 'some-menu',
                'container' => 'nav',
                'depth' => 1,
                'echo' => false,
                'wrap-class' => 'navbar-nav',
                'items_wrap' => '%3$s'
              );
              echo strip_tags( wp_nav_menu( $args ), '<a>' );
            ?>
        </span>
      </nav>
    </footer>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
  </body>
</html>