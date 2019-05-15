<?php
get_header();
the_post();
?>
<style>
    .separator {
        margin: 10px 0;
        bottom: -10px;
        height: 10px;
        opacity: .6;
        background: -webkit-radial-gradient(50% 0 ellipse, rgba(0, 0, 0, .3) 0, transparent 70%);
        background: radial-gradient(ellipse at 50% 0, rgba(0, 0, 0, .3) 0, transparent 70%);
    }

    .col-image img {
        text-align: center;
        color: #333333;
        background-color: white;
        font-weight: 700;
        width: 100%;
        height: auto;
        display: inline-grid;
        border: 0;
    }


    .culori img {
        /*width: 150px;*/
        width: 80%;
        height: auto;
        /* display: inline-grid; */
        border: 0;
    }



    img :hover {
        -moz-box-shadow: 0px 0px 30px #696e85;
        -webkit-box-shadow: 0px 0px 30px #696e85;
        box-shadow: 0px 0px 30px #696e85;
        border-radius: 10px;
    }

    .mtb-30 {

        margin: 30px 0 30px 0;

    }

    /*calaog pdf right*/
    #menu {
        position: fixed;
        right: -10px;
        top: 50%;
        margin-top: -2.5em;
        z-index: 1030;
        width: 155px;
    }

    #menu li {
        list-style-type: none;
        margin-bottom: 10px;
    }

    #menu i {
        padding: 0 10px 0 0;
    }

    .feronerie_usi2 img {
        max-height: 190px;
        max-width: 100%;
        width: auto;
    }

    .feronerie_usi2 .cols_3 {
        border-right: 1px solid rgba(0, 0, 0, 0.1);
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .shadow_on_hover {
        padding-top: 15px;
        padding-bottom: 15px;
        cursor: pointer;
        transition: box-shadow 0.3s ease-in-out;


    }

    .shadow_on_hover:hover {
        box-shadow: 0px 0px 102px -12px rgba(0, 0, 0, 0.75);
    }

    /*calaog pdf right*/
</style>
<?php
get_template_part('acf_sections/sectiune_sticla_deco');
get_template_part('acf_sections/sectiune_baghete_ornamentale');
// get_template_part('acf_sections/sectiune_galerie_produs');
?>
<?php

$catalogpdf = get_field('catalog_pdf', 'options');


if (!empty($catalogpdf) && isset($catalogpdf)) { ?>
    <ul id="menu">
        <li>
            <a href="<?php echo $catalogpdf; ?>" target="_blank" class="btn btn-danger">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>Catalog USI
            </a>
        </li>
        <li>
            <a href="tel:<?php get_field('telefon', 'options') ?>" class="btn btn-success">
                <i class="fa fa-phone" aria-hidden="true"></i>Suna acum</a>
        </li>
    </ul>
<?php
}
?>
<main id="mt-main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInRight" data-wow-delay="0.4s">
                <?php

                if (have_rows('usi_rezidentiale', 'options')) { ?>
                    <ul class="mt-productlisthold list-inline mt-product">
                        <?php

                        while (have_rows('usi_rezidentiale', 'options')) {

                            the_row();

                            ?>
                            <li>
                                <!-- mt product1 large start here -->
                                <div class="mt-product1 large">
                                    <div class="box">
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="product-detail.php"><img src="<?php the_sub_field('imagine_usa')  ?>" alt=""></a>
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
<main id="mt-main">
    <!-- detalii pagina -->
    <section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Slider of the Page -->
                    <?php
                    $imageprodus = get_the_post_thumbnail_url();

                    if (!empty($imageprodus) && isset($imageprodus)) { ?>
                        <div class="slider">
                            <div class="product-slider">
                                <div class="slide">
                                    <img src="<?php echo $imageprodus; ?>" alt="<?php the_title(); ?>">
                                </div>
                            </div>
                        </div>
                    <?php
                }
                ?>
                    <!-- Slider of the Page end -->
                    <!-- Detail Holder of the Page -->
                    <div class="detial-holder">
                        <!-- Breadcrumbs of the Page -->
                        <ul class="list-unstyled breadcrumbs">
                            <li><a href="javascript:void(0);">Catalog Produse <i class="fa fa-angle-right"></i></a></li>
                            <li>
                                <?php the_title(); ?>
                            </li>
                        </ul>
                        <!-- Breadcrumbs of the Page end -->
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <ul class="list-unstyled list">
                            <li><a href="#"><i class="fa fa-share-alt"></i>SHARE Facebook</a></li>
                        </ul>
                        <div class="txt-wrap">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <!-- Detail Holder of the Page end -->
                </div>
            </div>
        </div>
        <br><br>
        <br>
    </section>
    <!--baghete ornamentale-->
    <?php

    if (have_rows('baghete')) { ?>
        <div class="container">
            <div class="row  mtb-30">
                <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class='text-center mtb-30' style="color:#f96362;"><u>
                            <?php the_field('baghete_titlu') ?></u></h2>
                    <div class="text-wraper text-center mtb-30">
                        <?php the_field('text_introductiv'); ?>
                    </div>
                    <div class="row">
                        <?php

                        while (have_rows('baghete')) {

                            the_row();

                            ?>
                            <div class="col-sm-2 col-image">
                                <a href="" class="">
                                    <img src="<?php the_sub_field('imagine_bagheta') ?>" alt="">
                                    <p class="mtb-30">
                                        <?php the_sub_field('tip_bagheta') ?>
                                    </p>
                                </a>
                            </div>
                        <?php

                    }

                    ?>
                    </div>
                </div>
            </div>
        </div>
    <?php

}

?>
    <!--baghete ornamentale-->
    <!--sticla decorativa-->
    <?php

    if (have_rows('sticla_decorativa')) { ?>
        <section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <div class="row mtb-30">
                    <div class="col-xs-12">
                        <h2 class='text-center' style="color:#f96362;"><u>
                                <?php the_field('titlu_sticla_decorativa') ?></u></h2>
                        <div class="row">
                            <?php

                            while (have_rows('sticla_decorativa')) {

                                the_row();

                                ?>
                                <div class="col-sm-2 col-image" style="background-color:#f6f6f6">
                                    <a href="" class="">
                                        <img src="<?php the_sub_field('model') ?>" alt="">
                                        <p class="mtb-30">
                                            <?php the_sub_field('titlu_model') ?>
                                        </p>
                                    </a>
                                </div>
                            <?php

                        }

                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php

}

?>
    <!--sticla decorativa-->



    <!--usi industriale-->
    <?php
    if (have_rows('sistem_culisant')) { ?>
        <div class="container">
            <div class="row  mtb-30">
                <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class='text-center mtb-30' style="color:#f96362;">
                        <u>
                            <?php the_field('titlu_sisteme_culisante') ?></u>
                    </h2>
                    <div class="row">
                        <?php
                        while (have_rows('sistem_culisant')) {
                            the_row();
                            ?>
                            <div class="col-sm-4 col-image shadow_on_hover">
                                <a href="" class="">
                                    <img src="<?php the_sub_field('imagine_sistem') ?>" alt="">
                                    <p class="mtb-30">
                                        <?php the_sub_field('tip_sistem') ?>
                                    </p>
                                </a>
                            </div>
                        <?php

                    }
                    ?>
                        <div class="col-sm-6 col-image">
                            <a href="" class="">
                                <img src="<?php the_field('sistem_prag') ?>" alt="">
                            </a>
                            <p>
                                <?php the_field('denumire_prag') ?>
                            </p>
                        </div>
                        <div class="col-sm-6 col-image">
                            <a href="" class="">
                                <img src="<?php the_field('sistem_prag_2') ?>" alt="">
                            </a>
                            <p>
                                <?php the_field('denumire_prag_2') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
?>
    <!--usi industriale-->
    <!--tipologii usi-->
    <?php
    if (have_rows('tipologii_usi')) { ?>
        <div class="container">
            <div class="row  mtb-30">
                <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class='text-center mtb-30' style="color:#f96362;">
                        <u>
                            <?php the_field('titlu_tipologii_usi') ?></u>
                    </h2>
                    <div class="row">
                        <?php
                        while (have_rows('tipologii_usi')) {
                            the_row();
                            ?>
                            <div class="col-sm-2 col-image boxequal-2">
                                <a href="" class="">
                                    <img src="<?php the_sub_field('imagine') ?>" alt="">
                                </a>
                            </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
?>
    <!--tipologii usi-->
    <!--tab-uri-->
    <?php

    $feronerie = get_field('nume_tab_feronerie');
    $culori = get_field('nume_tab_culori');
    $plasainsecte = get_field('nume_tab_plasainsecte');
    $glafuri = get_field('nume_tab_glafuri');
    $sistemventilatie = get_field('nume_tab_ventilatie');
    $manereusi = get_field('nume_tab_manere_usi');
    $baghetaornamentala = get_field('nume_tab_baghete_ornamentale');





    if ($feronerie || $culori || $plasainsecte || $glafuri || $sistemventilatie || $manereusi || $baghetaornamentala) {

        ?>
        <div class="product-detail-tab wow fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="mt-tabs text-center text-uppercase">
                            <li>
                                <a href="#tab1">
                                    <?php
                                    if (!empty($feronerie) && isset($feronerie)) {
                                        echo '<li><a href="#tab1" class="active">' . $feronerie . '</a></li>';
                                    } else {
                                        echo "";
                                    }
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="#tab2">
                                    <?php
                                    if (!empty($culori) && isset($culori)) {
                                        ?>
                                <li><a href="#tab2" class="active">
                                        <?php echo $culori; ?></a></li>
                            <?php
                        }
                        ?>
                            </a>
                            </li>
                            <li>
                                <a href="#tab3">
                                    <?php
                                    if (!empty($plasainsecte) && isset($plasainsecte)) {
                                        ?>
                                <li><a href="#tab3" class="active">
                                        <?php echo $plasainsecte; ?></a></li>
                            <?php
                        }
                        ?>
                            </a>
                            </li>
                            <li>
                                <a href="#tab4">
                                    <?php
                                    if (!empty($glafuri) && isset($glafuri)) {
                                        ?>
                                <li><a href="#tab4" class="active">
                                        <?php echo $glafuri; ?></a></li>
                            <?php
                        }
                        ?>
                            </a>
                            </li>
                            <li>
                                <a href="#tab5">
                                    <?php
                                    if (!empty($sistemventilatie) && isset($sistemventilatie)) {
                                        ?>
                                <li><a href="#tab5" class="active">
                                        <?php echo $sistemventilatie; ?></a></li>
                            <?php
                        }
                        ?>
                            </a>
                            </li>
                            <li>
                                <a href="#tab6">
                                    <?php
                                    if (!empty($manereusi) && isset($manereusi)) {
                                        ?>
                                <li><a href="#tab6" class="active">
                                        <?php echo $manereusi; ?></a></li>
                            <?php
                        }
                        ?>
                            </a>
                            </li>
                            <li>
                                <a href="#tab7">
                                    <?php
                                    if (!empty($baghetaornamentala) && isset($baghetaornamentala)) {
                                        ?>
                                <li><a href="#tab7" class="active">
                                        <?php echo $baghetaornamentala; ?></a></li>
                            <?php
                        }
                        ?>
                            </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1">
                                <p>
                                    <?php
                                    if (have_rows('imagine_feronerie')) {
                                        ?>
                                        <div class="row">
                                            <?php
                                            while (have_rows('imagine_feronerie')) {
                                                the_row();
                                                ?>
                                                <div class="col-sm-2 col-image text-center">
                                                    <p><img src="<?php the_sub_field('img_feronerie') ?>" alt="<?php the_sub_field('denumire_imagine') ?>"></p>
                                                    <p>
                                                        <?php the_sub_field('denumire_imagine') ?>
                                                    </p>
                                                </div>
                                            <?php

                                        }

                                        ?>
                                        </div>
                                    <?php

                                }

                                ?>
                                </p>
                            </div>
                            <div id="tab2">
                                <p>
                                    <?php

                                    if (have_rows('imagini_culori')) { ?>
                                        <div class="row">
                                            <?php

                                            while (have_rows('imagini_culori')) {

                                                the_row();

                                                ?>
                                                <div class="col-sm-2 col-image">
                                                    <a href="" class="">
                                                        <img src="<?php the_sub_field('imagine') ?>" alt="<?php the_sub_field('denumire_culoare') ?>">
                                                        <p>
                                                            <?php the_sub_field('denumire_culoare') ?>
                                                        </p>
                                                    </a>
                                                </div>
                                            <?php

                                        }

                                        ?>
                                        </div>
                                    <?php

                                }

                                ?>
                                </p>
                            </div>
                            <div id="tab3">
                                <p>
                                    <div class="col-sm-7">
                                        <?php the_field('descriere_plasa_insecte') ?>
                                    </div>
                                    <div class="col-sm-5">
                                        <img src="<?php the_field('imagine_plasa_insecte') ?>" alt="plasa insecte">
                                    </div>
                                </p>
                            </div>
                            <div id="tab4">
                                <p>
                                    <div class="col-sm-5">
                                        <img src="<?php the_field('imagine_ glafuri') ?>" alt="glafuri pvc">
                                    </div>
                                    <div class="col-sm-7">
                                        <?php the_field('descriere_ glafuri') ?>
                                    </div>
                                </p>
                            </div>
                            <div id="tab5">
                                <p>
                                    <div class="col-sm-7">
                                        <?php the_field('descriere_ sistem_ventilatie') ?>
                                    </div>
                                    <div class="col-sm-5">
                                        <img src="<?php the_field('imagine_ sistem_ventilatie') ?>" alt="sisteme de ventilatie">
                                    </div>
                                </p>
                            </div>

                            <div id="tab6">
                                <p>
                                    <?php
                                    if (have_rows('manere_usi')) { ?>
                                        <div class="row">
                                            <?php
                                            while (have_rows('manere_usi')) {
                                                the_row();
                                                ?>
                                                <div class="col-sm-2 col-image">
                                                    <a href="" class="">
                                                        <img src="<?php the_sub_field('imagine') ?>" alt="<?php the_sub_field('denumire_imagine') ?>">
                                                        <p>
                                                            <?php the_sub_field('denumire_imagine') ?>
                                                        </p>
                                                    </a>
                                                </div>
                                            <?php
                                        }
                                        ?>
                                        </div>
                                    <?php
                                }
                                ?>
                                </p>
                            </div>

                            <div id="tab7">
                                <p>
                                    <?php
                                    if (have_rows('baghete_ornamentale')) { ?>
                                        <div class="row">
                                            <?php
                                            while (have_rows('baghete_ornamentale')) {
                                                the_row();
                                                ?>
                                                <div class="col-sm-4 col-image">
                                                    <a href="" class="">
                                                        <img src="<?php the_sub_field('imagine') ?>" alt="<?php the_sub_field('denumire_imagine') ?>">
                                                        <p>
                                                            <?php the_sub_field('denumire_imagine') ?>
                                                        </p>
                                                    </a>
                                                </div>
                                            <?php
                                        }
                                        ?>
                                        </div>
                                    <?php
                                }
                                ?>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php

}

?>
    <!--tab-uri-->

    <!--feronerie fereastra tehno pvc-->
    <?php
    if (have_rows('tab_feronerie_ferestre_pvc')) { ?>
        <section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <div class="row mtb-30">
                    <div class="col-xs-12">
                        <div class="row">
                            <?php

                            while (have_rows('tab_feronerie_ferestre_pvc')) {

                                the_row();

                                ?>
                                <div class="col-sm-4 col-image" style="background-color:#f6f6f6">
                                    <a href="" class="">
                                        <p class="mtb-30">
                                            <?php the_sub_field('denumire') ?>
                                        </p>
                                        <img src="<?php the_sub_field('imagine') ?>" alt="" class="">
                                    </a>
                                </div>
                            <?php

                        }

                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
?>
    <!--feronerie fereastra tehno pvc-->

    <!--feronerie usa tehno pvc-->
    <?php

    if (have_rows('tab_feronerie_usi_pvc')) { ?>
        <div class="container">
            <div class="row  mtb-30">
                <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="text-wraper text-center mtb-30">
                        <?php the_field('text_introductiv'); ?>
                    </div>
                    <div class="row feronerie_usi2 text-center">
                        <?php

                        while (have_rows('tab_feronerie_usi_pvc')) {

                            the_row();

                            ?>
                            <div class="col-sm-4 col-image shadow_on_hover">

                                <p><img src="<?php the_sub_field('imagine') ?>" alt=""></p>
                                <p class="mtb-30 text-center">
                                    <?php the_sub_field('denumire') ?>
                                </p>
                                <p class="mtb-30 text-center">
                                    <img src="<?php the_sub_field('culori') ?>" class="culori">
                                </p>
                            </div>
                        <?php

                    }

                    ?>
                    </div>
                </div>
            </div>
        </div>
    <?php

}

?>
    <!--feronerie usa tehno pvc-->

    <!--feronerie fereastra tehno pvc-->
    <?php
    if (have_rows('tab_feronerie_ferestre_aluminiu')) { ?>
        <section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <div class="row mtb-30">
                    <div class="col-xs-12">
                        <div class="row">
                            <?php

                            while (have_rows('tab_feronerie_ferestre_aluminiu')) {

                                the_row();

                                ?>
                                <div class="col-sm-6 col-image" style="background-color:#f6f6f6">
                                    <a href="" class="">
                                        <p class="mtb-30 text-center">
                                            <?php the_sub_field('denumire') ?>
                                        </p>
                                        <img src="<?php the_sub_field('imagine') ?>" alt="" class="">
                                    </a>
                                </div>
                            <?php

                        }

                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
?>
    <!--feronerie fereastra tehno pvc-->

    <!--feronerie usa tehno aluminiu-->
    <?php

    if (have_rows('tab_feronerie_usi_aluminiu')) { ?>
        <div class="container">
            <div class="row  mtb-30">
                <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="text-wraper text-center mtb-30">
                        <?php the_field('text_introductiv'); ?>
                    </div>
                    <div class="row feronerie_usi2 text-center">
                        <?php

                        while (have_rows('tab_feronerie_usi_aluminiu')) {

                            the_row();

                            ?>
                            <div class="col-sm-4 col-image shadow_on_hover">
                                <a href="" class="">
                                    <img src="<?php the_sub_field('imagine') ?>" alt="">
                                    <p class="mtb-30 text-center">
                                        <?php the_sub_field('denumire') ?>
                                    </p>
                                    <p class="mtb-30 text-center">
                                        <img src="<?php the_sub_field('culori') ?>" alt="">
                                    </p>
                                </a>
                            </div>
                        <?php

                    }

                    ?>
                    </div>
                </div>
            </div>
        </div>
    <?php

}

?>
    <!--feronerie usa tehno aluminiu-->

    <!--Rulouri-->

    <?php
    if (have_rows('rulouri')) { ?>
        <div class="separator"></div>
        <div class="container">
            <div class="row  mtb-30">
                <div class="col-sm-12 text-center">
                    <h2 class='text-center mtb-30' style="color:#f96362;">
                        <?php the_field('titlu_rulouri'); ?>
                    </h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class='text-center mtb-30' style="color:#f96362;">
                        <u><?php the_sub_field('denumire') ?></u>
                    </h2>
                    <div class="row">
                        <?php
                        while (have_rows('rulouri')) {
                            the_row();
                            ?>
                            <div class="col-sm-4 col-image">
                                <a href="" class="">
                                    <img src="<?php the_sub_field('imagine') ?>" alt="">
                                </a><br />
                                <p>
                                    <a href="">
                                        <h4 class="text-center"><?php the_sub_field('denumire'); ?></h4>
                                    </a>
                                </p>

                            </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>

    <?php
}
?>

    <?php
    if (get_field('automatizari')) {
        ?>
        <section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center" style="color:#f96362;">
                            <u>
                                <?php the_field('automatizari') ?>
                            </u>
                        </h2>
                        <div class="col-lg-6">
                            <div class="txt-wrap">
                                <?php the_field('descriere_automatizari') ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="<?php the_field('imagine_automatizare') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
?>

    <!--Rulouri-->

    <!--Avantaje & Detalii tehnice-->
    <?php
    if (get_field('avantaje_titlu') or get_field('detalii_tehnice_titlu')) {
        ?>
        <section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-6">
                            <h2 class="text-center" style="color:#f96362;"><u>
                                    <?php the_field('avantaje_titlu') ?></u></h2>
                            <div class="txt-wrap">
                                <?php the_field('avantaje_descriere') ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="text-center" style="color:#f96362;">
                                <u><?php the_field('detalii_tehnice_titlu') ?></u>
                            </h2>
                            <div class="txt-wrap">
                                <?php the_field('detalii_tehnice_text') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Avantaje & Detalii tehnice-->
    <?php
}

get_template_part('acf_sections/sectiune_lista_usi');
get_template_part('acf_sections/sectiune_galerie_produs');
?>

</main>


<div class="separator"></div>

<!--parteneri-->
<div class="mt-smallproducts wow fadeInUp" data-wow-delay="0.4s">
    <div class="container">
        <div class="row">
            <div class="mt-patners wow fadeInUp" data-wow-delay="0.4s">
                <h2 class="heading">PARTENERII <span>nostrii</span></h2>
                <?php

                if (have_rows('logo_brand', 'options')) { ?>
                    <div class="patner-slider">
                        <?php

                        while (have_rows('logo_brand', 'options')) {

                            the_row();

                            ?>
                            <div class="slide">
                                <div class="box1">
                                    <div class="box2"><a href="#"><img src="<?php the_sub_field('imagine_brand', 'options') ?>" alt=""></a></div>
                                </div>
                            </div>
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
</div>
<!--parteneri-->

<?php
get_footer();

?>