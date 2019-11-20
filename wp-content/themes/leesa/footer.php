<?php
/**
 * Footer template partial
 *
 * @package Leesa
 *
 */
?>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div>
        <div class="logo"><a href="/"><img src="/wp-content/themes/leesa/images/zappital-white-logo.png"></a></div>
        <div class="socialMedia"><?php get_template_part('social-media-menu') ?></div>
      </div>
      <div class="qLinks">
        <h3>Quick Links</h3>
        <ul class="">
          <?php wp_nav_menu(array(
            'menu' => 'Footer Menu',
            'items_wrap'=>'%3$s',
            'container' => false,
            'list_item_class' => "nav-item",
            'link_class' => "nav-link",
          )); ?>
        </ul>
      </div>
      <div>
        <!-- <h3>Recent Posts</h3> -->

      </div>
      <div class="copyright">© <?php echo date("Y"); ?> <span class="greenText">Zappital Studio</span> All Rights Reserved</div>
    </div><!-- /.container -->
  </footer><!-- /footer -->

<?php wp_footer(); ?>

</body>
</html>