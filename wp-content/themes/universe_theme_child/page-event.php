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
             		<h2 class="headtext__title">Join Us For the Summit</h2>
                 <h3 class="headtext__date">Feb 27, 2018</h3>
                 <h1 class="headtext__countdown"><div id="demo"></div></h1>
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

<h2 class="event-h2">Join Us in 3 Easy Steps...</h2>

<div class="step-container step-container--1">
	<div class="step-container__image">
		<img class="circle circle1" src="/wp-content/themes/universe_theme_child/ui/circle-1.png">
	</div>
	<div class="step-container__details step-container__details--step-1">
		<h3 class="step-1 step">Step 1:</h3>
		<h3 class="step-title">Register Your School</h3>
	 <p class="step-description">This amazing, free opportunity is one click away.</p>
	<a class="btn step-1-btn" href="/thinkbig/register"> Register School</a>
		</div>
	</div>

	<div class="step-container step-container--2">
		<div class="step-container__details step-container__details--step-2">
			<h3 class="step-2 step">Step 2:</h3>
			<h3 class="step-title">Enter the Challenge</h3>
			<ul class="step-description">
				<li>$9,000 in Prizes</li>
				 <li> Be Named a Veale Innovator </li>
					<li> Prizes for Your School </li>
				 <li> Traveling Trophy</li>
		</ul>
	<a class="btn step-2-btn" href="/thinkbig/challenge">Get Started</a>
		</div>
		<div class="step-container__image">
			<img class="circle circle2" src="/wp-content/themes/universe_theme_child/ui/circle-2.png">
		</div>
	</div>

	<div class="step-container step-container--3">
		<div class="step-container__image">
			<img class="circle circle3" src="/wp-content/themes/universe_theme_child/ui/circle-3.png">
		</div>
		<div class="step-container__details step-container__details--step-3">
			<h3 class="step-3 step">Step 3:</h3>
			<h3 class="step-title">Attend the Summit</h3>
	<p class="step-description">Inspire your students. Plus, it's free! (Registration coming soon)</p>
	 <a data-scroll class="btn step-3-btn" href="#summit"> Find Out More</a>
		</div>
	</div>
 </section>

<section id="summit" class="event-details">
<h2 class="event-details__title">thinkBIG! Summit</h2>
<div class="what-is">
<h3 class="what-is__title"> WHAT IS THE thinkBIG! SUMMIT? </h3>
<p class="what-is__description"> A unique, one-day conference featuring panels of
national and local Gen Z and millennial entrepreneurs,
mini maker hackathon sessions, Final Four Challenge team pitches, awards, prizes, networking and more!
The Summit is open to all students, whether or not they compete in the Challenge. </p>
</div>


