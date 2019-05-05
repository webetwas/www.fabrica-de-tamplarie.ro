<?php 
/* 
* Template Name: Despre Noi 
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
</style>

      <main id="mt-main">
        <section class="mt-contact-banner wow fadeInUp" data-wow-delay="0.4s" style="background-image:url(<?php the_field('banner_despre_noi') ?>)">
    		  <div class="container">
    		    <div class="row">
    		      <div class="col-xs-12 text-center title-page">
    		        <h1>Despre noi</h1>
    		        <nav class="breadcrumbs">
    		          <ul class="list-unstyled">
    		            <li><a href="/acasa" style="color: white">acasa <i class="fa fa-angle-right"></i></a></li>
    		            <li>despre noi</li>
    		          </ul>
    		        </nav>
    		      </div>
    		    </div>
    		  </div>
    		</section>
        <!-- Mt About Section of the Page -->
        <section class="mt-about-sec wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="txt">
                  <h2><?php the_title(); ?></h2>
                  <div class="col-sm-9">
                  <p><?php echo get_the_content(); ?></p>
                  </div>
                  <div class="col-sm-3"><img src="<?php the_field('imagine_despre_noi') ?>" alt=""></div>
                </div>
                <div class="mt-follow-holder">
                  <span class="title" style="color:#ff6060">Fii SOCIABIL !<br> urmareste-ne</span>
                  <!-- Social Network of the Page -->
                  <ul class="list-unstyled social-network">
                    <li><a href="<?php the_field('facebook', 'options') ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php the_field('youtube', 'options') ?>"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="<?php the_field('telefon', 'options') ?>"><i class="fa fa-phone"></i></a></li>
                  </ul>
                  <!-- Social Network of the Page end -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt About Section of the Page -->
        <hr>
        <!-- Mt Team Section of the Page -->
        <section class="mt-team-sec">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h3>Echipa Noastra</h3>
                  <?php 
          					if(have_rows('echipa_mea','options')){?>
                          		<div class="holder">
                                      <?php 
          								while (have_rows('echipa_mea','options')){
          								the_row(); 	 	
          							?>
                			<!-- col of the Page -->
			                  <div class="col wow fadeInLeft" data-wow-delay="0.4s">
			                    <div class="img-holder">
			                      <a href="#">
			                        <img src="<?php the_sub_field('poza_membru','options') ?>" alt="">
			                      </a>
			                    </div>
			                    <div class="mt-txt">
			                      <h4><a href="#"><?php the_sub_field('nume_prenume_membru','options') ?></a></h4>
			                      <span class="sub-title"><?php the_sub_field('functie_membru','options') ?></span>
			                      <span class="sub-title">
			                      		<a href="tel:<?php the_sub_field('telefon_membru','options') ?>">
			                      		<?php the_sub_field('telefon_membru','options') ?></a>
			                      </span>
			                    </div>
			                  </div>
			                  <!-- col of the Page end -->
                            <?php
        								}
        							?>
                        		</div>
                        	<?php 
        					}
                           ?>
              </div>
            </div>
          </div>
        </section>
      </main>



<?php 
get_footer();
 ?>