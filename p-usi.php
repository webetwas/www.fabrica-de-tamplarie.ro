<?php 
/**
* Template Name: Usi rezidentiale
*/
get_header();
the_post();
?>
<main id="mt-main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInRight" data-wow-delay="0.4s">
                <?php
					if(have_rows('usi_rezidentiale')){?>
                <ul class="mt-productlisthold list-inline mt-product">
                    <?php 
					while (have_rows('usi_rezidentiale')){
					the_row(); 	 	
					?>
                    <li>
                        <!-- mt product1 large start here -->
                        <div class="mt-product1 large">
                            <div class="box">
                                <div class="b1">
                                    <div class="b2">
                                        <a href=""><img src="<?php the_sub_field('imagine_usa')  ?>" alt="image description" class="img-usi"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="txt">
                                <strong class="title">
                                    <a href="product-detail.php">
                                        <?php the_sub_field('denumire_usa')  ?>
                                    </a>
                                </strong>
                            </div>
                        </div><!-- mt product1 center end here -->
                    </li>
                    <?php
					}
					?>
                </ul>
                <?php 
				}
				?>
            </div>
        </div>
    </div>
</main>
<?php 
get_footer();
 ?>