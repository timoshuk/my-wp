<?php get_header();?>
<div class="page-data">
<div class="container single-post">

<?php
		if ( have_posts() ) :
			
			while ( have_posts() ) :
                the_post();
                ?>
<article class="single-post__item">
<h1 class="single-post__title"><?php the_title(); ?></h1>
<?php if ( has_post_thumbnail()) { ?>
   <div class="single-post__thumb"><?php the_post_thumbnail(); ?></div>
   <!-- single-post__thumb -->
   
 <?php }
    else{
        ?>
        <div class="single-post__thumb">
  <img class="post-pattern" src="<?php echo get_template_directory_uri() . '/images/post-pattern.jpg'?>" alt="Pattert image">
  </div>

        <?php } ?>
              
               <div class="single-post__data">
               <?php the_content(); ?>
               </div>

        </article>      
        <!-- single-post__item -->

<?php
			endwhile;
		endif;
		?>

</div><!--single-post-->
</div><!-- page-data -->

<?php
get_footer();
?>