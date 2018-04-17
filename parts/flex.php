<?php
// check if the flexible content field has rows of data
if (have_rows('main')):

    // loop through the rows of data
    while (have_rows('main')) : the_row();

        if (get_row_layout() == 'content_title'):
            get_template_part('parts/flexible/content_title');

        elseif (get_row_layout() == 'rates'):
            get_template_part('parts/flexible/rates');

        elseif (get_row_layout() == 'content_editor'):
            get_template_part('parts/flexible/content_editor');

        elseif (get_row_layout() == 'section_with_anchor'):
            get_template_part('parts/flexible/section_with_anchor');

        elseif (get_row_layout() == 'info_content_and_link'):
            get_template_part('parts/flexible/info_content_and_link');

        elseif (get_row_layout() == 'pdf_file'):
            get_template_part('parts/flexible/pdf_file');

        elseif (get_row_layout() == 'button'):
            get_template_part('parts/flexible/button');

        elseif (get_row_layout() == 'section_underline'):
            get_template_part('parts/flexible/section__underline');

        elseif (get_row_layout() == 'meeting_document'):
            get_template_part('parts/flexible/meeting-document');

        endif;

    endwhile;

else :
    // no layouts found
 ?>
     <h1><?php the_title() ?></h1>
    <?php
endif;
