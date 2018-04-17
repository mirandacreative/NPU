<?php
/**
 * Page
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

<?php if(is_page([335,2091])): ?>

<div class="row">
<?php get_template_part('parts/ag_min_content_editor'); ?>
<div class="col-xs-6 leftcol">
    <h5 style="padding: 15px 0px;">Board of Commissioners' Meetings</h5>
 <?php get_template_part('parts/flex-boc') ?>
</div>
<div class="col-xs-6 rightcol">
    <h5 style="padding: 15px 0px;">Sewer Authority Meetings</h5>
   <?php get_template_part('parts/flex-sa') ?>  
</div>
<?php else: ?>


    <?php get_template_part('parts/flex') ?>

<?php endif ?>


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