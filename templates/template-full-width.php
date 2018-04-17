<?php
/**
 * Template Name: Full Width
 */
get_header(); ?>
    <div class="breadcrumb">
        <div class="container ">
            <?php bcn_display($return = false, $linked = true, $reverse = false, $force = false) ?>
        </div>
    </div>

    <div class="container">
        <?php get_template_part('parts/flex') ?>
    </div>


<?php get_footer(); ?>