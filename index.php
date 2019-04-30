<?php get_header(); ?>
			
			<div  class="content-wrapper clearfix">
				<main  class="clearfix">
<?php
		if ( have_posts() ) :

						/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
				<section>
				<a href= "<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<span><a href="<?php the_permalink(); ?>"> <?php echo CFS()->get( 'post_deskription' );?></a></span>
			</section>
			
<?php
			endwhile;
?>
			<div  class="main-footer clearfix">
			<?php 
			the_posts_navigation(array(
				'prev_text'          => 'Предыдущие записи',
				'next_text'          => 'Следующие записи',
				'screen_reader_text' => 'Навигация',
			));
			?>
			</div>
<?php		
		endif;
		?>

					
					
				</main>
							<?php get_sidebar('right') ?>
			
			</div>
		


<?php get_footer();?>



    