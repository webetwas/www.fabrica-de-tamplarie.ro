<!DOCTYPE html>
<html lang="en">

<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fabrica de Tamplarie</title>
	<!-- include the site stylesheet -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic%7cMontserrat:400,700%7cOxygen:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/icon-fonts.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/image-galery.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/dist/magnific-popup.css">

	<!-- <script async src="//platform-api.sharethis.com/js/sharethis.js#property=5cc191bcf3971d0012e2499e&product="sticky-share-buttons"></script> -->
	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cc191bcf3971d0012e2499e&product=sticky-share-buttons' async='async'></script>



</head>

<body <?php body_class(); ?>>

	<div class="sharethis-inline-share-buttons"></div>

	<div id="pre-loader" class="loader-container">
		<div class="loader">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/rings.svg" alt="loader">
		</div>
	</div>

	<!-- W1 start here -->
	<div class="w1">
		<!-- mt header style4 start here -->
		<header id="mt-header" class="style4">
			<div class="mt-bottom-bar">
				<div class="container-fluid">

					<div class="row">
						<div class="col-xs-12">
							<!-- mt logo start here -->
							<div class="mt-logo"><a href="index.php"><img src="<?php the_field('logo_meniu', 'options'); ?>" alt="fabrica de tamplarie"></a></div>
							<!-- mt icon list start here -->
							<ul class="mt-icon-list">
								<li class="hidden-lg hidden-md">
									<a href="#" class="bar-opener mobile-toggle">
										<span class="bar"></span>
										<span class="bar small"></span>
										<span class="bar"></span>
									</a>
								</li>
							</ul><!-- mt icon list end here -->
							<!-- navigation start here -->
							<nav id="nav">
								<ul>
									<li><a href="/">Acasa</a></li>
									<li><a href="/despre-noi">Despre noi</a></li>
									<li class="drop">
										<a href="product-grid-view.html">Produsele noastre <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										<!-- mt dropmenu start here -->
										<div class="mt-dropmenu text-left">
											<!-- mt frame start here -->
											<div class="mt-frame">
												<!-- mt f box start here -->
												<div class="mt-f-box">
													<!-- mt col3 start here -->
													<div class="col-md-4 boxequal">
														<div class="sub-dropcont">
															<strong class="title"><a href="#" class="mt-subopener">Ferestre PVC</a></strong>
															<div class="sub-drop">
																<ul>
																	<?php
																	// Argumente pt Query
																	$args = array(
																		'post_type' 			=> 'produs',
																		'posts_per_page'	=> -1,
																		'post_status' 		=> 'publish',
																		'taxonomy' 				=> 'category',
																		'cat' 						=> 2
																	);
																	// Query
																	$the_query = new WP_Query($args);

																	// Inceput Loop pt query
																	while ($the_query->have_posts()) {
																		$the_query->the_post(); ?>
																		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
																	<?php }
																wp_reset_postdata();
																// Sfarsit interogare si resetare
																?>
																</ul>
															</div>
														</div>
													</div>
													<!-- mt col3 end here -->
													<!-- mt col3 start here -->
													<div class="col-md-4  boxequal">
														<div class="sub-dropcont">
															<strong class="title"><a href="#" class="mt-subopener">Ferestre ALUMINIU</a></strong>
															<div class="sub-drop">
																<ul>
																	<?php
																	// Argumente pt Query
																	$args = array(
																		'post_type' 			=> 'produs',
																		'posts_per_page'	=> -1,
																		'post_status' 		=> 'publish',
																		'taxonomy' 				=> 'category',
																		'cat' 						=> 3
																	);
																	// Query
																	$the_query = new WP_Query($args);

																	// Inceput Loop pt query
																	while ($the_query->have_posts()) {
																		$the_query->the_post(); ?>
																		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
																	<?php }
																wp_reset_postdata();
																// Sfarsit interogare si resetare
																?>
																</ul>
															</div>
														</div>
													</div>
													<!-- mt col3 end here -->

													<!-- mt col3 start here -->
													<div class="col-md-4 boxequal">
														<div class="sub-dropcont">
															<strong class="title"><a href="#" class="mt-subopener">USI</a></strong>
															<div class="sub-drop">
																<ul>
																	<?php
																	// Argumente pt Query
																	$args = array(
																		'post_type' 			=> 'produs',
																		'posts_per_page'	=> -1,
																		'post_status' 		=> 'publish',
																		'taxonomy' 				=> 'category',
																		'cat' 						=> 4
																	);
																	// Query
																	$the_query = new WP_Query($args);

																	// Inceput Loop pt query
																	while ($the_query->have_posts()) {
																		$the_query->the_post(); ?>
																		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
																	<?php }
																wp_reset_postdata();
																// Sfarsit interogare si resetare
																?>
																</ul>
															</div>
														</div>
													</div>

													<div class="col-md-4  boxequal">
														<div class="sub-dropcont">
															<strong class="title"><a href="#" class="mt-subopener">GEAM</a></strong>
															<div class="sub-drop">
																<ul>
																	<?php
																	// Argumente pt Query
																	$args = array(
																		'post_type' 			=> 'produs',
																		'posts_per_page'	=> -1,
																		'post_status' 		=> 'publish',
																		'taxonomy' 				=> 'category',
																		'cat' 						=> 5
																	);
																	// Query
																	$the_query = new WP_Query($args);

																	// Inceput Loop pt query
																	while ($the_query->have_posts()) {
																		$the_query->the_post(); ?>
																		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
																	<?php }
																wp_reset_postdata();
																// Sfarsit interogare si resetare
																?>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-md-4  boxequal">
														<div class="sub-dropcont">
															<strong class="title"><a href="#" class="mt-subopener">Rulouri exterioare</a></strong>
															<div class="sub-drop">
																<ul>
																	<?php
																	// Argumente pt Query
																	$args = array(
																		'post_type' 			=> 'produs',
																		'posts_per_page'	=> -1,
																		'post_status' 		=> 'publish',
																		'taxonomy' 				=> 'category',
																		'cat' 						=> 8
																	);
																	// Query
																	$the_query = new WP_Query($args);

																	// Inceput Loop pt query
																	while ($the_query->have_posts()) {
																		$the_query->the_post(); ?>
																		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
																	<?php }
																wp_reset_postdata();
																// Sfarsit interogare si resetare
																?>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-md-4  boxequal">
														<div class="sub-dropcont">
															<strong class="title"><a href="#" class="mt-subopener">Feronerie</a></strong>
															<div class="sub-drop">
																<ul>
																	<?php
																	// Argumente pt Query
																	$args = array(
																		'post_type' 			=> 'produs',
																		'posts_per_page'	=> -1,
																		'post_status' 		=> 'publish',
																		'taxonomy' 				=> 'category',
																		'cat' 						=> 6
																	);
																	// Query
																	$the_query = new WP_Query($args);

																	// Inceput Loop pt query
																	while ($the_query->have_posts()) {
																		$the_query->the_post(); ?>
																		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
																	<?php }
																wp_reset_postdata();
																// Sfarsit interogare si resetare
																?>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-md-4 boxequal">
														<div class="sub-dropcont">
															<strong class="title"><a href="#" class="mt-subopener">Accesorii</a></strong>
															<div class="sub-drop">
																<ul>
																	<?php
																	// Argumente pt Query
																	$args = array(
																		'post_type' 			=> 'produs',
																		'posts_per_page'	=> -1,
																		'post_status' 		=> 'publish',
																		'taxonomy' 				=> 'category',
																		'cat' 						=> 7
																	);
																	// Query
																	$the_query = new WP_Query($args);

																	// Inceput Loop pt query
																	while ($the_query->have_posts()) {
																		$the_query->the_post(); ?>
																		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
																	<?php }
																wp_reset_postdata();
																// Sfarsit interogare si resetare
																?>
																</ul>
															</div>
														</div>
													</div>
													<!-- mt col3 end here -->

												</div>
												<!-- mt f box end here -->
											</div>
											<!-- mt frame end here -->
										</div>
										<!-- mt dropmenu end here -->
										<span class="mt-mdropover"></span>
									</li>
									<li>
										<a class="drop-link" href="">Portofoliu <i class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
										<div class="s-drop">
											<ul>
												<li><a href="/galerie-foto">Galerie Foto</a></li>
												<li><a href="/galerie-video">Galerie Video</a></li>
											</ul>
										</div>
									</li>
									<li><a href="/contact">Contact</a></li>
								</ul>
							</nav>
							<!-- mt icon list end here -->
						</div>
					</div>
				</div>
			</div>
			<!-- mt bottom bar end here -->
			<span class="mt-side-over"></span>
		</header><!-- mt header style4 end here -->