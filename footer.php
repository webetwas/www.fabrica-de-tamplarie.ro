<!-- footer of the Page -->
<footer id="mt-footer" class="style7 wow fadeInUp" data-wow-delay="0.4s">
    <!-- Footer Holder of the Page -->
    <div class="footer-holder dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <!-- F Widget About of the Page -->
                    <div class="nav-widget-1">
                        <h3 class="f-widget-heading">GDPR</h3>
                        <ul class="list-unstyled f-widget-nav">
                            <li><a href="">Protectia datelor cu caracter personal</a></li>
                            <li><a href="">Politica Cookies</a></li>
                            <li><a href="">Termeni si conditii</a></li>
                            <li><a href="">Politica de confidentialitate</a></li>
                        </ul>
                    </div>
                    <!-- F Widget About of the Page end -->
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 mt-paddingbottomsm">
                    <div class="nav-widget-1">
                        <h3 class="f-widget-heading">Informatii</h3>
                        <ul class="list-unstyled f-widget-nav">
                            <li><a href="/despre-noi">Despre noi</a></li>
                            <li><a href="/galerie-foto">Galerie foto</a></li>
                            <li><a href="/galerie-video">Galerie foto</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="http://www.anpc.gov.ro" target="_blank">ANPC</a></li>
                            <li><a href="/wp-admin" target="_blank">Admin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs">
                    <!-- Footer Tabs of the Page -->
                    <div class="f-widget-tabs">
                        <h3 class="f-widget-heading">Tag-uri</h3>
                        <?php
                        if (have_rows('tag_uri', 'options')) { ?>
                            <ul class="list-unstyled tabs">
                                <?php
                                while (have_rows('tag_uri', 'options')) {
                                    the_row();
                                    ?>
                                    <li>
                                        <a href="#">
                                            <?php
                                            the_sub_field('adauga_tag', 'options')
                                            ?>
                                        </a>
                                    </li>
                                <?php
                            }
                            ?>
                            </ul>
                        <?php
                    }
                    ?>
                    </div>
                    <!-- Footer Tabs of the Page -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 text-right">
                    <!-- F Widget About of the Page -->
                    <div class="f-widget-about">
                        <h3 class="f-widget-heading">Unde ne gasiti ...</h3>
                        <ul class="list-unstyled address-list align-right">
                            <li>
                                <strong><?php the_field('companie', 'options'); ?></strong>
                                <i class="fa fa-university"></i>
                            </li>
                            <li>
                                <a href="">
                                    <?php the_field('nume_prenume', 'options'); ?></a>
                                <i class="fa fa-user"></i>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <address>
                                    <?php the_field('adresa_pct_lucru', 'options'); ?>
                                </address>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="tel:<?php the_field('telefon', 'options'); ?>">
                                    <?php the_field('telefon', 'options'); ?></a>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <a href="mailto:<?php the_field('email', 'options'); ?>">
                                    <?php the_field('email', 'options'); ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- F Widget About of the Page end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Holder of the Page end -->
    <!-- Footer Area of the Page -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>© <a href="index.php">Fabrica de TAMPLARIE</a> - Toate drepturile rezervate</p>
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <div class="by">
                        <a href="http://www.webetwas.com">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webetwas.png" alt="webetwas" width="100" height="auto">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area of the Page end -->
</footer><!-- footer of the Page end -->

</div><!-- W1 end here -->
<span id="back-top" class="fa fa-arrow-up"></span>


<!-- include jQuery -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.js"></script>
<!-- include jQuery -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/plugins.js"></script>
<!-- include jQuery -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.main.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/image-galery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
<script>
    $('.parent-container').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
            enabled: true
        }
        // other options
    });
    $('.galerie-noua').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    $('.video-container').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: function(url) {
                        var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                        if (!m || !m[1]) return null;
                        return m[1];
                    },
                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: function(url) {
                        var m = url.match(/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/);
                        if (!m || !m[5]) return null;
                        return m[5];
                    },
                    src: '//player.vimeo.com/video/%id%?autoplay=1'
                }
            }
        }
        // other options
    });

    $(function() {
        $('.boxequal').matchHeight();
        $('.boxequal-2').matchHeight();
    });
</script>
</body>

</html>