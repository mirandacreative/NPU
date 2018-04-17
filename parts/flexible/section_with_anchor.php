<div class="anchor_section">


    <?php if (have_rows('content')): ?>
        <div class="row anchor_section__container">
            <?php $i = 1 ?>
            <?php while (have_rows('content')): the_row();
                $title = get_sub_field('title');
                $text = get_sub_field('menu_short_info');
                // Use variables below ?>
                <div class="col-md-6 col-sm-6 matchHeight anchor_section__container__nav">
                    <a href="#nav-anchor-to-<?php echo $i ?>" class="anchor_section__nav">
                        <?php if ($title): ?>
                            <h2 class="anchor_section__nav_title"><?php echo $title ?></h2>
                        <?php endif; ?>
                        <?php if ($text): ?>
                            <span class="anchor_section__nav_short_info">
                                 <p><?php echo $text ?></p>
                            </span>
                        <?php endif; ?>
                    </a>
                </div>
                <?php $i++ ?>
            <?php endwhile; ?>

        </div>
    <?php endif; ?>
    <?php if (have_rows('content')): ?>
        <div class="anchor_section__main">
            <div class="col-sm-12">
                <?php $i = 1 ?>
                <?php while (have_rows('content')): the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('main_content');
                    $if_you_need_a_pdf_file = get_sub_field('if_need_pdf');
                    $pdf_file_select = get_sub_field('select_pdf_file');
                    $pdf_link_text = get_sub_field('your_pdf_name');
                    $pdf_external = get_sub_field('pdf_external');
                    $main_image = get_sub_field('main_image');
                    // Use variables below ?>
                    <div class="single_anchor">

                        <h2 id="nav-anchor-to-<?php echo $i ?>"
                            class="text-center single_anchor__title "><?php echo $title ?></h2>
                        <?php if ($main_image): ?>
                            <span class="image__section" <?php bg($main_image, 'large') ?>
                                  alt="<?php echo $main_image['alt'] ?>"></span>
                        <?php endif; ?>
                        <?php echo $content ?>
                        <?php if ($if_you_need_a_pdf_file): ?>
                            <a href="<?php echo $pdf_file_select['url']; ?>" class="pdf"
                               <?php if ($pdf_external): ?>target="_blank" <?php endif; ?>><?php echo $pdf_link_text ?></a>
                        <?php endif; ?>

                    </div>
                    <?php $i++ ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>


</div>