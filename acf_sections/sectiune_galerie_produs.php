<style>
	.img-galerie {
		display: block;
		width: auto;
		margin: 20px;
	}
</style>


<?php

// check if the flexible content field has rows of data

if (have_rows('content_sections')) :
	?>
	<h2 class="text-center mtb-30" style="color:#f96362;">Galerie Rulouri</h2>
	<main id="mt-main">
		<div class="container">
			<div class="row">
				<?php
				// loop through the rows of data
				while (have_rows('content_sections')) : the_row();
					// check current row layout
					if (get_row_layout() == 'galerie_foto_produs') :
						// check if the nested repeater field has rows of data
						if (have_rows('lista_galerie')) :

							// loop through the rows of data
							while (have_rows('lista_galerie')) : the_row();

								$image = get_sub_field('imagini_galerie'); ?>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 wow fadeInRight galerie-noua" data-wow-delay="0.4s">
									<a href="<?php echo $image; ?>" style="background-image: url('<?php echo $image; ?>'); height: 200px; background-position: center; background-repeat: no-repeat; background-size: cover; margin-bottom: 30px; display: block;"></a>
								</div>
							<?php endwhile;
					endif;
				endif;
			endwhile;
			?>
			</div>
		</div>
	</main>
<?php
endif;
?>