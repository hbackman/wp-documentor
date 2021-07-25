<?php get_header(); ?>
  <div class="mx-auto px-6 pt-12" style="max-width: 62rem;">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): ?>
        <?php the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
      <?php endwhile; ?>
    <?php else: ?>
      <?php get_template_part('templates/content', 'none'); ?>
    <?php endif; ?>
  </div>
<?php get_footer(); ?>