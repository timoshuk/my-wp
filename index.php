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
  <img class="post-pattern" src="<?php echo get_template_directory_uri() . '/img/post-pattern.jpg'?>" alt="Pattert image">

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

<div class="posts-nav">
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam reiciendis laborum nesciunt! Consequuntur facilis nulla ut vel numquam obcaecati rerum ex, modi fuga, animi, quod porro dignissimos cupiditate at similique eaque doloremque eum maiores tempora provident. Doloremque quas officia fugit veritatis voluptate. Ea quos animi assumenda explicabo expedita maiores ducimus voluptatem nihil commodi, voluptatum repudiandae beatae repellendus, laborum sunt rerum error natus temporibus suscipit voluptates nemo dolor, sapiente modi! Amet, vel totam repellendus nihil neque quis nesciunt molestiae, corrupti alias enim reiciendis, aut perferendis eligendi eos porro facilis impedit eius cupiditate dolor numquam ducimus aliquid. Excepturi, placeat. Amet, dolore reiciendis!
</div>
<?php
get_sidebar('right');
get_footer();
?>