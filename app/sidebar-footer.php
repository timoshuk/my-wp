<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Start
 */

if ( ! is_active_sidebar( 'sidebar-footer' ) ) {
	return;
}
?>

<div id="footer-sidebar" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-footer' ); ?>
</div><!-- #secondary -->
