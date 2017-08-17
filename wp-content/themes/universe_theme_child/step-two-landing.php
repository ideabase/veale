<?php
 /** template name: Event Landing Page
/* The page fullwidth template file.
 *
 * @package WordPress
 * @subpackage Core Framework
 */

get_header(); ?>
    <link rel="stylesheet" href="/wp-content/themes/universe_theme_child/thinkbig.css">
    <div class="container">
        <div class="row">
           <!-- Here begin Main Content -->
             <div class="col-md-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                   <div class="widget-main">
                       <div class="widget-inner">





<p>hi</p>











                         <script src="/wp-content/themes/universe_theme_child/event-scripts.js"></script>

                         								<?php wp_link_pages(); ?>
                                                </div> <!-- /.widget-inner -->
                                            </div> <!-- /.widget-main -->
                                             <?php endwhile; else : ?>
                                             	<p><?php _e( 'No posts found.', CORE_THEME_NAME ); ?></p>
                                             <?php endif ?>
                                      </div> <!-- /.col-md-12 -->
                                 </div> <!-- /.row -->
                             </div> <!-- /.container -->
                         <?php get_footer(); ?>
