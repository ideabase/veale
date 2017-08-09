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
           	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/259273/light-bulb-downsized.jpg" alt="Lightbulb" />
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/259273/thinkBIGlogo-01.svg" alt="thinkBIG! - Veale Innovation Challenge & Summit"/>
           		<h2>Join Us For the Challenge</h2>
               <h3>2.27.18</h3>
               <!-- Display the countdown timer in an element -->
         <p id="demo"></p>

         <script>
         // Set the date we're counting down to
         var countDownDate = new Date("Feb 27, 2018 15:37:25").getTime();

         // Update the count down every 1 second
         var x = setInterval(function() {

           // Get todays date and time
           var now = new Date().getTime();

           // Find the distance between now an the count down date
           var distance = countDownDate - now;

           // Time calculations for days, hours, minutes and seconds
           var days = Math.floor(distance / (1000 * 60 * 60 * 24));
           var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
           var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
           var seconds = Math.floor((distance % (1000 * 60)) / 1000);

           // Display the result in the element with id="demo"
           document.getElementById("demo").innerHTML = days + "d " + hours + "h "
           + minutes + "m " + seconds + "s ";

           // If the count down is finished, write some text
           if (distance < 0) {
             clearInterval(x);
             document.getElementById("demo").innerHTML = "EXPIRED";
           }
         }, 1000);
         </script>
             </header>

      <section class="event-body">
     <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/259273/placeholder-image.jpg" alt="Students" />
     <div class="event-introduction">ThinkBIG! is a high school innovation Challenge and Summit that inspires youth to use creativity and collaboration to create big, innovative busi- ness ideas that promise to make Northeast Ohio even better.</div>
     <h2>Join Us in 3 Easy Steps</h2>
     <h3>Step 1: Register your school</h3>
      <p>Don't worry, you don't have to know all the details</p>
     <a href="/school-partner-registration/"> Register School</a>
     <h3>Step 2: Submit Challenge Entries</h3>
         <ul>
           <li>$9,000 in Prizes</li>
            <li> Be named a Veale Innovator </li>
             <li> Prizes for Your School </li>
            <li> Traveling Trophy</li>
      	</ul>
     <a href="/thinkbig-challenge-entry-submission/"> Submit Entries & View Resources</a>
     <h3>Step 3: Attend the Summit</h3>
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

<section class="event-details">
<h2> The thinkBIG! Summit </h2>
<div class="event-details-introduction">
<h3> What is the thinkBIG! Summit? </h3>
<p> A unique, one-day conference featuring panels of
national and local Gen Z and millennial entrepreneurs,
mini maker hackathon sessions, Final Four Challenge team pitches, awards, prizes, networking and more!
The Summit is open to all students, whether or not they compete in the Challenge. </p>
<h4>Our Lineup, Speakers, & Agenda are Coming Soon!</h4>
</section>

<section class="event-partners">
	<h3>Sponsors & Partners</h3>
	<h4>Sponsors</h4>
	<ul>
		<li>Sponsor Logo</li>
		<li>Sponsor Logo</li>
	</ul>
	<h4>Partners</h4>
	<ul>
		<li>Partner Logo</li>
		<li>Partner Logo</li>
	</ul>
	<h4>Participating Schools</h4>
	<ul>
		<li>School Name</li>
		<li>School Name</li>
	</ul>
	<h4>Advisors</h4>
	<ul>
		<li>Advisor Name</li>
		<li>Advisor Name</li>
	</ul>
</section>


<footer class="event-footer">
	<h3>Contact thinkBIG!</h3>
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
