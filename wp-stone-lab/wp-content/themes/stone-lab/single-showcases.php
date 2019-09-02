<?php get_header(); ?>

<?php
    while ( have_posts() ) : the_post(); ?>

<section>
	<div id="showcases_head" class="showcases_head">
        <div class="wrapper4-effect"></div>
       
		<div class="showcasesHead_title text-center">
			<h4 class="pre_title">
                <?php if(get_post_meta($post->ID, $key = 'sub_title', $single = true)){ ?>
                <?php echo esc_attr(get_post_meta($post->ID, $key = 'sub_title', $single = true));?>
                <?php }  ?>
            </h4>
			<h1 class="main_title"><?php esc_html(the_title()); ?></h1>
		</div>

		<div class="container_showcase container">
			<div class="showcasesHead_bottons d-flex justify-content-between">
				<div class="showcase-button-wrapper">
                	<a href="/showcases" class="botton_back"><img src="<?php bloginfo('template_directory') ?>/assets/svg/arrow_back.svg" alt="arrow_back">Back to projects</a>
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
					<p class="projectInfo_text">
                        <?php if(get_post_meta($post->ID, $key = 'sub_title', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'sub_title', $single = true));?>
                        <?php }  ?>
                    </p>
					<h4 class="projectInfo_title">Duration</h4>
					<p class="projectInfo_text">
                        <?php if(get_post_meta($post->ID, $key = 'duration', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'duration', $single = true));?>
                        <?php }  ?>  
                    </p>
				</div>
				<div class="col-lg-3 col-md-6 col-12 projectInfo_block">
					<h4 class="projectInfo_title">Categories</h4>
					<p class="projectInfo_text">Big Data, Business Intelligence, Development Process, Enterprise Solutions</p>
					<h4 class="projectInfo_title">Release Date</h4>
					<p class="projectInfo_text">
                        <?php if(get_post_meta($post->ID, $key = 'release', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'release', $single = true));?>
                        <?php }  ?> 
                    </p>
				</div>
				<div class="col-lg-3 col-md-6 col-12 projectInfo_block">
					<h4 class="projectInfo_title">Technologies</h4>
					<p class="projectInfo_text">
                        <?php if(get_post_meta($post->ID, $key = 'technology', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'technology', $single = true));?>
                        <?php }  ?>       
                    </p>
					<h4 class="projectInfo_title">Platforms</h4>
					<p class="projectInfo_text">
                        <?php if(get_post_meta($post->ID, $key = 'platforms', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'platforms', $single = true));?>
                        <?php }  ?>   
                    </p>
				</div>
				<div class="col-lg-3 col-md-6 col-12 projectInfo_block">
					<h4 class="projectInfo_title">Team</h4>
					<p class="projectInfo_text">
                        <?php if(get_post_meta($post->ID, $key = 'full_team', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'full_team', $single = true));?>
                        <?php }  ?>
                    </p>
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
					<p class="mainText_content">
                        <?php if(get_post_meta($post->ID, $key = 'goal', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'goal', $single = true));?>
                        <?php }  ?>    
                    </p>

					<h3 class="mainText_title">Solution</h3>
					<p class="mainText_content">
                        <?php if(get_post_meta($post->ID, $key = 'solution', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'solution', $single = true));?>
                        <?php }  ?> 
                    </p>
				</div>
				<div class="col-lg-6 col-12">
					<h3 class="mainText_title">Main Challenge</h3>
					<p class="mainText_content">
                        <?php if(get_post_meta($post->ID, $key = 'challenge', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'challenge', $single = true));?>
                        <?php }  ?>    
                     </p>

					<h3 class="mainText_title">Features</h3>
					<p class="mainText_content">
                        <?php if(get_post_meta($post->ID, $key = 'features', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'features', $single = true));?>
                        <?php }  ?>     
                    </p>

					<h3 class="mainText_title">Competitive Advantage</h3>
					<p class="mainText_content">
                        <?php if(get_post_meta($post->ID, $key = 'competitive_adv', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'competitive_adv', $single = true));?>
                        <?php }  ?>    
                    </p>
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
                            <?php if( get_field('1_slide') ): ?><img src="<?php esc_attr(the_field('1_slide')); ?>" /><?php endif;?>
                        </div>
                    </div>

                    <div class="screens_description">
                        <?php if(get_post_meta($post->ID, $key = '1_slide_description', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = '1_slide_description', $single = true));?>
                        <?php }  ?>
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
                            <?php if( get_field('2_slide') ): ?><img src="<?php esc_attr(the_field('2_slide')); ?>" /><?php endif;?>
                        </div>
                    </div>
                    <div class="screens_description">
                        <?php if(get_post_meta($post->ID, $key = '2_slide_description', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = '2_slide_description', $single = true));?>
                        <?php }  ?>
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
                            <?php if( get_field('3_slide') ): ?><img src="<?php esc_attr(the_field('3_slide')); ?>" /><?php endif;?>
                        </div>
                    </div>
                    <div class="screens_description">
                        <?php if(get_post_meta($post->ID, $key = '3_slide_description', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = '3_slide_description', $single = true));?>
                        <?php }  ?>
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
                             <?php if( get_field('4_slide') ): ?><img src="<?php esc_attr(the_field('4_slide')); ?>" /><?php endif;?>
                        </div>
                    </div>
                    <div class="screens_description">
                        <?php if(get_post_meta($post->ID, $key = '4_slide_description', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = '4_slide_description', $single = true));?>
                        <?php }  ?>
                    </div>
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
                 <?php if( get_field('1_slide') ): ?><img src="<?php esc_attr(the_field('1_slide')); ?>" /><?php endif;?>
            </div>
            <div class="screens_description">
                <?php if(get_post_meta($post->ID, $key = '1_slide_description', $single = true)){ ?>
                <?php echo esc_attr(get_post_meta($post->ID, $key = '1_slide_description', $single = true));?>
                <?php }  ?>    
            </div>
        </div>
		
		<div class="screen_item container inner-container">
            <div class="screens-text">Screens</div>
            <div class="screen-image-wrapper-mobile">
                 <?php if( get_field('2_slide') ): ?><img src="<?php esc_attr(the_field('2_slide')); ?>" /><?php endif;?>
            </div>
            <div class="screens_description">
                <?php if(get_post_meta($post->ID, $key = '2_slide_description', $single = true)){ ?>
                <?php echo esc_attr(get_post_meta($post->ID, $key = '2_slide_description', $single = true));?>
                <?php }  ?>    
            </div>
         </div>

        <div class="screen_item container inner-container">
            <div class="screens-text">Screens</div>
            <div class="screen-image-wrapper-mobile">
                 <?php if( get_field('3_slide') ): ?><img src="<?php esc_attr(the_field('3_slide')); ?>" /><?php endif;?>
            </div>
            <div class="screens_description">
                <?php if(get_post_meta($post->ID, $key = '3_slide_description', $single = true)){ ?>
                <?php echo esc_attr(get_post_meta($post->ID, $key = '3_slide_description', $single = true));?>
                <?php }  ?>    
            </div>            
        </div>

        <div class="screen_item container inner-container">
            <div class="screens-text">Screens</div>
            <div class="screen-image-wrapper-mobile">
                 <?php if( get_field('4_slide') ): ?><img src="<?php esc_attr(the_field('4_slide')); ?>" /><?php endif;?>
            </div>
            <div class="screens_description">
                <?php if(get_post_meta($post->ID, $key = '4_slide_description', $single = true)){ ?>
                <?php echo esc_attr(get_post_meta($post->ID, $key = '4_slide_description', $single = true));?>
                <?php }  ?>    
             </div>           
        </div>

    </div>
