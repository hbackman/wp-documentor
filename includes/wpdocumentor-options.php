<?php defined('ABSPATH') or die(); ?>
<?php

add_action('customize_register', function ($wp_customize) {

  /**
   * @var WP_Customize_Manager $wp_customize
   */

  $wp_customize->add_section('wpdocumentor_theme_options', array(
    'title' => __('Theme Options', 'wp-documentor'),
  ));

  /*
   * =============================================
   *   Footer Section
   * =============================================
   */

  $wp_customize->add_setting('wpdocumentor_theme_copyright', ['transport' => 'postMessage', 'default' => '&copy; wpDocumentor']);

  $wp_customize->add_control(
    new WP_Customize_Control($wp_customize, 'copyright', [
      'label'     => __('Copyright', 'wp-documentor'),
      'section'   => 'wpdocumentor_theme_options',
      'settings'  => 'wpdocumentor_theme_copyright',
    ])
  );

  $wp_customize->selective_refresh->add_partial('wpdocumentor_theme_copyright', [
    'selector'          => '#wpdocumentor-theme-copyright',
    'render_callback'   => 'wpdocumentor_theme_copyright',
  ]);
});