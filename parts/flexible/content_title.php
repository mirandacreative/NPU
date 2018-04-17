<div class="flex_content_title">
    <div class="row">
        <div class="col-md-12">
            <div class="flex_content_title_container">
                <?php if ($title = get_sub_field('title')): ?>
                    <h1><?php echo $title ?></h1>
                <?php endif; ?>
                <?php the_sub_field('content') ?>
                <?php if ($pdf_file = get_sub_field('pdf_file')): ?>

                    <a href="<?php echo $pdf_file; ?>" class="pdf"><?php the_sub_field('pdf_link_text') ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>