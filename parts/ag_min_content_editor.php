<?php
// check if the flexible content field has rows of data
if (have_rows('main')):

    // loop through the rows of data
    while (have_rows('main')) : the_row();

        if (get_row_layout() == 'content_editor'):
            get_template_part('parts/flexible/content_editor');

        endif;

    endwhile;

else :
    // no layouts found
 ?>
     <h1><?php the_title() ?></h1>
    <?php
endif;
