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

<header class="event-header">
  <a class="event-header__logo" href="/programs/thinkbig">
    <img src="/wp-content/themes/universe_theme_child/ui/thinkBIGlogo-01.svg" alt="thinkBIG! - Veale Innovation Challenge & Summit"/>
  </a>
  </div>
</header>
<section class="event-form">
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</section>
       <footer class="event-footer">
       	<h3 class="event-footer__title">CONTACT thinkBIG!</h3>
       	<div class="event-footer__info">
       		<div class='event-footer__left'>
       		<a class="email" href="mailto:info@vealefound.org"> info@vealefound.org</a>
       		<p>216.255.3179</p>
       		</div>
       		<div class='event-footer__right'>
       		<address>30195 Chagrin Blvd. Suite 310<br /> Pepper Pike, Ohio 44124 </address>
       		</div>
       	</div>
       </footer>

     </div> <!-- /.widget-inner -->
   </div> <!-- /.widget-main -->
    <?php endwhile; else : ?>
      <p><?php _e( 'No posts found.', CORE_THEME_NAME ); ?></p>
    <?php endif ?>
</div> <!-- /.col-md-12 -->
</div> <!-- /.row -->
</div> <!-- /.container -->



<?php get_footer(); ?>
