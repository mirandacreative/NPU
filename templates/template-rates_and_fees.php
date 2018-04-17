<?php
/**
 * Template Name: Rates And Fees Page
 */
get_header(); ?>


    <!-- BEGIN of main content -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="breadcrumb">
            <div class="container ">
                <?php bcn_display($return = false, $linked = true, $reverse = false, $force = false) ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <main class="main-content">
                        <div class="rate_list_main">
                            <?php get_template_part('parts/flex') ?>
                            <?php get_template_part('parts/rates-page') ?>
                        </div>
                       <div class="rate_list_single">
                           <span class="show-rate-list"><i class="fa fa-chevron-left" aria-hidden="true"></i><?php if ($back= get_field('back_list_text','options')): echo $back; else: _e('Back'); endif;?></span>
                           <?php get_template_part('parts/rates-page-single') ?>
                       </div>
                    </main>
                </div>
                <!-- END of page content -->
                <!-- BEGIN of sidebar -->
                <div class="col-md-4 sidebar">
                    <?php get_sidebar('right'); ?>
                </div>
            </div>

        </div>

    <?php endwhile; ?>
<?php endif; ?>
    <!-- END of main content -->


<?php get_footer(); ?>