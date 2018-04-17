<?php
/**
 * Single
 *
 * Loop container for single post content
 */
get_header(); ?>
    <div class="breadcrumb">
        <div class="container">
            <?php bcn_display($return = false, $linked = true, $reverse = false, $force = false) ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- BEGIN of post content -->
            <div class="col-md-8 col-sm-12 col-padding">
                <main class="main-content">

                    <?php if (have_rows('main')): ?>
                        <?php get_template_part('parts/flex') ?>
                    <?php else: ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <h1><?php the_title() ?></h1>
                                <?php the_content() ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </main>
            </div>
            <!-- END of post content -->

            <!-- BEGIN of sidebar -->
            <div class="col-md-4 col-sm-12 sidebar">
                <?php if (get_field('show_single_post_sidebar_menu', 'options')): ?>
                    <?php if (has_nav_menu('archive-menu', 'options')) {
                        wp_nav_menu(array('theme_location' => 'archive-menu', 'menu_class' => 'sidebar_menu', 'depth' => 2));
                    };
                endif; ?>
                <?php  get_sidebar('right'); ?>
            </div>
            <!-- END of sidebar -->
        </div>
    </div>

<?php get_footer(); ?>