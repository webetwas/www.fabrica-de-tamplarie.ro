<?php 
/* 
* Template Name: Galerie video 
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
	.video-galerie {
		display: block;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		padding-bottom: 300px;
		margin-bottom: 20px;
		position: relative;
	}
	.video-container .video-galerie i {
    position: absolute;
    bottom: calc( 50% - 35px );
    display: block;
    right: calc( 50% - 30px );
    font-size: 70px;
	}
</style>

<main id="mt-main">
    <section class="mt-contact-banner wow fadeInUp" data-wow-delay="0.4s" style="background-image:url(<?php the_field('banner_galerie_video') ?>)">
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

	<section>
		<div class="container">
			<div class="row">
<br>

					<?php 
						if(have_rows('proiect_video')){?>
	                		<div class="video-container">
	                            <?php 
									while (have_rows('proiect_video')){
									the_row(); 	 	
									$imagine_galerie = get_sub_field('imagine_video');
									$link_video = get_sub_field('link_video');
								?>
								<div class="col-sm-4">
											<a class="video-galerie" href="<?php echo $link_video; ?>" style="background-image: url(<?php echo $imagine_galerie; ?>) ">
												<i class="fa fa-play-circle" aria-hidden="true"></i>
											</a>
											
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
	</section>


</main>		






<?php 
get_footer();
?>