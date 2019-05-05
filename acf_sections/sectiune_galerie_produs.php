<style>
    .img-galerie{
        display: block;
        width: auto;
        margin:20px auto;
    }

    p{
        margin: 20px 0 20px 0;
    }

</style>


<?php

// check if the flexible content field has rows of data

if( have_rows('content_sections') ):
?>
	<main id="mt-main">
	    <div class="container">
	        <div class="row">
	            <?php       
	                // loop through the rows of data
	                while ( have_rows('content_sections') ) : the_row();
	                    // check current row layout
	                    if( get_row_layout() == 'galerie_foto_produs' ):
	                        // check if the nested repeater field has rows of data
	                        if( have_rows('lista_galerie') ):

	                            // loop through the rows of data
	                            while ( have_rows('lista_galerie') ) : the_row();

	                                $image = get_sub_field('imagini_galerie');?>
		                                <div class="col-xs-3 col-sm-3 col-md-3 wow fadeInRight" data-wow-delay="0.4s">
		                                    <p>
		                                    	<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="img-galerie">
		                                    </p>
		                                </div>
	                                <?php endwhile;
	                        endif;
	                    endif;
	                endwhile;
	            else :
				?>
	        </div>
	    </div>
	</main>
<?php    
    endif;
?>