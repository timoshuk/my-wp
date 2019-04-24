<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Start
 */

if ( ! is_active_sidebar( 'sidebar-top' ) ) {
	return;
}
?>

<div class="header-bottom">
	<?php dynamic_sidebar( 'sidebar-top' ); ?>
</div><!-- #secondary -->
