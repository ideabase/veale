<?php
/** template name: Events Grid 
 * The events grid template file.
 * 
 * @package WordPress
 * @subpackage Core Framework
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<?php
			$sidebar_pos = of_get_option('sidebar_pos');
			if ($sidebar_pos == 'left') {
				get_sidebar();
			}
			
		?>
		<!-- Here begin Main Content -->
		<div id="ajax-container" class="col-md-8">
			<div class="row">
				<?php
					global $wp_query;
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                 	$wp_query = new WP_Query(array( 'post_type' => 'event', 'order' => 'DESC', 'orderby' => 'date', 'paged' => $paged ));
				 	if($wp_query->have_posts()): ?>
				 	
				 	<?php while ($wp_query->have_posts()): $wp_query->the_post();
						 
				 		// Get the custom metabox with aditional informations for events
				 		$event_date = NULL;
						$event_month = get_post_meta($post->ID, 'core_event_month', true);
						$event_day = get_post_meta($post->ID, 'core_event_day', true);
						$event_year = get_post_meta($post->ID, 'core_event_year', true);
						$event_time = get_post_meta($post->ID, 'core_event_time', true);
						$event_location = get_post_meta($post->ID, 'core_event_location', true);
						if($event_location ==''){
							$event_location = __('Location Not Set', CORE_THEME_NAME);
						}
						
						if(!empty($event_month) && (!empty($event_day)) && (!empty($event_year))) {
							$event_date = $event_month . ' ' . $event_day . ', ' . $event_year;
						}
						else {
							$event_date = __('Date Not Set', CORE_THEME_NAME);
						}
						?> 

						<div class="post-item col-md-6">
							<div class="grid-event-item">
								<div class="grid-event-header">
									<span class="event-place small-text"><i class="fa fa-globe"></i>
										<?php 
											if($event_location){
												echo $event_location;
											}
										?>
									</span>
									<span class="event-date small-text"><i class="fa fa-calendar-o"></i>
										<?php echo $event_date; ?>
									</span>
								</div>
								<div class="box-content-inner">
									<h5 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
									<p>
										<?php the_excerpt(); ?> 
										<a href="<?php the_permalink();?>"><?php _e('View Details &rarr;', CORE_THEME_NAME);?></a>
									</p>
								</div>
							</div>
							<!-- /.grid-event-item -->
						</div>
						<!-- /.col-md-6 -->
					<?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata();?>
			</div>
			<!-- /.row -->
		    <?php core_paging_nav(); ?>
		</div>
		<!-- /.col-md-8 -->
		<?php
			$sidebar_pos = of_get_option('sidebar_pos');
			if ($sidebar_pos == 'right') {
				get_sidebar();
			}
		?>
	</div>
	<!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>

    
