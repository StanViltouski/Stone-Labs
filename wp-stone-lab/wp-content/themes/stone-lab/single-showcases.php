<?php get_header();?>

<section>
	<div id="showcases_head" class="showcases_head">
        <div class="wrapper4-effect"></div>
           	<?php
		while ( have_posts() ) :
			the_post(); ?>

		<div class="showcasesHead_title text-center">
			<h4 class="pre_title"><?php if( get_field('sub_title') ): ?><?php the_field('sub_title'); ?><?php endif; ?></h4>
			<h1 class="main_title"><?php the_title(); ?></h1>
		</div>
		<?php endwhile; ?>
		<div class="container_showcase container">
			<div class="showcasesHead_bottons d-flex justify-content-between">
				<div class="showcase-button-wrapper">
                	<a href="http://wp-stone-lab/showcases/" class="botton_back"><img src="<?php bloginfo('template_directory') ?>/assets/svg/arrow_back.svg" alt="arrow_back">Back to projects</a>
            	</div>

            	<div class="botton_share_wrapper">
            		<a href="#" class="botton_share"><img src="<?php bloginfo('template_directory') ?>/assets/svg/share.svg" alt="share">Share</a>
        		</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container container_showcase">

		<div class="project_info col-12">
			<div class="row m-0">
				<div class="col-lg-3 col-md-6 col-12 projectInfo_block">
					<h4 class="projectInfo_title">Industry</h4>
					<p class="projectInfo_text">Education / Social Networks</p>
					<h4 class="projectInfo_title">Duration</h4>
					<p class="projectInfo_text">7 months</p>
				</div>
				<div class="col-lg-3 col-md-6 col-12 projectInfo_block">
					<h4 class="projectInfo_title">Categories</h4>
					<p class="projectInfo_text">Big Data, Business Intelligence, Development Process, Enterprise Solutions</p>
					<h4 class="projectInfo_title">Release Date</h4>
					<p class="projectInfo_text">17 August 2016</p>
				</div>
				<div class="col-lg-3 col-md-6 col-12 projectInfo_block">
					<h4 class="projectInfo_title">Technologies</h4>
					<p class="projectInfo_text">Kotlin, Swift, Kotlin, Swift, Kotlin, Swift, Kotlin, Swift</p>
					<h4 class="projectInfo_title">Platforms</h4>
					<p class="projectInfo_text">Android, iOS</p>
				</div>
				<div class="col-lg-3 col-md-6 col-12 projectInfo_block">
					<h4 class="projectInfo_title">Team</h4>
					<p class="projectInfo_text">1 Project Manager, 1 iOS Developer, 1 Android Developer, 1 QA</p>
				</div>
			</div>
		</div>
	
	</div>
</section>

<section>
	<div class="container container_showcase">

		<div class="main_text">
			<div class="row m-0">
				<div class="col-lg-6 col-12">
					<h3 class="mainText_title">Goal</h3>
					<p class="mainText_content">Implementing personal data collection and processing with special software; integrating data-driven training system; providing research based methodology to greater number of athletes all over the country; promoting of data-driven baseball facility; rendering this solution to other companies.</p>
					<h3 class="mainText_title">Solution</h3>
					<p class="mainText_content">We have created a powerful multi-user web app designed to collect and process different data, including personal medical parameters of an athlete throwing/hitting/pitching a ball, as well as ball trajectory, throwing spin, etc. <br><br>
The data collection is provided through the sensors supported by the system, as well as by data entry executed by the athlete himself on a gadget. Upon completion of data collection and processing, a trainer is supplied with information presented in easy readable forms (e.g., graphs, diagrams, charts).
</p>
				</div>
				<div class="col-lg-6 col-12">
					<h3 class="mainText_title">Main Challenge</h3>
					<p class="mainText_content">Provide smooth architectural upgrade of the solution from the MVP stage to the complete market-ready product.</p>
					<h3 class="mainText_title">Features</h3>
					<p class="mainText_content">- Save time and money running your data-driven baseball player development program. <br>
- Any baseball player from beginner to master level can find a training option to achieve their goals.</p>
					<h3 class="mainText_title">Competitive Advantage</h3>
					<p class="mainText_content">The present solution allows different modes of baseball training facility operation, and can be easily deployed at any baseball facility with minimal adjustment.</p>

				</div>
			</div>
		</div>

	</div>
</section>



