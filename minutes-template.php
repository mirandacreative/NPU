<?php
/**
 * Template Name: Minutes Page
 */
get_header(); ?>
    <div class="breadcrumb">
        <div class="container">
            <?php bcn_display($return = false, $linked = true, $reverse = false, $force = false) ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- BEGIN of page content -->
            <div class="col-sm-8 col-padding">
                <main class="main-content">

<?php if(is_page([335,2091,2579])): ?>

<div class="row">

    <div class="spillwrapper" style="display: block; height: 555px; overflow: hidden;">
        <?php get_template_part('parts/ag_min_content_editor'); ?>
        <div class="col-sm-6 leftcol">
            <h5 style="padding: 15px 0px;">Board of Commissioners' Meetings</h5>
         <?php get_template_part('parts/flex-boc') ?>
        </div>
        <div class="col-sm-6 rightcol">
            <h5 style="padding: 15px 0px;">Sewer Authority Meetings</h5>
           <?php get_template_part('parts/flex-sa') ?>  
        </div>
    </div>
    <!-- end spillwrapper div -->
<?php else: ?>


    <?php get_template_part('parts/flex') ?>
    

<?php endif ?>
    <div class="row">
        <div class="morepanel" style="display: block; margin: 0 auto; width: 100%; padding-bottom: 20px; padding-top: 65px;">
            <button style="display: block; margin: 0 auto;" class="btn-primary" id="show_hide_minutes">View Archive</button>
        </div>
    </div>

                </main>
            </div>
            <!-- END of page content -->
            <!-- BEGIN of sidebar -->
            <div class="col-sm-4 sidebar">
                <?php get_sidebar('right'); ?>
            </div>
            <!-- END of sidebar -->
        </div>
    </div>


<?php get_footer(); ?>