<?php
/** template name: Page Event Small
 * The Home Page Template.
 *
 * @package WordPress
 * @subpackage Core Framework
 */

get_header();
?>
<link rel="stylesheet" href="/wp-content/themes/universe_theme_child/thinkbig.css">
<div class="container">
    <div class="row">
       <!-- Here begin Main Content -->
         <div class="col-md-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <div class="widget-main">
                   <div class="widget-inner">

<header>
  <img src="/wp-content/themes/universe_theme_child/ui/thinkBIGlogo-01.svg" alt="Logo"/>
</header>



<?php the_content(); ?>
<?php wp_link_pages(); ?>
       </div> <!-- /.widget-inner -->

       <footer>
       <h5>Contact Us:</h5>
       <a href="mailto:info@vealefound.org"> info@vealefound.org</a>
       <p>216.255.3179</p>
       <address>30195 Chagrin Blvd. Suite 310
         Pepper Pike, Ohio 44124 </address>
       </footer>

   </div> <!-- /.widget-main -->
    <?php endwhile; else : ?>
      <p><?php _e( 'No posts found.', CORE_THEME_NAME ); ?></p>
    <?php endif ?>
</div> <!-- /.col-md-12 -->
</div> <!-- /.row -->
</div> <!-- /.container -->



<?php get_footer(); ?>
