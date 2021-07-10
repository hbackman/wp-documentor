<?php get_header(); ?>
  <header class="fixed bg-white h-16 px-8 flex flex-row items-center border-b border-[#ebebeb]">
    <span class="text-lg font-bold text-[#2c2c2c]">&#x3C;/&#x3E; wpDocumentor</span>
  </header>

  <aside class="fixed bg-[#f7f9fa] left-0 bottom-0 w-72 border-r border-[#ebebeb]">
    <?php wp_nav_menu(['menu_class' => 'navigation', 'theme_location' => 'navigation']); ?>
  </aside>

  <main class="pt-16 pl-72">
    <div class="mx-auto mt-16" style="max-width: 56rem;">
      <?php if (have_posts()): ?>
        <?php while (have_posts()): ?>
          <?php the_post(); ?>
          <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile; ?>
      <?php else: ?>
        <?php get_template_part('templates/content', 'none'); ?>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer(); ?>