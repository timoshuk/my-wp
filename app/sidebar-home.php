<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Start
 */

if ( ! is_active_sidebar( 'sidebar-home' ) ) {
	return;
}
?>

<div id="home-sidebar" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-home' ); ?>
</div><!-- #secondary -->
