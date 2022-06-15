<?php
/**
 * Nekozono WordPress Theme
 * @author: ChumTech
 * @link: https://demo.chum9625.com/nekozono/
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php get_header(); ?>

<h1 class="text-gray-800 text-2xl sm:text-3xl font-bold text-center mb-4 md:mb-6"><?php the_title(); ?></h1>

<section>
  <?php get_template_part('template-parts/breadcrumb'); ?>
</section>

<?php if( have_posts() ): ?>
<?php while( have_posts() ) : the_post(); ?>
<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-md px-4 md:px-8 mx-auto">

  <p class="text-gray-500 sm:text-lg"><?php the_content(); ?></p>

  </div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