<div class="togglebox">

  <input id="toggle1" type="checkbox" name="toggle" />
  <label for="toggle1">Speaker & Panelist Lineup</label>

  <section class="content" id="content1">
    <h3>Keynote Speaker</h3>
    <div class="content__keynote">
      <ul>
        <li><img class="content_speaker--keynote" src="/wp-content/themes/universe_theme_child/ui/GerardAdamsForWebsite.jpeg" alt="Gerard Adams"></li>
        <h4>GERARD ADAMS</h4>
        <li>Millennial Mentor, thought leader, entrepreneur, investor, philanthropist</li>
        <li><a href="http://gerardadams.com/">http://gerardadams.com</a></li>
      </ul>
      <div class="content__video">
        <div class="content__video__container">
          VIDEO EMBED GOES HERE
        </div>
      </div>
    </div>
    <h3>Emcee</h3>
    <ul>
     <li><img class="content_speaker--keynote" src="/wp-content/themes/universe_theme_child/ui/Justin-Lafarzan-Headshot.jpeg" alt="Justin Lafarzan"></li>
      <h4>Justin Lafazan</h4>
      <li>Next Gen Summit, Entrepreneur, Investor, Speaker, Author</li>
      <li><a href="www.justinlafazan.com">www.justinlafazan.com</a></li>
    </ul>
    <h3>Panelists</h3>
    <div class="panelists">
    <ul class="panelist">
       <li><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/Brennan.jpg"></li>
       <h4>Brennan Agranoff</h4>
      <li><strong>Panelist</strong></li>
      <li>Founder & CEO, Hoopswagg</li>
      <li><a href="hoopswagg.com">hoopswagg.com</a></li>
    </ul>
    <ul class="panelist">
    <li><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/Deep_Patel.JPG" alt="Deep Patel"></li>
      <h4>Deep Patel</h4>
      <li><strong>Panelist</strong></li>
      <li>Entrepreneur, marketer, author</li>
      <li><a href="deeppatel.com">deeppatel.com</a></li>
    </ul>
    <ul class="panelist">
       <li><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/Benjamin.jpg"></li>
      <h4>Benjamin Stern</h4>
      <li><strong>Panelist</strong></li>
      <li>Founder, Nohbo</li>
      <li><a href="nohboball.com">nohboball.com</a></li>
    </ul>
    <ul class="panelist">
     <li><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/Haile.jpg"></li>
     <h4>NAME</h4>
      <li><strong>Panelist</strong></li>
      <li>Motivational speaker, youth health advocate, vegan chef</li>
      <li><a href="hailevthomas.com">hailevthomas.com</a></li>
    </ul>
  </div>
  </section>

  <input id="toggle2" type="checkbox" name="toggle" />
  <label for="toggle2">Agenda</label>

  <section class="content" id="content2">
    <h3>The Summit Agenda</h3>
    <table class="content_agenda">
      <tr>
        <td>8:30am</td>
        <td><h5>Check In</h5></td>
      </tr>
      <tr>
        <td>9:00am</td>
        <td><h5>Welcome and opening remarks</h5>
          <ul class="table_ul">
            <li>Cynthia Bailie, Executive Director, Veale Youth Entrepreneurship Forum</li>
            <li>Justin Lafazan, Emcee, thinkBIG! Summit, Co-founder, Next Gen Summit</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>9:15am</td>
        <td><em>Drive</em> - Gerard Adams<br />Gerard Adams became a self-made, multi-millionaire at the age of 24, having overcome many personal and financial obstacles to create the much-loved news platform EliteDaily.com, which sold for $50 million. A serial entrepreneur, angel investor, and philanthropist, Gerard currently dedicates his time to mentoring the next generation of creators and innovators to believe that the lives they dream of are not out of reach, but attainable through leadership, creativity, self confidence, and drive.
</td>
      </tr>
      <tr>
        <td>10:00am</td>
        <td>Innovation Challenge FINAL FOUR Presentations</td>
      </tr>
      <tr>
        <td>10:30am</td>
        <td>BREAK</td>
      </tr>
      <tr>
        <td>10:45am</td>
        <td>Mini Maker Hackathon  - Presented by Upcycle Parts Shop</td>
      </tr>
      <tr>
        <td>12:30pm</td>
        <td>Lunch</td>
      </tr>
      <tr>
        <td>1:15pm</td>
        <td>
          <em>Phenoms!</em> - Justin Lafazan, Moderator<br />
          Invited teen innovators deliver Pecha Kucha (20x20) or IGNITE (20x15) style, 5-6 minute talks, Q&A
