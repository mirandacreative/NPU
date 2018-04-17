<?php
// check if the flexible content field has rows of data
if (have_rows('main')):

    // loop through the rows of data
    while (have_rows('main')) : the_row();

        if (get_row_layout() == 'content_title'):


        elseif (get_row_layout() == 'pdf_file'):
            get_template_part('parts/flexible/sa_pdf_file');

        endif;

    endwhile;

else :
    // no layouts found
 ?>
     <h1><?php the_title() ?></h1>
    <?php
endif;
