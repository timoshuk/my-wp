<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="page-wrapper">

<header class="header">
<div class="container">
    <div class="header__flex">
<div class="logo"><?php the_custom_logo()?></div>
<h1 class="firm-name"><a href="<?php echo get_home_url()?>"><?php bloginfo('name')?></a></h1>



<div id="site-navigation" class="main-navigation">
			<button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="line-item"></span>
            <span class="line-item"></span>
            <span class="line-item"></span>
                        </button>
    
			<?php
			wp_nav_menu( array(
				'theme_location' => 'top-menu',
                'menu_id'        => 'primary-menu',
                'container'        => 'nav'
                
			) );
            ?>
    
        </div><!-- #site-navigation -->
        </div>
        </div>
</header>

<main class="main-content">