<ol class="table_ol">
  <li>Brennan Agranoff, Founder, HoopSwagg (confirmed, Oregon)</li>
  <li>Deep Patel, Author, A Paperboy's Fable: The 11 Principles of Success (confirmed, Georgia)</li>
  <li>Benjamin Stern  - Nohbo Shampoo pod shark tank Mark Cuban investee  (confirmed, Melbourne, FL)</li>
  <li>Haile Thomas – healthy food advocate; founder, the HAPPY Org (confirmed, NYC)</li>
          </ol></td>
      </tr>
      <tr>
        <td>2:15pm</td>
        <td>BREAK + Mini Maker Vote</td>
      </tr>
      <tr>
        <td>2:30pm</td>
        <td>
          <em>Hustling in the Land</em> - Justin Lafazan, Moderator
          <br />
          Teen founders from NEO (current Veale students and Veale alum, if available)
          <ol class="table_ol">
            <li>Will Lynch (confirmed)(US, JCU)</li>
            <li>Giles and Noah Foster (SHHS)</li>
            <li>Quiyanni Smith (Beaumont, Miami)</li>
            <li>Matthew Stauffer (Benedictine)</li>
          </ol>
        </td></tr>
      <tr>
        <td>3:30pm</td>
        <td>Mini Maker Hackathon - Final Four Demonstrations and Audience Noisemaker Vote</td>
      </tr>
      <tr>
        <td>4:00pm</td>
        <td>Innovation Challenge Awards</td>
      </tr>
      <tr>
        <td>4:30pm</td>
        <td>Gerard Adams - Inspirational Wrap Up</td>
      </tr>
      <tr>
        <td>5:00pm</td>
        <td>Closing, Reception</td>
      </tr>
    </table>
  </section>

  <input id="toggle3" type="checkbox" name="toggle" />
  <label for="toggle3">Mini Maker Hackathon</label>

  <section class="content" id="content3">
    <h3>Mini Maker Hackathon</h3>
    <p>
      A sprint-like design event that includes team members of various subject matter expertise who collaborate intensively to generate ideas and/or a product. The term originated with computer programmers and software developers.
    </p>
    <a class="hack-btn" href="http://stage.vealeentrepreneurs.org/hackathon/">Learn More About the Hackathon</a>
  </section>

  <input id="toggle4" type="checkbox" name="toggle" />
  <label for="toggle4">Sponsors & Partners</label>

  <section class="event-partner content" id="content4">
    <h3>Sponsors & Partners</h3>

    <div class="sponsor-partner">
	<h4 class="sponsor-title">Sponsors</h4>
	<ul>
		<li><a target="_blank" href="http://connorblakley.com"><img src="/wp-content/themes/universe_theme_child/ui/connor-blakeley.png" alt="YouthLogic" /></a></li>
		<li><a target="_blank" href="http://www.case.edu/universitycenter"><img src="/wp-content/themes/universe_theme_child/ui/tinkham-veale.jpeg" alt="TVUC@CWRU" /></a></li>
    <li><a target="_blank" href="http://fownders.com/about/"><img src="/wp-content/themes/universe_theme_child/ui/fownders.png" alt="Fownders" /></a></li>
	</ul>
  </div>
<div class="sponsor-partner">
	<h4 class="sponsor-title">Partners</h4>
	<ul>
		<li><a target="_blank" href="http://www.gcesc.k12.oh.us/"><img src="/wp-content/themes/universe_theme_child/ui/geauga-logo.png" alt="Geauga ESC" /></a></li>
		<li><a target="_blank" href="https://www.ngsummit.com"><img src="/wp-content/themes/universe_theme_child/ui/Nextgen.png" alt="NextGen Summit" /></a></li>
    <li><a  target="_blank" href="https://www.upcyclepartsshop.org"><img src="/wp-content/themes/universe_theme_child/ui/uncycle-parts.png" alt="Upcycle Parts Shop" /></a></li>
	</ul>
</div>
  <div class="school-advisor">
    <div class="advisor-column">
  	   <h4 class="sponsor-title">Advisors</h4>
    	<ul>
        <li>Jennifer Felker</li>
        <li>Tracey Jemison</li>
        <li>Jay Schach</li>
    	</ul>
    </div>
  	<div class="school-advisor__column">
  			<h4 class="sponsor-title">School Partners</h4>
  			<ul>
  				<li>School Name</li>
  				<li>School Name</li>
  			</ul>
  	</div>
  </div>
  </section>

