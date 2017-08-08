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

              <header>
                <img src="/wp-content/uploads/IdeaBase_Logo_HorizontalColor.png" alt="Logo"/>
                <h3>2.27.18</h3>
                <h4>3 hours 50 minutes 27 seconds until date of event!</h4>
                <h4>Registration is now open!</h4>
              </header>

              <section>
                <h4>WHAT IS THE THINKBIG! SUMMIT?</h4>

                <div class="main-content"><?php the_content(); ?></div>

                <h4>Step 1: Register your school</h4>
                <p>Don't worry, you don't have to know all the details</p>
                <a href="/school-partner-registration/"> Register School</a>

                <h4>Step 2: Submit Challenge Entries</h4>
                <p>
                <ul>
                <li>$9,000 in Prizes</li>
                <li> Be named a Veale Innovator </li>
                <li> Prizes for Your School </li>
                <li> Traveling Trophy</li>
                </p>

                </ul>
                <a href="/thinkbig-challenge-entry-submission/"> Submit Entries & View Resources</a>

                <h4>Step 3: Attend the Summit</h4>
                <p>Inspire your students. Plus, it's free! (Get more info & register.)</p>
                <a href="/summit-registration/"> Find Out More</a>
              </section>




<!--
              <section>
                <h4>Presenting Sponsors</h4>
                <h5>Sponsors:</h5>
                <ul>
                  <li>123 Partners</li>
                </ul>

                <h5>Partners:</h5>
                <ul>
                  <li>Geauga Growth Partnership</li>
                  <li>Others</li>
                </ul>

                <h5>Participating Schools</h5>
                <ul>
                  <li>ABC High School</li>
                  <li>Others</li>
                </ul>

                <h5>Advisors</h5>
                <ul>
                  <li>Connor Blakely</li>
                  <li>Michael Hudeck</li>
                  <li>Nicole McGee</li>
                  <li>Others to be determined</li>
                </ul>
              </section>
!-->

<section>
<h3> The thinkBIG! Summit </h3>
<h5> What is the thinkBIG! Summit? </h5>
<p> A unique, one-day conference featuring panels of
national and local Gen Z and millennial entrepreneurs,
mini maker hackathon sessions, Final Four Challenge
team pitches, awards, prizes, networking and more!
The Summit is open to all students, whether or not they
compete in the Challenge. </p>
<h4>Our Lineup, Speakers, & Agenda are Coming Soon!</h4>
</section>




              <footer>
              <a href="mailto:info@vealefound.org"> info@vealefound.org</a>
              <p>216.255.3179</p>
              <address>30195 Chagrin Blvd. Suite 310 Pepper Pike, Ohio 44124 </address>
              </footer>



                <?php the_content(); ?>
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
