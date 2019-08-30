<?php 
/**
* Template name: Approach Template
*/

get_header();?>


	 <div class="page-title-wrapper">
        <h1 class="page-title"><?php if( get_field('page_title') ): ?><?php the_field('page_title'); ?><?php endif; ?></h1>
        <h4 class="page-subtitle"><?php if( get_field('page_text') ): ?><?php the_field('page_text'); ?><?php endif; ?></h4>
    </div>
</section>


<section id="approach">
        <div class="container approach-container">
            <div class="approach-main-content-wrapper">

                <div class="approach-main-step-item">

                    <div class="approach-step-icon approach_img_step-pos">
                        <img src="<?php bloginfo('template_directory') ?>/assets/svg/approach icon 1.svg" alt="icon 1">
                    </div>

                    <div class="approach-main-step-text">
                    	<div class="approach-step-sub_title">
							STEP 1
                    	</div>

                    	<div class="approach-main-step-title">
                    		<?php if( get_field('step_1_title') ): ?><?php the_field('step_1_title'); ?><?php endif; ?>
                    	</div>
                    	<div class="approach-main-step-content">
                    		<?php if( get_field('step_1_content') ): ?><?php the_field('step_1_content'); ?><?php endif; ?>
                    	</div>
                    </div>
            	</div>

                <div class="approach-main-step-item">

                    <div class="approach-step-icon approach_img_step-pos">
                        <img src="<?php bloginfo('template_directory') ?>/assets/svg/approach icon 2.svg" alt="icon 1">
                    </div>

                    <div class="approach-main-step-text">
                    	<div class="approach-step-sub_title">
							STEP 2
                    	</div>

                    	<div class="approach-main-step-title">
                    		<?php if( get_field('step_2_title') ): ?><?php the_field('step_2_title'); ?><?php endif; ?>
                    	</div>
                    	<div class="approach-main-step-content">
                    		<?php if( get_field('step_2_content') ): ?><?php the_field('step_2_content'); ?><?php endif; ?>
                    	</div>
                    </div>
            	</div>

                <div class="approach-main-step-item">

                    <div class="approach-step-icon approach_img_step-pos">
                        <img src="<?php bloginfo('template_directory') ?>/assets/svg/approach icon 3.svg" alt="icon 1">
                    </div>

                    <div class="approach-main-step-text">
                    	<div class="approach-step-sub_title">
							STEP 3
                    	</div>

                    	<div class="approach-main-step-title">
                    		<?php if( get_field('step_3_title') ): ?><?php the_field('step_3_title'); ?><?php endif; ?>
                    	</div>
                    	<div class="approach-main-step-content">
                    		<?php if( get_field('step_3_content') ): ?><?php the_field('step_3_content'); ?><?php endif; ?>
                    	</div>
                    </div>
            	</div>

                <div class="approach-main-step-item">
                    <div class="approach-step-icon approach_img_step-pos">
                        <img src="<?php bloginfo('template_directory') ?>/assets/svg/approach icon 4.svg" alt="icon 1">
                    </div>

                    <div class="approach-main-step-text approach-main-step-text-short">
                    	<div class="approach-step-sub_title">
							STEP 4
                    	</div>

                    	<div class="approach-main-step-title">
                    		<?php if( get_field('step_4_title') ): ?><?php the_field('step_4_title'); ?><?php endif; ?>
                    	</div>
                    	<div class="approach-main-step-content">
                    		<?php if( get_field('step_4_content') ): ?><?php the_field('step_4_content'); ?><?php endif; ?>
                    	</div>
                    </div>
            	</div>

            	<div class="approach-main-step-item">
                    <div class="approach-step-icon approach_img_step-pos">
                        <img src="<?php bloginfo('template_directory') ?>/assets/svg/approach icon 5.svg" alt="icon 1">
                    </div>

                    <div class="approach-main-step-text approach-main-step-text-short">
                    	<div class="approach-step-sub_title">
							STEP 5
                    	</div>

                    	<div class="approach-main-step-title">
                    		<?php if( get_field('step_5_title') ): ?><?php the_field('step_5_title'); ?><?php endif; ?>
                    	</div>
                    	<div class="approach-main-step-content approach-main-step-content-padding">
                    		<?php if( get_field('step_5_content') ): ?><?php the_field('step_5_content'); ?><?php endif; ?>
                    	</div>
                    </div>
            	</div>

            	<div class="approach-main-step-item">
                    <div class="approach-step-icon approach_img_step-pos">
                        <img src="<?php bloginfo('template_directory') ?>/assets/svg/approach icon 6.svg" alt="icon 1">
                    </div>

                    <div class="approach-main-step-text approach-main-step-text-short">
                    	<div class="approach-step-sub_title">
							STEP 6
                    	</div>

                    	<div class="approach-main-step-title">
                    		<?php if( get_field('step_6_title') ): ?><?php the_field('step_6_title'); ?><?php endif; ?>
                    	</div>
                    	<div class="approach-main-step-content">
                    		<?php if( get_field('step_6_content') ): ?><?php the_field('step_6_content'); ?><?php endif; ?>
                    	</div>
                    </div>
            	</div>

                <div class="approach-main-step-item">
                    <div class="approach-step-icon approach_img_step-pos">
                        <img src="<?php bloginfo('template_directory') ?>/assets/svg/approach icon 7.svg" alt="icon 1">
                    </div>

                    <div class="approach-main-step-text">
                    	<div class="approach-step-sub_title">
							STEP 7
                    	</div>

                    	<div class="approach-main-step-title">
                    		<?php if( get_field('step_7_title') ): ?><?php the_field('step_7_title'); ?><?php endif; ?>
                    	</div>
                    	<div class="approach-main-step-content">
                    		<?php if( get_field('step_7_content') ): ?><?php the_field('step_7_content'); ?><?php endif; ?>
                    	</div>
                    </div>
            	</div>
            </div>
        </div>
   </section> 


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