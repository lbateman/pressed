<?php get_header(); ?>
	<div class="body clearfix">
		<section class="main">
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/hero.jpg" alt="Grayscale photo of a pile of oranges" />
			<?php if( have_posts( ) ) : while( have_posts( ) ) : the_post(); ?>
				<section>
					<a href="<?php the_permalink() ?>"><h1><?php the_title_attribute(); ?></h1></a>
					<?php the_excerpt(); ?>
				</section>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts for you today.' ); ?></p>
			<?php endif; ?>
			<!-- <section>
				<p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
				<p>We also make pancakes on the side. (And if you're really lucky, we'll make them with chocolate chips.)</p>
			</section> -->
		</section>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>