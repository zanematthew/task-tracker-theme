<?php get_header(); ?>
<div class="container_12">
	<div class="grid_12">
		<div class="main-container">				                

            <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', get_post_format() ); ?>

                <?php endwhile; ?>                

            <?php else : ?>

                <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                        <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-0 -->

            <?php endif; ?>
            
            		
		<!--
			<div class="attention-container">		
				<div class="attention">		
					<h1 class="title">TaskTracker</h1>				
					<h2 class="slogan">Introducing the TaskTracker: Now you can quickly add your Tasks and have fun doing it as well.</h2>			
				</div>
			</div>
				
			<div class="callout-container">
				<div class="callout">
					<h3>Sign-up</h3>				
					<h4>All right I'm sold, let me start using it. </h4>
					<p>We have 3 basic packages, one of which if FREE! all of which are designed to help you get stuff done. Sign-up for the one that fits you.</p>
					<button class="large" id="signup_botton">SIGN-UP</button>
					<p><small>All you need to <strong>regsiter</strong> is a few minutes and your <strong>email</strong>.</small></p>
				</div>

				<div class="callout">
					<h3>Demo</h3>
					<h4>Okay, let me check it out.</h4>
					<p>Not interested yet? Well try out the demo! From there you can <em>create</em>, <em>update</em>, <em>delete</em>, <em>manage</em> and <em>add notes</em> your <em>Tasks</em>.</p>
					<button class="large" id="demo_button">DEMO</button>
					<p><small>The <strong>user name</strong> is <strong>admin</strong> and the <strong>password</strong> is <strong>admin</strong></small></p>
				</div>

				<div class="callout screenshot">	
					<h3>Screenshots</h3>
					<h4>So what does it look like?</h4>
					<p>Pertineo, inhibeo ex facilisi tincidunt duis facilisi ibide. Lorem ipsum dolor sit amet, praesent at pertineo vel, vindico mos nunc, eros. Eum et vulpes proprius genitus, nutus.</p>
					<ul>
						<li><a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/d1.png"/></a></li>
						<li><a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/d2.png"/></a></li>
						<li><a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/d3.png"/></a></li>
						<li><a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/d4.png"/></a></li>			
						<li><a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/d2.png"/></a></li>					
					</ul>
				</div>
			</div>
		</div>
		-->
	</div>
</div>
<?php get_footer(); ?>