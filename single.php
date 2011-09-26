<?php get_header(); ?>
<div class="container_12">
	<div class="grid_12">
		<div class="main-container">				                

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>