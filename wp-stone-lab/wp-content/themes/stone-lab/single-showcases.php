<?php get_header();?>

 <?php
    while ( have_posts() ) :
        the_post(); ?>


<section>
	<div id="showcases_head" class="showcases_head">
        <div class="wrapper4-effect"></div>
       
		<div class="showcasesHead_title text-center">
			<h4 class="pre_title"><?php if( get_field('sub_title') ): ?><?php the_field('sub_title'); ?><?php endif; ?></h4>
			<h1 class="main_title"><?php the_title(); ?></h1>
		</div>

		<div class="container_showcase container">
			<div class="showcasesHead_bottons d-flex justify-content-between">
				<div class="showcase-button-wrapper">
                	<a href="../" class="botton_back"><img src="<?php bloginfo('template_directory') ?>/assets/svg/arrow_back.svg" alt="arrow_back">Back to projects</a>
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
					<p class="projectInfo_text"><?php if( get_field('sub_title') ): ?><?php the_field('sub_title'); ?><?php endif; ?></p>
					<h4 class="projectInfo_title">Duration</h4>
					<p class="projectInfo_text"><?php if( get_field('duration') ): ?><?php the_field('duration'); ?><?php endif; ?></p>
				</div>
				<div class="col-lg-3 col-md-6 col-12 projectInfo_block">
					<h4 class="projectInfo_title">Categories</h4>
					<p class="projectInfo_text">Big Data, Business Intelligence, Development Process, Enterprise Solutions</p>
					<h4 class="projectInfo_title">Release Date</h4>
					<p class="projectInfo_text"><?php if( get_field('release') ): ?><?php the_field('release'); ?><?php endif; ?></p>
				</div>
				<div class="col-lg-3 col-md-6 col-12 projectInfo_block">
					<h4 class="projectInfo_title">Technologies</h4>
					<p class="projectInfo_text"><?php if( get_field('technology') ): ?><?php the_field('technology'); ?><?php endif; ?></p>
					<h4 class="projectInfo_title">Platforms</h4>
					<p class="projectInfo_text"><?php if( get_field('platforms') ): ?><?php the_field('platforms'); ?><?php endif; ?></p>
				</div>
				<div class="col-lg-3 col-md-6 col-12 projectInfo_block">
					<h4 class="projectInfo_title">Team</h4>
					<p class="projectInfo_text"><?php if( get_field('full_team') ): ?><?php the_field('full_team'); ?><?php endif; ?></p>
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
					<p class="mainText_content"><?php if( get_field('goal') ): ?><?php the_field('goal'); ?><?php endif; ?></p>
					<h3 class="mainText_title">Solution</h3>
					<p class="mainText_content"><?php if( get_field('solution') ): ?><?php the_field('solution'); ?><?php endif; ?>
				</div>
				<div class="col-lg-6 col-12">
					<h3 class="mainText_title">Main Challenge</h3>
					<p class="mainText_content"><?php if( get_field('challenge') ): ?><?php the_field('challenge'); ?><?php endif; ?></p>
					<h3 class="mainText_title">Features</h3>
					<p class="mainText_content"><?php if( get_field('features') ): ?><?php the_field('features'); ?><?php endif; ?></p>
					<h3 class="mainText_title">Competitive Advantage</h3>
					<p class="mainText_content"><?php if( get_field('competitive_adv') ): ?><?php the_field('competitive_adv'); ?><?php endif; ?></p>

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
                            <?php if( get_field('1_slide') ): ?><img src="<?php the_field('1_slide'); ?>" /><?php endif;?>
                        </div>
                    </div>

                     <div class="screens_description">
                           <?php if( get_field('1_slide_description') ): ?><?php the_field('1_slide_description'); ?><?php endif;?>
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
                            <?php if( get_field('2_slide') ): ?><img src="<?php the_field('2_slide'); ?>" /><?php endif;?>
                        </div>
                    </div>
                    <div class="screens_description">
                            <?php if( get_field('2_slide_description') ): ?><?php the_field('2_slide_description'); ?><?php endif;?>
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
                             <?php if( get_field('3_slide') ): ?><img src="<?php the_field('3_slide'); ?>" /><?php endif;?>
                        </div>
                    </div>
                    <div class="screens_description">
                            <?php if( get_field('3_slide_description') ): ?><?php the_field('3_slide_description'); ?><?php endif;?>
                </div>
            </li>

            <li>
                <div class="testimonials-item-wrapper">
                	<div class="screens-text">
                            Screens
                     </div>
                    <div class="screens-object">
                        <div class="screen-image-wrapper">
                             <?php if( get_field('4_slide') ): ?><img src="<?php the_field('4_slide'); ?>" /><?php endif;?>
                        </div>
                    </div>
                    <div class="screens_description">
                            <?php if( get_field('4_slide_description') ): ?><?php the_field('4_slide_description'); ?><?php endif;?>
                </div>
            </li>
        </ul>
    </div>
