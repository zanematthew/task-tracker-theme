<?php get_header(); ?>
<div class="container_12">
	<div class="grid_12">
		<div class="main-container">				                
                        			
			<div class="callout-container">

				<div class="grid_4 omega">
				     


					<div class="callout">
					<div class="content">
					<h2>TaskTracker</h2>           
						<p>A soon to be released WordPress plugin that allows you to:</p>
						<ul>
							<li>Add a Task</li>
							<li>Update a Task</li>
							<li>Delete a Task</li>							
							<li>Filter your Tasks</li>							
						</ul>
						<p>Give the demo a try! Login using <strong>user name</strong> is <strong>admin</strong> and the <strong>password</strong> is <strong>admin</strong></p>
						<a href="<?php bloginfo('url'); ?>/demo/" class="button" id="demo_button">DEMO</a>						
					</div>
					</div>
				</div>

				<div class="grid_8 alpha">
					<div class="callout">

<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">
  jQuery( document ).ready(function( $ ){  
  	$(window).load(function() {
    	$('.flexslider').flexslider();
  	});
  });
</script>

<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
  <ul class="slides">
    <li>
    	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/task-tracker-add-a-task.png"/>
    	<p class="flex-caption">Creating a Task</p>
    </li>
	<li>
		<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/task-tracker-single-task.png"/>
		<p class="flex-caption">Viewing a Single Task</p>
	</li>
	<li>
		<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/task-tracker-single-edit.png"/>
		<p class="flex-caption">Editing a Task</p>
	</li>    	
	<li>
		<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/task-tracker-single-delete.png"/>
		<p class="flex-caption">Deleting a Task</p>
	</li>    		
	<li>
		<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/task-tracker-archive-new.png"/>
		<p class="flex-caption">Viewing a collection of Archived Tasks</p>
	</li>    	
  </ul>
</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
<?php get_footer(); ?>
