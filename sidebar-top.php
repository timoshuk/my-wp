<?php

// Top sitebar 

if ( ! is_active_sidebar( 'sidebar-top' ) ) {
	return;
}
?>

<div class="header-bottom">
	<?php dynamic_sidebar( 'sidebar-top' ); ?>
</div>
