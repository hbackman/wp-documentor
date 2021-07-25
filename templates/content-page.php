<?php defined('ABSPATH') || exit; ?>
<div>
    <h1><?php the_title(); ?></h1>
</div>
<div class="wysiwyg-content">
  <?php the_content(); ?>
</div>
<div class="mt-12">
    <?php get_template_part('templates/footer'); ?>
</div>