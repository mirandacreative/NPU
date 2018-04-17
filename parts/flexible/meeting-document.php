<?php   
		
		if( have_rows('single_doc') ):
		
			$count = 0; 
	 		echo '<div class="row docblocks padfix">';
			echo '<div class="row">
				        <div class="col-sm-6">
				        	<span class="colname">Document Name</span>
				        </div>
				        <div class="col-sm-2">
				        	<span class="colname">Notice</span>
				        </div>
				        <div class="col-sm-2">
				        	<span class="colname">Agenda</span>
				        </div>
				        <div class="col-sm-2">
				        	<span class="colname">Minutes</span>
				        </div>
	    		</div>';
	 	// loop through the rows of data
	    while ( have_rows('single_doc') ) : the_row();
	    	$count++;
			$doctitle = get_sub_field('doc_title');
			$noticefile = get_sub_field('notice_file');
			$agendafile = get_sub_field('agenda_file');
			$minutesfile = get_sub_field('minutes_file');	
			$rowclass = 'odd';
			if ( $count % 2 == 0 ){ $rowclass = 'even' ;}		

		echo '<div class="row '.$rowclass.'">
			        <div class="col-sm-6 title"><span class="title">'.$doctitle.'</span></div>
			        <div class="col-sm-2">';
			        if (get_sub_field('notice_file')){ 
					echo '<a target="_blank" href="'.$noticefile.'" class="pdf">Notice</a>';
					};
			        echo '</div>
			         <div class="col-sm-2">';
			        
			        if (get_sub_field('agenda_file')){ 			         
			        echo '<a target="_blank" href="'.$agendafile.'" class="pdf">Agenda</a>';
			        };
			        echo '</div>
			        <div class="col-sm-2">';
			        if (get_sub_field('minutes_file')){ 
				    echo '<a target="_blank" href="'.$minutesfile.'" class="pdf">Minutes</a>';
			        };

			        echo '</div>
    		</div>';


		endwhile;

		echo '</div>';

		endif; ?>