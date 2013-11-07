<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>
	
<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>
	
	<div class="hidden-iphone">
		<?php echo do_shortcode('[nivoslider slug="homepage-slideshow"]'); ?>
	</div>
	
<div class="row-fluid">
	<div class="span12">
		<div class="visible-iphone"></div>
	</div>
</div> <!-- end row-fluid -->
	
	
	<?php include('inc/modal.php'); ?>
	

	<div class="row-fluid download">
		<div class="span5 right-text">
 		<p>Learn more about bike ecosystems </p>
		</div>
		<div class="span2">
			  <a href="#myModal" role="button" class="btn btn-primary btn-block" data-toggle="modal">Download</a> 
		</div>
		
		<div class="span5 left-text">
			<p>Get our best practices guide now!</p>
			</div>
	</div> <!-- end row-fluid -->

			<div class="row-fluid secondary-nav">

				
			<?php 
	
				// The Query
				$the_query = new WP_Query(array( 'post_type' => 'page', 'post__in' => array( 1464, 1471, 1476 ), 'orderby' => 'menu_order', 'order' => 'ASC'  )); 
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					?>
					<div class="span4">
						<a href="<?php the_permalink(); ?>" <?php post_class(); ?> title="<?php the_title(); ?>"><?php the_title(); ?></a>
							<div class="brief">
								<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
								<?php the_excerpt(); ?>
								<p><a href="<?php the_permalink(); ?>">Learn More &rsaquo;</a></p>
								<?php edit_post_link('(e)'); ?>
							</div>
					 </div>
			<?php
				endwhile;
				/* Restore original Post Data 
				 * NB: Because we are using new WP_Query we aren't stomping on the 
				 * original $wp_query and it does not need to be reset.
				*/
				wp_reset_postdata();
			?>
			</div> <!-- end row-fluid -->


<?php get_footer(); ?>