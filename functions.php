<?php
if (! defined('ABSPATH')) {
  exit;
}

define('WP_DOCUMENTOR_THEME_NAME', 'wpDocumentor');
define('WP_DOCUMENTOR_THEME_FILE', __FILE__);
define('WP_DOCUMENTOR_THEME_VERSION', '1.0');

require_once __DIR__ . '/includes/wpdocumentor-functions.php';
require_once __DIR__ . '/includes/wpdocumentor-menus.php';
require_once __DIR__ . '/includes/wpdocumentor-custom-logo.php';
require_once __DIR__ . '/includes/wpdocumentor-options.php';

// If we're running wordpress in a development environment,
// then enable all php error reporting.
if (($_ENV['WORDPRESS_ENVIRONMENT'] ?? null) == 'development') {
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
}

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script('app', wpdocs_theme_path('build/app.js'));
});

add_action('enqueue_block_editor_assets', function () {
  wp_enqueue_script('wp-documentor_block_banner', wpdocs_theme_path('build/blocks-banner.js'), array('wp-blocks', 'wp-element', 'wp-editor'));
  wp_enqueue_style ('wp-documentor_block_banner', wpdocs_theme_path('build/blocks-banner.css'), array());

  register_block_type('wp-documentor/banner', array(
    'editor_script' => 'wp-documentor_block_banner',
    'style'         => 'wp-documentor_block_banner',
  ));
});

add_filter('the_content', function ($content) {
  $ex = '/(<h[1-6].*?>)(.*?)(<\/h[1-6]>)/i';

  $fn = function ($m) {
    $text = $m[2];
    $slug = sanitize_title($m[2]);

    $el  = $m[1];
    $el .= $text;
    $el .= '<a class="anchor" id="'.$slug.'"></a>';
    $el .= '<a class="anchor__icon" href="#'.$slug.'">';
    $el .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
             <path
              fill-rule="evenodd"
              d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 
                00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 
                1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 
                4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 
                1.5a2 2 0 11-2.828-2.828l3-3z"
              clip-rule="evenodd"
             />
            </svg>';
    $el .= '</a>';
    $el .= $m[3];

    return $el;
  };
  return preg_replace_callback($ex, $fn, $content);
});