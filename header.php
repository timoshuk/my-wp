<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div  class="wrapper">
			<header>
				<div class="header-top clearfix">
					<h1 class="logo"> <a class="logo__link" href="<?php home_url();?>">Wood Design</a></h1>
					<nav>
						<div class="menu-button" aria-controls="primary-menu" aria-expanded="false">MENU</div>
						<?php
			wp_nav_menu( array(
				'theme_location' => 'header_menu',
                'menu_id'        => 'primary-menu',
                
                'theme_location'  => '',
	'container'       => false, 
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			) );
			?>
					</nav>
				</div>
				<div  class="header-bottom">
					<span>Wood Design is a modern web & graphic design studio in Europe. We create beautiful things for web and print. You can see our great work examples in <a href="#">Portfolio</a>. If you need a professional design services <a href="#">Contact</a> us. We would love to work with you.</span>
				</div>
			</header>