<?php defined('ABSPATH') || exit; ?>

<div class="py-6">
  <hr/>
</div>
<?php
  wp_nav_menu(['menu_class' => 'navigation_footer', 'theme_location' => 'footer']);
?>
<div class="text-center text-sm text-gray-600 py-6">
  <div id="wpdocumentor-theme-copyright">
    <?php wpdocumentor_theme_copyright(); ?>
  </div>
</div>