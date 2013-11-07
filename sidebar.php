<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>

<div id="sidebar-button-wrap">
	<div class="cell">
		<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Download</a> 
		<p><small>Get our bike ecosystems best practices guide!</small></p>
	</div>
</div>

<?php 
$pages = array (1464, 1471, 1476);

# remove the current post from the pages array
if(($key = array_search($post->ID, $pages)) !== false) {
    unset($pages[$key]);
}

if ( is_home() || is_single() ) { 
	include('inc/sidebar-archive.php'); 
}
else {
	$the_query = new WP_Query( array( 'post_type' => 'page', 'post__in' => $pages, 'orderby' => 'menu_order', 'order' => 'ASC' ) ); 
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
	?>
		<aside id="post-id-<?php the_ID(); ?>">
		<a href="<?php the_permalink(); ?>" <?php post_class(); ?> title="<?php the_title(); ?>"><?php the_title(); ?></a>
		<div class="brief">						
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
		<p><a href="<?php the_permalink(); ?>">Learn More &rsaquo;</a></p>
		<?php edit_post_link('(e)'); ?>
		</div>
		</aside>
		<?php
		endwhile;

	wp_reset_postdata();

} ?>