</div>

<!--

<div class="event-details-introduction">

  <h2 class="event-h2">Speakers</h2>
  <h3>Keynote</h3>
  <p><a  target="_blank" href="http://gerardadams.com/">Gerard Adams</a>, The Millennial Mentor™, thought leader, entrepreneur, investor, philanthropist<p>
  <h3>Emcee</h3>
  <p><a target="_blank"href="http://www.justinlafazan.com/">Justin Lafazan</a>, Next Gen Summit, entrepreneur, investor, speaker, author</p>
  <h3>Panelists</h3>
  <p><a  target="_blank" href="https://hoopswagg.com/">Brennan Agranoff</a>, Founder & CEO-Hoopswagg</p>
  <p><a  target="_blank" href="http://www.lynchdesignflorist.com/2017/8/5/1gl9mm2gf40y7v4j1468amw5wicgbp">Will Lynch</a>, Founder-Lynch Design</p>
  <p><a  target="_blank" href="https://deeppatel.com/">Deep Patel</a>, Entrepreneur, marketer, author</p>
  <p><a  target="_blank" href="https://www.etsy.com/shop/21SOX">Matthew Stauffer</a>, Founder-21 SOX</p>
  <p><a  target="_blank" href="http://nohboball.com/">Benjamin Stern</a>, Founder-Nohbo</p>
  <p><a  target="_blank" href="https://www.thehappyorg.org/">Haile Thomas</a>, Motivational speaker, youth health advocate, vegan chef</p>
<h4 class="coming-soon">Our Full Lineup, Speakers & Agenda Are Coming Soon!</h4>
</section>
<section class="event-partners">
	<h2 class="event-h2">Sponsors & Partners</h2>
	<div class="sponsor-partner">
	<h4 class="sponsor-title">Sponsors</h4>
	<ul>
		<li><a target="_blank" href="http://connorblakley.com"><img src="/wp-content/themes/universe_theme_child/ui/connor-blakeley.png" alt="YouthLogic" /></a></li>
		<li><a target="_blank" href="http://www.case.edu/universitycenter"><img src="/wp-content/themes/universe_theme_child/ui/tinkham-veale.jpeg" alt="TVUC@CWRU" /></li>
    <li><a target="_blank" href="http://fownders.com/about/"><img src="/wp-content/themes/universe_theme_child/ui/fownders.png" alt="Fownders" /></a></li>
	</ul>
	</div>
	<div class="sponsor-partner">
	<h4 class="sponsor-title">Partners</h4>
	<ul>
		<li><a target="_blank" href="http://www.gcesc.k12.oh.us/"><img src="/wp-content/themes/universe_theme_child/ui/geauga-logo.png" alt="Geauga ESC" /></a></li>
		<li><a target="_blank" href="https://www.ngsummit.com"><img src="/wp-content/themes/universe_theme_child/ui/Nextgen.png" alt="NextGen Summit" /></a></li>
		<li><a  target="_blank" href="https://www.upcyclepartsshop.org"><img src="/wp-content/themes/universe_theme_child/ui/uncycle-parts.png" alt="Upcycle Parts Shop" /></a></li>
	</ul>
	</div>


	<div class="school-advisor">
		<!--<div class="school-advisor__column">
			<h4 class="sponsor-title">School Partners</h4>
			<ul>
				<li>School Name</li>
				<li>School Name</li>
			</ul>
		</div>-->



</section>
<footer class="event-footer">
	<h3 class="event-footer__title">CONTACT thinkBIG!</h3>
	<div class="event-footer__info">
		<div class='event-footer__left'>
		<a class="email" href="mailto:info@vealefound.org"> info@vealefound.org</a>
		<p>216.255.3179</p>
		</div>
		<div class='event-footer__right'>
		<address>30195 Chagrin Blvd., Suite 310<br /> Pepper Pike, Ohio 44124 </address>
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
