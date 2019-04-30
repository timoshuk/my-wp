<?php get_header(); ?>
			
			<div  class="content-wrapper clearfix">
				<main  class="clearfix">
                <?php
        if ( have_posts() ) : while ( have_posts() ) : 
            the_post();
        the_content();
      endwhile;
      else:
        ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php
      endif;// End of the loop.
		?>

					
				</main>
							<?php get_sidebar('right') ?>
			
			</div>
		


<?php get_footer();?>

