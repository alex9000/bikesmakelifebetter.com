<?php get_header(); ?>


<div id="main" class="row-fluid">
  <div id="primary" class="span6 offset1">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
	  	<?php the_content(); ?>
	
		<?php include('inc/modal.php'); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
	
	<?php wp_reset_query(); ?>
	
  </div>
  <div id="secondary" class="span4 offset1">
		<?php get_sidebar(); ?>	
  </div>


<?php get_footer(); ?>