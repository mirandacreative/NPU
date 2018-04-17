<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>


    <!-- BEGIN of main content -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('parts/mobile_home_top_post') ?>
        <?php get_template_part('parts/home-logos') ?>
        <?php get_template_part('parts/home-featured') ?>
        <?php get_template_part('parts/home-social') ?>

    <?php endwhile; ?>
<?php endif; ?>
    <!-- END of main content -->


<?php get_footer(); ?>