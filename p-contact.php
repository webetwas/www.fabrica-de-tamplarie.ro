<?php 
/* 
* Template Name: Contact 
*/

get_header();
the_post();
?>


      <!-- Main of the Page -->
      <main id="mt-main">
        <!-- Mt Map Holder of the Page -->
        <div class="mt-map-holder wow fadeInUp" data-zoom="8">
          <div class="map-info">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d712286.004176424!2d26.405976567724736!3d45.78387068136431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b42209fdcaefad%3A0xa8ba0287991a9703!2sJude%C8%9Bul+Vrancea!5e0!3m2!1sro!2sro!4v1551568098674" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <!-- Mt Map Holder of the Page end -->
        <!-- Mt Map Descrp of the Page -->
        <section class="mt-map-descrp wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 text-center">
                <h1>Fabrica de Tamplarie</h1>
                <p><?php echo get_the_content(); ?></p>
              </div>
            </div>
          </div>
        </section>
        <!-- Mt Map Descrp of the Page end -->
        <!-- Mt Contact Detail of the Page -->
        <div class="mt-contact-detail wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-3 mt-paddingbottomxs text-center">
                <span class="icon"><i class="fa fa-university"></i></span>
                <strong class="title">Companie</strong>
                <address><?php the_field('companie','options');?><br>
                <?php the_field('nume_prenume', 'options') ?></address>
              </div>
              <div class="col-xs-12 col-sm-3 mt-paddingbottomxs text-center">
                <span class="icon"><i class="fa fa-map-marker"></i></span>
                <strong class="title">Adresa</strong>
                <address><?php the_field('adresa_pct_lucru', 'options') ?></address>
              </div>
              <div class="col-xs-12 col-sm-3 mt-paddingbottomxs text-center">
                <span class="icon"><i class="fa fa-phone"></i></span>
                <strong class="title">telefon</strong>
                <a href="tel:<?php the_field('telefon', 'options') ?>"><?php the_field('telefon', 'options') ?></a>
              </div>
              <div class="col-xs-12 col-sm-3 mt-paddingbottomxs text-center">
                <span class="icon"><i class="fa fa-envelope-o"></i></span>
                <strong class="title">EMAIL</strong>
                <a href="mailto:<?php the_field('email', 'options') ?>"><?php the_field('email', 'options') ?></a>
              </div>
            </div>
          </div>
        </div>

        <section class="mt-contact-detail content-info wow fadeInUp" data-wow-delay="0.4s">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-sm-8">
                <div class="txt-wrap"> 
                  <p> Specialistii nostri va stau la dispozitie pentru orice nelamuriri si comenzi.</p>
                </div>
                <?php 
                  if(have_rows('echipa_mea','options')){?>
                            <ul class="list-unstyled contact-txt">
                                    <?php 
                        while (have_rows('echipa_mea','options')){
                        the_row();    
                      ?>
                                <li>
                                  <strong>Persoana contact</strong>
                                  <address><?php the_sub_field('nume_prenume_membru','options') ?></address>
                                </li>
                                <li>
                                  <strong>Functie</strong>
                                  <address><?php the_sub_field('functie_membru','options') ?></address>
                                </li>
                                <li>
                                  <strong>Telefon</strong>
                                  <a href="#"><?php the_sub_field('telefon_membru','options') ?></a>
                                </li>
                                <li>
                                  <strong>Email</strong>
                                  <a href="#"><?php the_sub_field('email_membru','options') ?></a>
                                </li>
                              
                            <?php
                              }
                            ?>
                            </ul>
                          <?php 
                          }
                           ?>
              </div>
              <div class="col-xs-12 col-sm-4">
                <h2>Ai o intrebare?</h2>
                <!-- Contact Form of the Page -->
                <form action="#" class="contact-form">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Nume">
                    <input type="email" class="form-control" placeholder="Email">
                    <input type="text" class="form-control" placeholder="Subiect">
                    <textarea class="form-control" placeholder="Scrie un mesaj"></textarea>
                    <input type="checkbox" name="checkbox" /> Sunt de acord cu <a href="" style="color: red;">termeni si conditii</a>
                    <button class="btn-type3" type="submit">Trimite Mesaj</button>
                  </fieldset>
                </form>
                <!-- Contact Form of the Page end -->
              </div>
            </div>
          </div>
        </section>
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
      <!-- footer of the Page -->


<?php 
get_footer();
?>