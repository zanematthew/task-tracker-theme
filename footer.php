<div class="container_12">
	<div class="grid_12">
		<footer class="primary">
			<div class="grid_5 alpha">
				<hgroup>
					<h3 class="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
					<h4 class="site-description"><span>&ndash;</span><?php bloginfo( 'description' ); ?></h2>
				</hgroup>				
			</div>
			<div class="grid_5 push_2 omega">
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_one' ) ); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_two' ) ); ?>
				</nav>
			</div>
		</footer>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>