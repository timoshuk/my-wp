<?php get_header();?>


<?php
		if ( have_posts() ) :
			
			while ( have_posts() ) :
                the_post();
                ?>
<article class="post-item">
<?php if ( has_post_thumbnail()) { ?>
   <a class="post-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail(); ?>
   </a>
 <?php }
    else{
        ?>
<a class="post-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <img class="post-pattern" src="<?php echo get_template_directory_uri() . '/img/post-pattern.jpg'?>" alt="Pattert image">
   </a>
        <?php } ?>
                <h2><a href="<?php the_permalink() ?>" title="Ссылка на: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <?php if(CFS()->get( '_short_content')){?>
                <div class="short_content"><a href="<?php the_permalink() ?>"><?php echo CFS()->get( '_short_content' ); ?> </a></div>
                <?php }?>
                   
                </article>      
<?php
			endwhile;
		endif;
		?>


<?php
get_sidebar('right');
get_footer();
?>