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
		<img class="circle circle1" src="/wp-content/themes/universe_theme_child/ui/circle-1.png" alt="Step 1">
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
			<img class="circle circle2" src="/wp-content/themes/universe_theme_child/ui/circle-2.png" alt="Step 2">
		</div>
	</div>

	<div class="step-container step-container--3">
		<div class="step-container__image">
			<img class="circle circle3" src="/wp-content/themes/universe_theme_child/ui/circle-3.png" alt="Step 3">
		</div>
		<div class="step-container__details step-container__details--step-3">
			<h3 class="step-3 step">Step 3:</h3>
			<h3 class="step-title">Attend the Summit</h3>
	<p class="step-description">Inspire your students. Plus, it's free!</p>
	 <a data-scroll class="btn step-3-btn" href="#summit"> Find Out More</a>
   <a data-scroll class="btn step-3-btn btn--reverse" href="/summit-registration/"> Register Now</a>
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
        <li><a href="http://gerardadams.com/" target="_blank"><img class="content_speaker--keynote" src="/wp-content/themes/universe_theme_child/ui/GerardAdamsForWebsite.jpeg" alt="Gerard Adams"></a></li>
        <h4><a href="http://gerardadams.com/" target="_blank">GERARD ADAMS</a></h4>
        <li>The Millennial Mentor™, thought leader, serial entrepreneur, angel investor, philanthropist</li>
      </ul>
      <div class="content__video">
        <div class="content__video__container">
          <video src="/wp-content/themes/universe_theme_child/ui/sizzle-small.mp4" controls preload="auto" poster="/wp-content/themes/universe_theme_child/ui/video-thumb.jpg">
          Sorry, your browser doesn't support embedded videos,
          but don't worry, you can <a href="/wp-content/themes/universe_theme_child/ui/sizzle-small.mp4">download it</a>
          and watch it with your favorite video player!
          </video>
        </div>
      </div>
    </div>
    <h3>Emcee</h3>
    <ul>
     <li><a href="https://www.justinlafazan.com"target="_blank"><img class="content_speaker--keynote" src="/wp-content/themes/universe_theme_child/ui/Justin-Lafarzan-Headshot.jpeg" alt="Justin Lafarzan"></a></li>
      <h4><a href="https://www.justinlafazan.com"target="_blank">Justin Lafazan</a></h4>
      <li>Next Gen Summit, entrepreneur, investor, speaker, author</li>
    </ul>
    <h3>Panelists</h3>
    <div class="panelists">
    <ul class="panelist">
       <li><a href="https://www.hoopswagg.com"target="_blank"><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/Brennan.jpg" alt="Brennan Arganoff"></a></li>
       <h4><a href="https://www.hoopswagg.com"target="_blank">Brennan Agranoff</a></h4>
      <li>Founder & CEO-Hoopswagg</li>
    </ul>

    <ul class="panelist">
       <li><a href="http://sudsbrewingco.com/" target="_blank"><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/foster.jpg" alt="Noah & Giles Foster"></a></li>
       <h4><a href="http://sudsbrewingco.com/" target="_blank">Noah &amp; Giles Foster</a></h4>
      <li>Founders-Suds Brewing Company</li>
    </ul>

    <ul class="panelist">
       <li><a href="http://www.lynchdesignflorist.com" target="_blank"><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/WillLynchLynchDesign.png"alt="Will Lynch"></a></li>
       <h4><a href="http://www.lynchdesignflorist.com" target="_blank">Will Lynch</a></h4>
      <li>Founder-Lynch Design</li>
    </ul>
    <ul class="panelist">
    <li><a href="https://www.deeppatel.com"target="_blank"><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/Deep_Patel.JPG" alt="Deep Patel"></a></li>
      <h4><a href="https://www.deeppatel.com"target="_blank">Deep Patel</a></h4>
      <li>Entrepreneur, marketer, author</li>
    </ul>
    <ul class="panelist">
       <li><a href="https://www.facebook.com/cakiescustomcreationz/" target="_blank"><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/QuiyanniSmithCakies.png"alt="Quiyanni Smith"></a></li>
       <h4><a href="https://www.facebook.com/cakiescustomcreationz/" target="_blank">Quiylanni Smith</a></h4>
      <li>Founder & CEO-Cakies Custom Creationz & Cakies Cares</li>
    </ul>
    <ul class="panelist">
    <li><a href="https://www.etsy.com/shop/21SOX"target="_blank"><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/MattStauffer1.jpg" alt="Matthew Stauffer"></a></li>
      <h4><a href="https://www.etsy.com/shop/21SOX"target="_blank">Matthew Stauffer</a></h4>
      <li>Founder-21 SOX</li>
    </ul>

    <ul class="panelist">
       <li><a href="https://www.nohboball.com"target="_blank"><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/Benjamin.jpg" alt="Benjamin Stern"></a></li>
      <h4><a href="https://www.nohboball.com"target="_blank">Benjamin Stern</a></h4>
      <li>Founder-Nohbo</li>
    </ul>
    <ul class="panelist">
     <li><a href="https://www.hailevthomas.com"target="_blank"><img class="content_speaker" src="/wp-content/themes/universe_theme_child/ui/Haile.jpg" alt="Haile Thomas"></a></li>
     <h4><a href="https://www.hailevthomas.com"target="_blank">Haile Thomas</a></h4>
      <li>Motivational speaker, youth health advocate, vegan chef</li>
    </ul>

  </div>
  </section>

  <input id="toggle2" type="checkbox" name="toggle" />
  <label for="toggle2">Agenda</label>

  <section class="content" id="content2">
    <h3>The Summit Agenda</h3>
    <?php
    $page = get_posts(
        array(
            'name'      => 'thinkbig-agenda',
            'post_type' => 'page'
        )
    );
    if ( $page )
    {
        echo $page[0]->post_content;
    }
    ?>
  </section>

  <input id="toggle3" type="checkbox" name="toggle" />
  <label for="toggle3">Mini Maker Hackathon</label>

  <section class="maker-hackathon content" id="content3">

    <p>
      A sprint-like design event that includes team members of various subject matter expertise who collaborate intensively to generate ideas and/or a product. The term originated with computer programmers and software developers.
    </p>
    <a class="hack-btn" href="http://stage.vealeentrepreneurs.org/hackathon/">Learn More About the Hackathon</a>
  </section>

  <input id="toggle4" type="checkbox" name="toggle" />
  <label for="toggle4">Sponsors & Partners</label>

  <section class="event-partner content" id="content4">


    <div class="sponsor-partner">
	<h4 class="sponsor-title">Sponsors</h4>
	<ul>
		<li><a target="_blank" href="http://connorblakley.com"><img src="/wp-content/themes/universe_theme_child/ui/connor-blakeley.png" alt="YouthLogic" /></a></li>
		<li><a target="_blank" href="http://www.case.edu/universitycenter"><img src="/wp-content/themes/universe_theme_child/ui/tinkham-veale.jpeg" alt="TVUC@CWRU" /></a></li>
    <li><a target="_blank" href="http://fownders.com/about/"><img src="/wp-content/themes/universe_theme_child/ui/fownders.png" alt="Fownders" /></a></li>
    <li><a target="_blank" href="https://wildfire-education.org/"><img src="/wp-content/themes/universe_theme_child/ui/WildfireEd-logo.jpg" alt="Wildfire Education" /></a></li>
	</ul>
  </div>
