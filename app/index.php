<?php get_header();?>
<div class="page-data">
<div class="posts">
<div class="container">
<div class="posts__grid">
<?php
		if ( have_posts() ) :
			
			while ( have_posts() ) :
                the_post();
                ?>
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
		?>

</div><!--posts-grid-->
<div class="posts-links">
<?php the_posts_pagination( array(
	'show_all'     => false, // показаны все страницы участвующие в пагинации
	'end_size'     => 1,     // количество страниц на концах
	'mid_size'     => 3,     // количество страниц вокруг текущей
	'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
	'prev_text'    => __('« попередні'),
	'next_text'    => __('наступні »'),
	'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
	'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
	'screen_reader_text' => __( 'Posts navigation' ),
));?>
</div>
</div> <!--container-->
</div><!--Posts-->
</div><!-- page-data -->

<?php
get_sidebar('right');
get_footer();
?>