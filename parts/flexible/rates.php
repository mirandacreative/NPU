<div class="rates">
    <div class="rates__menu" id="top_main_menu">
        <?php if ($image = get_sub_field('image')): ?>
            <div class="top_block_menu__image">
                <span <?php bg($image, 'medium_large') ?> class="rate_single_image"></span>
            </div>
        <?php endif; ?>

        <div class="top_block_menu__content">
            <?php if ($title = get_sub_field('title')): ?>
                <h3><?php echo $title ?></h3>
            <?php endif; ?>
            <?php if (have_rows('full_info')): ?>
                <?php $i = 1 ?>
                <?php while (have_rows('full_info')): the_row();
                    $title = get_sub_field('title');
                    // Use variables below ?>
                    <a href="#anchor-to-<?php echo $i ?>"><?php echo $title ?><span>&#8594;</span></a>
                    <?php $i++ ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php if (have_rows('full_info')): ?>
        <div class="rates__main">
            <?php $i = 1 ?>
            <?php while (have_rows('full_info')): the_row();
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $if_you_need_a_pdf_file = get_sub_field('if_you_need_a_pdf_file');
                $pdf_file_select = get_sub_field('pdf_file_select');
                $pdf_link_text = get_sub_field('pdf_link_text');
                $pdf_external = get_sub_field('pdf_external');
                $table_title = get_sub_field('table_title');
                $table = get_sub_field('table');
                $content_t = get_sub_field('content_2');
                $return = get_sub_field('return_to_top_menu');
                // Use variables below ?>
                <div class="single_rate">


                    <h2 id="anchor-to-<?php echo $i ?>" class="text-center single_rate__title "><?php echo $title ?></h2>
                    <?php echo $content ?>
                    <?php if ($if_you_need_a_pdf_file): ?>
                        <a href="<?php $pdf_file_select['url'] ?>" class="pdf"
                           <?php if ($pdf_external): ?>target="_blank" <?php endif; ?>><?php echo $pdf_link_text ?></a>
                    <?php endif; ?>
                    <?php if ($table_title): ?>
                        <h2 class="table_title"><?php echo $table_title ?></h2>
                    <?php endif; ?>
                    <?php
                    if ($table) {
                        echo '<table  class="table-rate">';

                        if ($table['header']) {
                            echo '<thead>';
                            echo '<tr>';
                            foreach ($table['header'] as $th) {
                                echo '<th>';
                                echo $th['c'];
                                echo '</th>';
                            }
                            echo '</tr>';
                            echo '</thead>';
                        }
                        echo '<tbody>';
                        foreach ($table['body'] as $tr) {
                            echo '<tr>';
                            foreach ($tr as $td) {
                                echo '<td>';
                                echo $td['c'];
                                echo '</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                    } ?>
                    <?php echo $content_t ?>

                    <?php if ($return): ?><a href="#top_main_menu" class="back_to_top_btn"><i class="fa fa-angle-up" aria-hidden="true"></i><?php _e('Return to Menu')?></a><?php endif; ?>
                </div>
                <?php $i++ ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>


</div>

