<?php
/*
Template Name: Right Sidebar Page
*/
?>

<?php get_header(); ?>
			
	    <div class="container">
			
			<div id="content" class="clearfix row">

			<header>
				
				<div class="page-header"><h1><?php the_title(); ?></h1></div>
			
			</header> <!-- end article header -->
			
				<div id="main" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main pull-left clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side pull-right">

					<?php get_sidebar(); ?>

				</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>