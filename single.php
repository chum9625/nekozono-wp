<?php
/**
 * Nekozono WordPress Theme
 * @author: ChumTech
 * @link: https://demo.chum9625.com/nekozono/news/
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

  <div class="flex justify-between items-end mt-auto mb-4">
    <div class="flex items-center gap-2">
      <div>
        <span class="block text-gray-700 text-sm">
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
        </span>
      </div>
    </div>
    <span class="text-gray-600 text-sm border rounded px-2 py-1"><?php the_category(); ?></span>
  </div>
  <!-- <h2 class="text-gray-800 text-xl sm:text-2xl font-semibold mb-2 md:mb-4"><?php the_title(); ?></h2> -->

  <div class="bg-gray-100 overflow-hidden rounded-lg shadow-lg relative mb-6 md:mb-8">
    <img src="https://source.unsplash.com/random/" loading="lazy" alt="" class="w-full h-full object-cover object-center" />
  </div>


  <p class="text-gray-500 sm:text-lg"><?php the_content(); ?></p>
</div>

<section class="w-fit mt-10">
  <div class="btn-group grid grid-cols-2">
    <button class="btn btn-outline"><?php previous_post_link('%link') ?></button>
    <button class="btn btn-outline"><?php next_post_link('%link') ?></button>
  </div>
</section>

</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
