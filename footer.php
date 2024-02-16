    <footer class="l-footer">
      <small class="c-copyright">&copy; <?php bloginfo( 'name' ); ?></small>
      <div class="p-privacy">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'footer',
           // 'container'      => 'div',
            'depth'          => 1,
          ) );
        ?>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </div>
  </body>
</html>
