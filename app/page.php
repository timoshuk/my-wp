<?php get_header();?>
<div class="page">
<div class="page__post">
<div class="container">


<?php
			
			while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<?php
		the_content();?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
<?php
			endwhile;
		?>

</div> <!--container-->
</div><!--page__post-->
</div><!-- page-->

<?php
get_footer();
?>