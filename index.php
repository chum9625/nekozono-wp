<?php get_header(); ?>

<h1 class="text-gray-800 text-2xl sm:text-3xl font-bold text-center mb-4 md:mb-6">新着情報</h1>

<section>
  <?php get_template_part('template-parts/breadcrumb'); ?>
</section>

<!-- news section start -->
<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-8">
      <?php if( have_posts() ): ?>
        <?php while( have_posts() ) : the_post(); ?>

        <?php get_template_part('template-parts/loop', 'news'); ?>

        <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
