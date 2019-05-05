<style>
    .img-usi{
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
                    if( get_row_layout() == 'sectiune_usi_rezidentiale' ):
                        // check if the nested repeater field has rows of data
                        if( have_rows('lista_usi') ):

                            // loop through the rows of data
                            while ( have_rows('lista_usi') ) : the_row();

                                $image = get_sub_field('imagine');
                                $title = get_sub_field('titlu');?>
                                <div class="col-xs-3 col-sm-3 col-md-3 wow fadeInRight" data-wow-delay="0.4s">
                                    
                                    <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="img-usi">
                                    <p class="text-center"><?php echo $title; ?></p>
                                    
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