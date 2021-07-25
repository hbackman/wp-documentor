<?php defined('ABSPATH') || exit; ?>
<?php

add_action('after_setup_theme', function () {
  $defaults = array(
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array('site-title', 'site-description'),
    'unlink-homepage-logo' => true,
  );
  add_theme_support('custom-logo', $defaults);
});