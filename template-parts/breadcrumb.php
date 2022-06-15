<?php
/**
 * Nekozono WordPress Theme
 * @author: ChumTech
 * @link: https://demo.chum9625.com/nekozono/
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<div class="text-sm breadcrumbs">
    <?php
    if ( function_exists( 'bcn_display' )) {
      bcn_display();
    }
    ?>
</div>
