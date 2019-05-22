<?php get_header();?>

<div class="container">
<?php
		if ( have_posts() ) :
			
			while ( have_posts() ) :
                the_post();
                ?>
<a class="post-item__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<article class="post-item">
        
<?php if ( has_post_thumbnail()) { ?>
   <?php the_post_thumbnail(); ?>
   
 <?php }
    else{
        ?>
  <img class="post-pattern" src="<?php echo get_template_directory_uri() . '/images/post-pattern.jpg'?>" alt="Pattert image">

        <?php } ?>
                <h2><?php the_title(); ?></h2>
               
                <div class="short_content"><?php the_excerpt() ?></div>
        </article>      
</a>
<?php
			endwhile;
		endif;
		?>

</div>
<?php
get_sidebar('right');
get_footer();
?>