</section>


<section id="feedback">
	<div class="container container_showcase">
    	<div class="learn_more">
	
    	    <div class="learnMore_title">
                <?php if(get_post_meta($post->ID, $key = 'more_title', $single = true)){ ?>
                <?php echo esc_attr(get_post_meta($post->ID, $key = 'more_title', $single = true));?>
                <?php }  ?>    
            </div>
    	    <div class="learnMore_description">
                <?php if(get_post_meta($post->ID, $key = 'more_content', $single = true)){ ?>
                <?php echo esc_attr(get_post_meta($post->ID, $key = 'more_content', $single = true));?>
                <?php }  ?>
    	    </div>
    	    <div class="blue-main-link-wrapper botton_download">
    	        <a href="<?php if( get_field('file_download') ): ?><?php esc_attr(the_field('file_download')); ?><?php endif;?>" download class="blue-main-link"><img src="<?php bloginfo('template_directory') ?>/assets/svg/pfd.svg" alt="download">Download PDF</a>
    	    </div>
    	</div>
	
		<div class="testimonials-object feedback">
			<div class="feedback_head"> CLIENT’S FEEDBACK </div>

    	    <div class="quote-icon">
    	        <img src="<?php bloginfo('template_directory') ?>/assets/svg/feedback.svg" alt="feedback">
    	    </div>

    	    <div class="testimonial-text">
                <?php if(get_post_meta($post->ID, $key = 'testimonials_content', $single = true)){ ?>
                <?php echo esc_attr(get_post_meta($post->ID, $key = 'testimonials_content', $single = true));?>
                <?php }  ?>
    	    </div>

    	    <div class="testimonial-author-wrapper">
    	       <?php if( get_field('testimonials_avatar') ): ?><img src="<?php esc_attr(the_field('testimonials_avatar')); ?>" /><?php endif;?>
    	        <span class="author-name">
                    <?php if(get_post_meta($post->ID, $key = 'testimonials_name', $single = true)){ ?>
                    <?php echo esc_attr(get_post_meta($post->ID, $key = 'testimonials_name', $single = true));?>
                    <?php }  ?> 
                </span>
    	    </div>

    	    <div class="testimonial-logo-wrapper">
    	        <?php if( get_field('testimonials_logo') ): ?><img src="<?php esc_attr(the_field('testimonials_logo')); ?>" /><?php endif;?>
    	    </div>
            
    	</div>
	</div>
</section>

<?php endwhile; ?>


<footer class="footer-wave-1 footer-wave-2 footer-wave-3">
    <div class="container inner-container">
        <div class="footer-inquiry">

            <?php esc_html(dynamic_sidebar( 'Footer nameplate' )); ?>
            
            <div class="inquiry-button">
                <a href="/apply-form" class="white-button">Send Inquiry</a>
            </div>
        </div>
    </div>


 <?php get_footer(); ?>