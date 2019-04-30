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
			the_posts_navigation(array(
				'prev_text'          => 'Предыдущие записи',
				'next_text'          => 'Следующие записи',
				'screen_reader_text' => 'Навигация',
			));
			</div>
<?php		
		endif;
		?>

					
					
				</main>
							<?php get_sidebar('right') ?>
				<aside>
					<div class="tw-wrapper clearfix">


						<div  class="tw-inner">
							
							<div  class="tw-text">
								<span>Free Wood Design PSD Template. For more freebies and photoshop tutorials follow @webdesignfan.</span>
							</div>
							<div  class="follow">
								<span>Follow Us on Twitter</span>
							</div>
						</div>
					</div>
					<div  class="secondery-navigation">
						<h2  class="menu">Navigation</h2>
						<ul>
							<li><a href= "#">Web Development</a></li>
							<li><a href= "#">Web Apps</a></li>
							<li><a href= "#">Web Design</a></li>
							<li><a href= "#">Print Design</a></li>
							<li><a href= "#">Graphic Design</a></li>
							<li><a href= "#">Design Partners</a></li>
							<li><a href= "#">Online Shops</a></li>
							<li><a href= "#">Online Marketing</a></li>
						</ul>
					</div>
					<div class="contacts">
						<h2>Contact Us</h2>
						<ul>
							<li>E-mail: hello@wooddesign.info</li>
							<li>Phone: +370 6411 9028</li>
							<li>Twitter: @wooddesigninfo</li>
						</ul>
					</div>
				</aside>
			</div>
		


<?php get_footer();?>



    