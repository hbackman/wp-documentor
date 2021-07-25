<!DOCTYPE html>
<html>
  <head>
    <title><?php echo get_bloginfo('name'); ?></title>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/build/app.css'; ?>">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class('bg-white'); ?>>
    <div id="wpdocumentor-navigation-overlay"></div>
    <nav id="wpdocumentor-navigation" class="fixed bg-[#f6f8fa] left-0 bottom-0 w-72 border-r border-[#ebebeb]">
      <div class="p-6">
        <?php if (function_exists('the_custom_logo')): ?>
          <?php the_custom_logo(); ?>
        <?php endif; ?>
      </div>
      <div>
        <?php wp_nav_menu(['menu_class' => 'navigation', 'theme_location' => 'navigation']); ?>
      </div>
    </nav>
    <main>
      <?php get_template_part('templates/header'); ?>
      <article>