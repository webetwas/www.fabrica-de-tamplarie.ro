<?php

// check if the flexible content field has rows of data
if( have_rows('content_sections') ):

 	// loop through the rows of data
    while ( have_rows('content_sections') ) : the_row();

		// check current row layout
        if( get_row_layout() == 'sectiune_sticla_deco' ):

        	// check if the nested repeater field has rows of data
        	if( have_rows('imagini_sticla') ):

			 	// loop through the rows of data
			    while ( have_rows('imagini_sticla') ) : the_row();

					$image = get_sub_field('imagine');
					$title = get_sub_field('titlu_sticla');?>



				<?php endwhile;

			endif;

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>