</section>



<section id="showcase_slider-mob">
    <div class="owl-carousel owl-theme screen_slider-mob">

        <div class="screen_item container inner-container">
            <div class="screens-text">Screens</div>
            <div class="screen-image-wrapper-mobile">
                 <?php if( get_field('1_slide') ): ?><img src="<?php the_field('1_slide'); ?>" /><?php endif;?>
            </div>
            <div class="screens_description"><?php if( get_field('1_slide_description') ): ?><?php the_field('1_slide_description'); ?><?php endif;?></div>
        </div>
		
		<div class="screen_item container inner-container">
            <div class="screens-text">Screens</div>
            <div class="screen-image-wrapper-mobile">
                 <?php if( get_field('2_slide') ): ?><img src="<?php the_field('2_slide'); ?>" /><?php endif;?>
            </div>
            <div class="screens_description"><?php if( get_field('2_slide_description') ): ?><?php the_field('2_slide_description'); ?><?php endif;?></div>
         </div>

        <div class="screen_item container inner-container">
            <div class="screens-text">Screens</div>
            <div class="screen-image-wrapper-mobile">
                 <?php if( get_field('3_slide') ): ?><img src="<?php the_field('3_slide'); ?>" /><?php endif;?>
            </div>
            <div class="screens_description"><?php if( get_field('3_slide_description') ): ?><?php the_field('3_slide_description'); ?><?php endif;?></div>            
        </div>

        <div class="screen_item container inner-container">
            <div class="screens-text">Screens</div>
            <div class="screen-image-wrapper-mobile">
                 <?php if( get_field('4_slide') ): ?><img src="<?php the_field('4_slide'); ?>" /><?php endif;?>
            </div>
            <div class="screens_description"><?php if( get_field('4_slide_description') ): ?><?php the_field('4_slide_description'); ?><?php endif;?></div>           
        </div>

    </div>
</section>



<section id="feedback">
	<div class="container container_showcase">
    	<div class="learn_more">
	
    	    <div class="learnMore_title"><?php if( get_field('more_title') ): ?><?php the_field('more_title'); ?><?php endif;?></div>
    	    <div class="learnMore_description">
    	        <?php if( get_field('more_content') ): ?><?php the_field('more_content'); ?><?php endif;?>
    	    </div>
    	    <div class="blue-main-link-wrapper botton_download">
    	        <a href="<?php if( get_field('file_download') ): ?><?php the_field('file_download'); ?><?php endif;?>" download class="blue-main-link"><img src="<?php bloginfo('template_directory') ?>/assets/svg/pfd.svg" alt="download">Download PDF</a>
    	    </div>
    	</div>
	
		<div class="testimonials-object feedback">
			<div class="feedback_head"> CLIENT’S FEEDBACK</div>
    	    <div class="quote-icon">
    	        <img src="<?php bloginfo('template_directory') ?>/assets/svg/feedback.svg" alt="feedback">
    	    </div>
    	    <div class="testimonial-text">
    	        <?php if( get_field('testimonials_content') ): ?><?php the_field('testimonials_content'); ?><?php endif;?>
    	    </div>
    	    <div class="testimonial-author-wrapper">
    	       <?php if( get_field('testimonials_avatar') ): ?><img src="<?php the_field('testimonials_avatar'); ?>" /><?php endif;?>
    	        <span class="author-name"><?php if( get_field('testimonials_name') ): ?><?php the_field('testimonials_name'); ?><?php endif;?> </span>
    	    </div>
    	    <div class="testimonial-logo-wrapper">
    	        <?php if( get_field('testimonials_logo') ): ?><img src="<?php the_field('testimonials_logo'); ?>" /><?php endif;?>
    	    </div>
    	</div>

	</div>
</section>

        <?php endwhile; ?>







<footer class="footer-wave-1 footer-wave-2 footer-wave-3">
    <div class="container inner-container">
        <div class="footer-inquiry">
  
            <?php dynamic_sidebar( 'Footer nameplate' ); ?>

            <div class="inquiry-button">
                <a href="/apply-form" class="white-button">Send Inquiry</a>
            </div>
        </div>
    </div>





 <?php get_footer(); ?>