<!DOCTYPE HTML>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,900" rel="stylesheet" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class('homepage'); ?>>

		<!-- Header Wrapper -->
			<div id="header-wrapper" class="wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<div id="header">
									
									<!-- Logo -->
										<div id="logo">
											<h1><a href="<?php echo home_url(); ?>"><img src="http://jodiejoe.com/wp-content/uploads/2014/02/1798598_10151898740527343_1279554224_n.jpg" border=0 alt="The Golden Hat" /><!--<?php bloginfo('name'); ?>--></a></h1>
											<span class="byline"><?php bloginfo('description'); ?></span>
										</div>
									<!-- /Logo -->
									
									<!-- Nav -->
									<?php 

										wp_nav_menu( array(
											'theme_location'  => 'main_menu', 
											'container'       => 'nav',
											'container_id'    => 'nav',
											'fallback_cb'     => 'wp_page_menu',
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										) );

									?>
									<!-- /Nav -->

								</div>
							<!-- /Header -->

						</div>
					</div>
				</div>
			</div>
		<!-- /Header Wrapper -->