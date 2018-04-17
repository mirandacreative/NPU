
<?php if ($pdf_file_select = get_sub_field('select_pdf_file')): ?>
    <?php if ('bc' == get_sub_field('meetingtype')):?> 
       <div class="single_pdf">  		
        <a href="<?php echo $pdf_file_select ?>" class="pdf" target="_blank"><?php the_sub_field('pdf_link_text') ?></a>
    	</div>    		
    	<?php endif; ?>



<?php endif; ?>

