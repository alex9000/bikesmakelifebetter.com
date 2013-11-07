<?php get_header(); ?>

<div class="row-fluid">
  <div id="primary" class="span6 offset1">
		<h2>Blog</h2>
	
	<?php
	global $post;
	$args = array( 'numberposts' => 10 );
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) :	setup_postdata($post); ?>
		<article>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
			<?php edit_post_link('(e)'); ?>
		</article>
	<?php endforeach; ?>
	

		<?php include('inc/modal.php'); ?>
  </div>
  <div id="secondary" class="span4 offset1">
		<?php get_sidebar(); ?>	
  </div>
</div>

<?php get_footer(); ?>