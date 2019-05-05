<?php 
/* 
* Template Name: Acasa 
*/
get_header();
the_post();
?>
<!-- mt main slider start here -->
<?php 
	if(have_rows('banner','options')){ ?>
<div class="mt-main-slider">
    <!-- slider banner-slider start here -->
    <div class="slider banner-slider">
        <?php 
				while (have_rows('banner', 'options')){
				the_row(); 	 	
			?>
        <div class="holder text-center"
            style="background-image: url(<?php the_sub_field('imagine_banner', 'options') ?>);">

            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="text centerize">
                            <strong class="title"
                                style="color: #ff6060"><?php the_sub_field('slogan_banner', 'options') ?></strong>
                            <h1><?php the_sub_field('titlu_banner', 'options') ?></h1>
                            <h2><?php the_sub_field('titlu_banner2', 'options') ?></h2>
                            <div class="txt">
                                <p style="color: #ff6060"><?php the_sub_field('text_divers_banner', 'options') ?></p>
                            </div>
                            <a href="/single-product" class="shop">vezi produsele noastre</a>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- holder end here -->
        <?php
				}
			?>
    </div>
    <!-- slider regular end here -->
</div><!-- mt main slider end here -->
<?php 
	}
?>


<section class="mt-about-sec wow fadeInUp" data-wow-delay="0.4s">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="txt">
                    <h2>Cine suntem?</h2>
                    <div class="col-sm-9">
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                    <div class="col-sm-3"><img src="<?php the_field('acasa_imagine')?>" alt=""></div>
                </div>
                <div class="mt-follow-holder col-sm-12">
                    <!-- Social Network of the Page -->
                    <ul class="list-unstyled social-network text-center">
                        <li><span class="title text-center" style="color:#ff6060; letter-spacing: 10px">
                                <h3><strong>Fii SOCIABIL!</strong> <em style="color:#4267b2;">urmareste-ne</em></h3>
                            </span></li>
                        <hr>
                        <li><a href="<?php the_field('facebook', 'options') ?>"><i class="fa fa-facebook fa-2x"
                                    style="color: #4267b2"></i></a></li>
                        <li style="margin: 0 100px 0 100px;"><a href="<?php the_field('youtube', 'options') ?>"><i
                                    class="fa fa-youtube fa-2x" style="color: #ff0000"></i></a></li>
                        <li><a href="<?php the_field('telefon', 'options') ?>"><i class="fa fa-phone fa-2x"
                                    style="color: #2db23f"></i></a></li>
                    </ul>
                    <!-- Social Network of the Page end -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- mt clients start here -->
<div class="mt-bestseller bg-grey text-center wow fadeInUp" data-wow-delay="0.4s">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mt-heading text-uppercase">
                <h2 class="heading">Clientii nostrii</h2>
                <p>Casnici & Industriali</p>
            </div>
        </div>
        <div class="row">
            <div class="bestseller-slider">

                <?php 
					if(have_rows('clientii','options')){?>


                <?php 
											while (have_rows('clientii','options')){
											the_row(); 	 	
										?>
                <div class="slide col-md-3">
                    <div class="mt-product1 large">
                        <div class="box">
                            <div class="b1">
                                <div class="b2">
                                    <a href="<?php the_sub_field('site_client','options') ?>" target='_blank'>
                                        <img src="<?php the_sub_field('imagine_client','options') ?>" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php
											}
										?>


                <?php 
					}
                   ?>
            </div>
        </div>
    </div>
</div>

<div class="mt-smallproducts wow fadeInUp" data-wow-delay="0.4s">
    <div class="container">
        <div class="row">
            <!-- mt patners start here -->
            <div class="mt-patners wow fadeInUp" data-wow-delay="0.4s">
                <h2 class="heading">PARTENERII <span>nostrii</span></h2>
                <!-- patner slider start here -->

                <?php 
					if(have_rows('logo_brand','options')){?>
                <div class="patner-slider">
                    <?php 
								while (have_rows('logo_brand','options')){
								the_row(); 	 	
							?>
                    <div class="slide">
                        <div class="box1">
                            <div class="box2"><a href="#"><img src="<?php the_sub_field('imagine_brand','options') ?>"
                                        alt=""></a></div>
                        </div>
                    </div>

                    <?php
								}
							?>
                </div>
                <?php 
					}
                   ?>
            </div><!-- mt patners end here -->
        </div>
    </div>
</div><!-- mt bestseller end here -->


<?php 
get_footer();
 ?>