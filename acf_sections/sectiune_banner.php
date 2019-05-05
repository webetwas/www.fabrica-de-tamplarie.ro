<style>
	.mt-product-detial .image-banner {
		background-size: cover;
		background-repeat: no-repeat;
		display: block;
	    padding-bottom: 300px;
	    background-position: center;
	    background-color: white;
	}
</style>


	<?php

	// check if the flexible content field has rows of data
	if( have_rows('content_sections') ) {?>
		<main id="mt-main">
			<section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s">
				<div class="container">
					<div class="row">
						<?php
					     // loop through the rows of data
					    while ( have_rows('content_sections') ) {
					     the_row();

					        if( get_row_layout() == 'sectiune_banner' ) { ?>

								<div class="col-sm-12">
									<div class="image-banner" style="background-image: url(<?php the_sub_field('banner_produse'); ?>)"></div>
								</div>
					       <?php };
					    
					    };?>

					</div>
				</div>
			</section>
		</main>	
	<?php		
	};

	?>