<section id="showcase_slider-desk">
    <div class="screens-3d-carousel">
        <ul>
            <li>
                <div class="screens-item-wrapper">
                	<div class="screens-text">
                            Screens
                     </div>
                    <div class="screens-object">
                        <div class="screen-image-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
                        </div>
                    </div>

                     <div class="screens_description">
                            Main Page
                     </div>
                </div>
            </li>

            <li>
                <div class="testimonials-item-wrapper">
                	<div class="screens-text">
                            Screens
                     </div>
                    <div class="screens-object">
                        <div class="screen-image-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
                        </div>
                    </div>
                    <div class="screens_description">
                            Main Page
                     </div>
                </div>
            </li>

            <li>
                <div class="testimonials-item-wrapper">
                	<div class="screens-text">
                            Screens
                     </div>
                    <div class="screens-object">
                        <div class="screen-image-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
                        </div>
                    </div>
                    <div class="screens_description">
                            Main Page
                     </div>
                </div>
            </li>

            <li>
                <div class="testimonials-item-wrapper">
                	<div class="screens-text">
                            Screens
                     </div>
                    <div class="screens-object">
                        <div class="screen-image-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
                        </div>
                    </div>
                    <div class="screens_description">
                            Main Page
                     </div>
                </div>
            </li>

            <li>
                <div class="testimonials-item-wrapper">
                	<div class="screens-text">
                            Screens
                     </div>
                    <div class="screens-object">
                        <div class="screen-image-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
                        </div>
                    </div>
                    <div class="screens_description">
                            Main Page
                </div>
            </li>

            <li>
                <div class="testimonials-item-wrapper">
                	<div class="screens-text">
                            Screens
                     </div>
                    <div class="screens-object">
                        <div class="screen-image-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
                        </div>
                    </div>
                    <div class="screens_description">
                           Main Page
                     </div>
                </div>
            </li>

        </ul>
    </div>
</section>



<section id="showcase_slider-mob">
    <div class="owl-carousel owl-theme screen_slider-mob">

        <div class="screen_item container inner-container">
            <div class="screens-text">About us</div>
            <div class="screen-image-wrapper-mobile">
                 <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
            </div>
            <div class="screens_description">Main Page</div>
        </div>
		
		<div class="screen_item container inner-container">
            <div class="screens-text">About us</div>
            <div class="screen-image-wrapper-mobile">
                 <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
            </div>
            <div class="screens_description">Main Page</div>
         </div>

        <div class="screen_item container inner-container">
            <div class="screens-text">About us</div>
            <div class="screen-image-wrapper-mobile">
                 <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
            </div>
            <div class="screens_description">Main Page</div>            
        </div>

        <div class="screen_item container inner-container">
            <div class="screens-text">About us</div>
            <div class="screen-image-wrapper-mobile">
                 <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
            </div>
            <div class="screens_description">Main Page</div>           
        </div>

        <div class="screen_item container inner-container">
            <div class="screens-text">About us</div>
            <div class="screen-image-wrapper-mobile">
                 <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
            </div>
            <div class="screens_description">Main Page</div>           
        </div>

        <div class="screen_item container inner-container">
            <div class="screens-text">About us</div>
            <div class="screen-image-wrapper-mobile">
                 <img src="<?php bloginfo('template_directory') ?>/assets/png/screen_showcase.png" alt="screen-image">
            </div>
            <div class="screens_description">Main Page</div>           
        </div>

    </div>
</section>



<section id="feedback">
	<div class="container container_showcase">
    	<div class="learn_more">
	
    	    <div class="learnMore_title">Want to Learn More?</div>
    	    <div class="learnMore_description">
    	        Many studies have been done to research the effects of motivation and mental health. As the implications of helping those with negative 	self-esteem, depression and anxiety are immense this is certainly an area of research that deserves a great deal of attention. 
    	    </div>
    	    <div class="blue-main-link-wrapper botton_download">
    	        <a href="#" class="blue-main-link"><img src="<?php bloginfo('template_directory') ?>/assets/svg/pfd.svg" alt="download">Download PDF</a>
    	    </div>
    	</div>
	
		<div class="testimonials-object feedback">
			<div class="feedback_head"> CLIENT’S FEEDBACK</div>
    	    <div class="quote-icon">
    	        <img src="<?php bloginfo('template_directory') ?>/assets/svg/feedback.svg" alt="feedback">
    	    </div>
    	    <div class="testimonial-text">
    	        Stone Labs has been a pleasure to work with at every turn. They bring a rare balance of
    	        professionalism, positiveness and insight. Very thorough approach to requirement gathering,
    	        efficient and timely delivery of products. No hidden costs or surprises, excellent
    	        communication
    	        and I look forward to working with the team again with my future projects!
    	    </div>
    	    <div class="testimonial-author-wrapper">
    	        <img src="<?php bloginfo('template_directory') ?>/assets/png/avatar_showcase.png" alt="testimonial-author">
    	        <span class="author-name">Michael Connor, CEO </span>
    	    </div>
    	    <div class="testimonial-logo-wrapper">
    	        <img src="<?php bloginfo('template_directory') ?>/assets/png/client-1.png" alt="testimonial-logo">
    	    </div>
    	</div>

	</div>
</section>









<footer class="footer-wave-1 footer-wave-2 footer-wave-3">
    <div class="container inner-container">
        <div class="footer-inquiry">
  
            <?php dynamic_sidebar( 'Footer nameplate' ); ?>

            <div class="inquiry-button">
                <a href="/apply-form.html" class="white-button">Send Inquiry</a>
            </div>
        </div>
    </div>





 <?php get_footer(); ?>