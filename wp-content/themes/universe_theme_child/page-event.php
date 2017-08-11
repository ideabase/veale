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

            <header class="event-header">
             	<div class="event-header__image">
             	<img class="lightbulb" src="/wp-content/themes/universe_theme_child/ui/light-bulb-downsized.jpg" alt="Lightbulb" />
             	</div>
             	<div class="event-header__text">
                <img class="event-header__logo" src="/wp-content/themes/universe_theme_child/ui/thinkBIGlogo-01.svg" alt="thinkBIG! - Veale Innovation Challenge & Summit"/>
             		<h2 class="headtext__title">Join Us For the Challenge</h2>
                 <h3 class="headtext__date">Feb 27, 2018</h3>
                 <h1 class="headtext__countdown"><p id="demo"></p></h1>
             	</div>
             </header>

<section class="event-body">
	<h3 class="callout">$9,000 in prizes!</h3>
<div class="event-feature">
  <?php
  if ( has_post_thumbnail() ) {
  	the_post_thumbnail('full');
  } ?>
	</div>
<div class="event-introduction"><?php the_content(); ?></div>
<div class="event-introduction__triangle"></div>

<h2 class="event-h2">Join Us in 3 Easy Steps</h2>

<div class="step-container step-container--1">
	<div class="step-container__image">
		<img class="circle circle1" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/259273/cir1_720.png">
	</div>
	<div class="step-container__details step-container__details--step-1">
		<h3 class="step-1 step">Step 1:</h3>
		<h3 class="step-title">Register Your School</h3>
	 <p class="step-description">Don't worry, you don't have to know all the details</p>
	<a class="btn step-1-btn" href="/school-partner-registration/"> Register School</a>
		</div>
	</div>

	<div class="step-container step-container--2">
		<div class="step-container__details step-container__details--step-2">
			<h3 class="step-2 step">Step 2:</h3>
			<h3 class="step-title">Submit Challenge Entries</h3>
			<ul class="step-description">
				<li>$9,000 in Prizes</li>
				 <li> Be named a Veale Innovator </li>
					<li> Prizes for Your School </li>
				 <li> Traveling Trophy</li>
		</ul>
	<a class="btn step-2-btn" href="/thinkbig-challenge-entry-submission/"> Submit Entries & View Resources</a>
		</div>
		<div class="step-container__image">
			<img class="circle circle2" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/259273/cir2_720.png">
		</div>
	</div>

	<div class="step-container step-container--3">
		<div class="step-container__image">
			<img class="circle circle3" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/259273/cir3_720.png">
		</div>
		<div class="step-container__details step-container__details--step-3">
			<h3 class="step-3 step">Step 3:</h3>
			<h3 class="step-title">Attend the Summit</h3>
	<p class="step-description">Inspire your students. Plus, it's free! (Registration Coming Soon)</p>
	 <a class="btn step-3-btn" href="#summit"> Find Out More</a>
		</div>
	</div>
 </section>

<section id="summit" class="event-details">
<h2 class="event-details__title"> The thinkBIG! Summit </h2>
<div class="event-details-introduction">
	<div class="what-is">
<h3 class="what-is__title"> What is the thinkBIG! Summit? </h3>
<p class="what-is__description"> A unique, one-day conference featuring panels of
national and local Gen Z and millennial entrepreneurs,
mini maker hackathon sessions, Final Four Challenge team pitches, awards, prizes, networking and more!
The Summit is open to all students, whether or not they compete in the Challenge. </p>
	</div>
<h4 class="coming-soon">Our Lineup, Speakers & Agenda Are Coming Soon!</h4>
</section>
<section class="event-partners">
	<h2 class="event-h2">Sponsors & Partners</h2>
	<div class="sponsor-partner">
	<h4 class="sponsor-title">Sponsors</h4>
	<ul>
		<li>Sponsor Logo</li>
		<li>Sponsor Logo</li>
		<li>Sponsor Logo</li>
		<li>Sponsor Logo</li>
	</ul>
	</div>
	<div class="sponsor-partner">
	<h4 class="sponsor-title">Partners</h4>
	<ul>
		<li>Partner Logo</li>
		<li>Partner Logo</li>
		<li>Partner Logo</li>
		<li>Partner Logo</li>
	</ul>
	</div>
	<div class="school-advisor">
		<div class="school-advisor__column">
			<h4 class="sponsor-title">School Partners</h4>
			<ul>
				<li>School Name</li>
				<li>School Name</li>
			</ul>
		</div>
		<div class="school-advisor__column">
		<h4 class="sponsor-title">Advisory Partners</h4>
			<ul>
        <li>Connor Blakely</li>
     <li>Michael Hudecek</li>
     <li>Nicole McGee</li>
     <li>NextGen Summit</li>
     <li>Jay Schach</li>
			</ul>
			</div>
	</div>
</section>
<footer class="event-footer">
	<h3 class="event-footer__title">Contact thinkBIG!</h3>
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
