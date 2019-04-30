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
					<nav class="main-nav">
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
                
				<?php if(!is_single() && is_single() ):get_sidebar('top'); endif; ?>
			</header>