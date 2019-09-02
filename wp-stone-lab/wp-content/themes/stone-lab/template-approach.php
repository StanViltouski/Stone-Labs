<?php 
/**
* Template name: Approach Template
*/

get_header();?>


	 <div class="page-title-wrapper">
        <h1 class="page-title">
            <?php if(get_post_meta($post->ID, $key = 'page_title', $single = true)){ ?>
            <?php echo esc_attr(get_post_meta($post->ID, $key = 'page_title', $single = true));?>
            <?php }  ?>    
        </h1>
        <h4 class="page-subtitle">
            <?php if(get_post_meta($post->ID, $key = 'page_text', $single = true)){ ?>
            <?php echo esc_attr(get_post_meta($post->ID, $key = 'page_text', $single = true));?>
            <?php }  ?>      
        </h4>
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
                            <?php if(get_post_meta($post->ID, $key = 'step_1_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_1_title', $single = true));?>
                            <?php }  ?>  
                    	</div>
                    	<div class="approach-main-step-content">
                            <?php if(get_post_meta($post->ID, $key = 'step_1_content', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_1_content', $single = true));?>
                            <?php }  ?>  
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
                            <?php if(get_post_meta($post->ID, $key = 'step_2_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_2_title', $single = true));?>
                            <?php }  ?> 
                    	</div>
                    	<div class="approach-main-step-content">
                            <?php if(get_post_meta($post->ID, $key = 'step_2_content', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_2_content', $single = true));?>
                            <?php }  ?> 
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
                            <?php if(get_post_meta($post->ID, $key = 'step_3_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_3_title', $single = true));?>
                            <?php }  ?> 
                    	</div>
                    	<div class="approach-main-step-content">
                            <?php if(get_post_meta($post->ID, $key = 'step_3_content', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_3_content', $single = true));?>
                            <?php }  ?>
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
                            <?php if(get_post_meta($post->ID, $key = 'step_4_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_4_title', $single = true));?>
                            <?php }  ?> 
                    	</div>
                    	<div class="approach-main-step-content">
                            <?php if(get_post_meta($post->ID, $key = 'step_4_content', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_4_content', $single = true));?>
                            <?php }  ?>
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
                            <?php if(get_post_meta($post->ID, $key = 'step_5_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_5_title', $single = true));?>
                            <?php }  ?>
                    	</div>
                    	<div class="approach-main-step-content approach-main-step-content-padding">
                            <?php if(get_post_meta($post->ID, $key = 'step_5_content', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_5_content', $single = true));?>
                            <?php }  ?>
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
                            <?php if(get_post_meta($post->ID, $key = 'step_6_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_6_title', $single = true));?>
                            <?php }  ?>
                    	</div>
                    	<div class="approach-main-step-content">
                            <?php if(get_post_meta($post->ID, $key = 'step_6_content', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_6_content', $single = true));?>
                            <?php }  ?>
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
                            <?php if(get_post_meta($post->ID, $key = 'step_7_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_7_title', $single = true));?>
                            <?php }  ?>
                    	</div>
                    	<div class="approach-main-step-content">
                            <?php if(get_post_meta($post->ID, $key = 'step_7_content', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_7_content', $single = true));?>
                            <?php }  ?>
                    	</div>
                    </div>
            	</div>
            </div>
        </div>
   </section> 


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