<div class="sponsor-partner">
	<h4 class="sponsor-title">Partners</h4>
	<ul>
		<li><a target="_blank" href="http://www.gcesc.k12.oh.us/"><img src="/wp-content/themes/universe_theme_child/ui/geauga-logo.jpg" alt="Geauga ESC" /></a></li>
		<li><a target="_blank" href="https://www.ngsummit.com"><img style="width: 60px;" src="/wp-content/themes/universe_theme_child/ui/Nextgen.png" alt="NextGen Summit" /></a></li>
    <li><a  target="_blank" href="https://www.upcyclepartsshop.org"><img src="/wp-content/themes/universe_theme_child/ui/uncycle-parts.png" alt="Upcycle Parts Shop" /></a></li>
    <li><a  target="_blank" href="https://www.ideabasekent.com/"><img src="/wp-content/themes/universe_theme_child/ui/ideabaselogo.png" alt="IdeaBase Kent" /></a></li>
	</ul>
</div>
  <div class="school-advisor">
    <div class="advisor-column">
  	   <h4 class="sponsor-title">Advisors</h4>
       <?php
       $page = get_posts(
           array(
               'name'      => 'thinkbig-advisors',
               'post_type' => 'page'
           )
       );
       if ( $page )
       {
           echo $page[0]->post_content;
       }
       ?>
    </div>
  	<div class="school-advisor__column">
  			<h4 class="sponsor-title">School Partners</h4>

          <?php
          $page = get_posts(
              array(
                  'name'      => 'thinkbig-high-school-partners',
                  'post_type' => 'page'
              )
          );
          if ( $page )
          {
              echo $page[0]->post_content;
          }
          ?>

  	</div>
  </div>
  </section>

</div>

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
