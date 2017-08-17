<?php
 /** template name: Step Two Landing
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



<h1>The Challenge</h1>
<p>Challenge competitors (teams of 1-4 students) develop big, entrepreneurial ideas that will enhance the economy, image and lives of Northeast Ohio residents in one of the following
categories:</p>
<ul>
  <li>Entertainment & Sports</li>
  <li>Health & Medicine</li>
  <li>Agriculture & Culinary Arts</li>
  <li>Manufacturing & Making</li>
  <li>Wild Card (you decide!)</li>

<p>Teams take inspiration from Industry Briefs created by leading professionals in each category. All teams submit their business ideas, names and executive summaries, and compete to become a finalist. These finalists will be asked to submit 60-second videos and compete to become a Final Four Challenge team. All Challenge teams are invited to the thinkBIG! Summit. Prizes for all finalists will be awarded at the Summit.</p>

<h4>Rounds of the Challenge</h4>
<ul>
  <li>Round 1 <br>
    Written Submission Round
  </li>
  <li>Round 2<br>
    Video Round
  </li>
  <li>Round 3<br>
    Final Four at Summit
  </li>
</ul>

<a class="hack-btn">Preparing Your Submission</a>

<h3>Executive Summary</h3>
<p>The thinkBIG Executive Summary is a description of your idea. thinkBIG! judges use the summary to understand and evaluate your idea and its business potential. Your summary should be designed to catch the judges’ attention and make them want to hear more.
Your Executive Summary must be submitted as a slide deck in pdf format. It can be designed any way you wish, but is limited to 10 slides that must include the following information:
</p>
<ul>
  <li><b>•Team Name</b> - First and Last Name(s) of Your Team and Grade Level(s)</li>
  <li><b>•School Information</b> - School Name and District</li>
  <li><b>•Idea Name</b> – this is typically a business or product name</li>
  <li><b>•One-line Pitch</b> – one sentence describing the problem, solution and who it is for </li>

<br>
<h3>Along with these 6 building blocks for describing your idea:</h3>
<ol>
  <li><b>Problem</b> – description of the problem being solved, opportunity being seized, or customer/user need you are satisfying</li>
  <li><b>Solution</b> – description of the idea that solves the problem and how it works</li>
  <li><b>Customers</b> – description of who will benefit from the idea, who will buy it, and the size of the target market</li>
  <li><b>Competition</b> – description of how others currently address the problem/opportunity, who the competition is, and why your idea is better</li>
  <li><b>Revenue</b> – description of how your idea will make money, how you envision selling it </li>
  <li><b>Next Steps</b> – description of what is needed to move to the next stage of development – costs and funding, research, prototyping, etc.</b>
</ol>
<h3>Tools & Resources to Help you Prepare</h3>
<ul>
<li><a href="#">For Teachers</a></li>
<li><a href="#">Playlist for Students</a></li>
<li><a href="#">Executive Summary sample document</a></li>
</ul>

<h3>2017-18 Schedule</h3>
<table>
  <tr>
    <td>August 21, 2017</td>
    <td>thinkBIG! Challenge Submissions Open
				Find a teacher advisor and register your team!</td>
    </tr>
    <tr>
      <td>December 1, 2017</td>
      <td>thinkBIG! Challenge Submissions Close
				Submit your written concept & slide deck!
      </td>
    </tr>
    <tr>
      <td>December 2-7, 2017</td>
      <td>thinkBIG! Challenge Judging Window
				Judges review and determine Final Four</td>
      </tr>
      <tr>
        <td>December 15, 2017</td>
        <td>Semifinalists Announced
				20 semifinalists will submit videos
      </td>
    </tr>
    <tr>
      <td>January 19, 2018</td>
      <td>Semifinalists’ :60 videos due
				Pitch videos will be shared via a playlist on our website
      </td>
    </tr>
    <tr>
      <td>February 9, 2018</td>
      <td>Deadline to register for the Summit</td>
    </tr>
    <tr>
      <td>February 19, 2018</td>
      <td>Final Four Challenge teams announced</td>
    </tr>
    <tr>
      <td>February 27, 2018</td>
      <td>thinkBIG! Veale Innovation Summit
				Final Four Challenge teams pitch live at the Summit, along
				with a full day of hacking, and interacting with panels of
				national and local Generation Z and millennial entrepreneurs
      </td>
    </tr>



</table>

<a class="hack-btn">Rules & Judging</a>




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
