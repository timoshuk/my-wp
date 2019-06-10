<?php get_header();?>



<h2><?php get_calendar();?></h2>

<div class="page-data">
<div class="posts">
<div class="container">
<div class="posts__grid">
<?php

$args = array(
    'category_name'=>'shows,travel,services,workshops,training,forum',
    'post_type' => 'post',
    'posts_per_page' => 3
);

$query = new WP_Query( $args );
        
if ( $query->have_posts() ) :
	while ( $query->have_posts() ) :
		$query->the_post(); ?>
		<a class="post-item__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<article class="post-item">
        
<?php if ( has_post_thumbnail()) { ?>
   <div class="post-img__wrap"><?php the_post_thumbnail(); ?></div>
   
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
wp_reset_postdata();


?>

</div><!--posts-grid-->
</div> <!--container-->
</div><!--Posts-->
<div class="posts">
<div class="container">
<div class="posts__grid">
<?php

$args2 = array(
    'category_not_in'=>'shows,travel,services,forum',
    'post_type' => 'post',
    'posts_per_page' => 6
);

$query2 = new WP_Query( $args2 );
        
if ( $query2->have_posts() ) :
	while ( $query2->have_posts() ) :
		$query2->the_post(); ?>
		<a class="post-item__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<article class="post-item">
        
<?php if ( has_post_thumbnail()) { ?>
   <div class="post-img__wrap"><?php the_post_thumbnail(); ?></div>
   
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
wp_reset_postdata();
?>

</div><!--posts-grid-->
</div> <!--container-->
</div><!--Posts-->
</div>
<!-- page-data -->
<?php
get_sidebar('home');
get_footer();
?>