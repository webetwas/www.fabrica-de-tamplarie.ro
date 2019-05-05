<?php 
/* 
* Template Name: Galerie foto 
*/

get_header();
the_post();
?>

<style>
	.title-page{
		background-color: rgba(0, 81, 130, 0.4);
		background: rgba(0, 81, 130, 0.4);
		color: rgba(0, 81, 130, 0.4);
		padding: 20px 0 20px 0;
		border-radius: 10px;
	}
	.title-page h1{
		color:white;
	}
	.title-page li{
		color:white;
	}
	.imagine-galerie {
		display: block;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		padding-bottom: 300px;
		margin-bottom: 20px;
		}
</style>

<main id="mt-main">
    <section class="mt-contact-banner wow fadeInUp" data-wow-delay="0.4s" style="background-image:url(<?php the_field('banner_galerie_foto') ?>)">
		  <div class="container">
		    <div class="row">
		      <div class="col-xs-12 text-center title-page">
		        <h1><?php the_title() ?></h1>
		        <nav class="breadcrumbs">
		          <ul class="list-unstyled">
		            <li><a href="/acasa" style="color: white">acasa <i class="fa fa-angle-right"></i></a></li>
		            <li><?php the_title() ?></li>
		          </ul>
		        </nav>
		      </div>
		    </div>
		  </div>
		</section>

		<div class="container">
			<div class="row">
<br>

					<?php 
						if(have_rows('galerie_imagini')){?>
	                		<div class="parent-container">
	                            <?php 
									while (have_rows('galerie_imagini')){
									the_row(); 	 	
									$imagine_galerie = get_sub_field('adauga_imagine_galerie')
								?>
								<div class="col-sm-3">
											<a class="imagine-galerie" href="<?php echo $imagine_galerie; ?>" style="background-image: url(<?php echo $imagine_galerie; ?>) "></a>
								</div>

	                            <?php
									}
								?>
	                		</div>
	                	<?php 
						}
	      				?>
	      				<br>
		      </div>
		</div>
</main>

<?php 
get_footer();

?>