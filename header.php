<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title(); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css' ?>" />
		
		
		<!--[if lte IE 8]><script src="<?php echo get_stylesheet_directory_uri() . '/js/ie/html5shiv.js' ?>"></script><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/ie9.css' ?>" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/ie8.css' ?>" /><![endif]-->
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
								
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
                        
                        $defaults = array(
                            'theme_location'  => 'main',
                            'menu'            => '',
                            'container'       => 'nav',
                            'container_class' => 'links',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );

                        wp_nav_menu( $defaults );
                        
                        ?>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
							</ul>
						</nav>
					</header>