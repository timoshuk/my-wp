<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
            the_post();
            the_content();

					the_post_navigation(array(
                        'next_text' => '<span class="meta-nav" aria-hidden="true">Далее</span> ' .
                            '<span class="screen-reader-text">Следующая запись</span> ' .
                            '<span class="post-title">%title</span>',
                        'prev_text' => '<span class="meta-nav" aria-hidden="true">Назад</span> ' .
                            '<span class="screen-reader-text">Предыдущая запись</span> ' .
                            '<span class="post-title">%title</span>',
                    ) );


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>