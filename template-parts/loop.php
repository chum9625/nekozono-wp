<?php
/**
 * Nekozono WordPress Theme
 * @author: ChumTech
 * @link: https://demo.chum9625.com/nekozono/news/
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<!-- article - start -->
      <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
        <a href="<?php the_permalink(); ?>" class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
          <?php if ( has_post_thumbnail() ) : ?>
            <div loading="lazy" alt="" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200">
              <?php the_post_thumbnail('medium'); ?>
            </div>
            <?php else: ?>
              <img src="https://source.unsplash.com/random/" loading="lazy" alt="" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
        <?php endif; ?>
        </a>

        <div class="flex flex-col flex-1 p-4 sm:p-6">
          <h2 class="text-gray-800 text-lg font-semibold mb-2">
            <a href="<?php the_permalink(); ?>" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">
            <?php the_title(); ?></a>
          </h2>

          <p class="text-gray-500 mb-8"><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>

          <div class="flex justify-between items-end mt-auto">
            <div class="flex items-center gap-2">
              <div>
                <span class="block text-gray-400 text-sm">
                  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                </span>
              </div>
            </div>
            <span class="text-gray-500 text-sm border rounded px-2 py-1"><?php the_category(); ?></span>
          </div>
        </div>
      </div>
      <!-- article - end -->
