<?php

// Right sitebar 

if ( ! is_active_sidebar( 'sidebar-right' ) ) {
	return;
}
?>

<aside>
	<?php dynamic_sidebar( 'sidebar-right' ); ?>
</aside>
