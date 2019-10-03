<?php 
/**
* Template name: Sport-dev Template
*/

get_header();?>

	<div id="seal-index" class="container px-1">
        <div class="inner-landing-head">
            <div class="row px-lg-2">
                <div class="col-sm-12 col-md-6 title-wrapper">
                    <h1 class="title">
                        <?php if(get_post_meta($post->ID, $key = 'head_title', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'head_title', $single = true));?>
                        <?php }  ?> 
                    </h1>
                    <div class="sub-title">
                        <?php if(get_post_meta($post->ID, $key = 'head_content', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'head_content', $single = true));?>
                        <?php }  ?> 
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 header-images-wrapper">
                     <?php if( get_field('head_img') ): ?><img src="<?php esc_attr(the_field('head_img')); ?>" /><?php else:?>
                        <img src="<?php bloginfo('template_directory') ?>/img/sport-land-visual-bg-circles.svg" alt="visual-bg" id="sl-bg">
                        <img src="<?php bloginfo('template_directory') ?>/img/sport-land-visual-girl-left.svg" alt="visual-girl" id="sl-girl-left">
                        <img src="<?php bloginfo('template_directory') ?>/img/sport-land-visual-man-center.svg" alt="visual-man-center" id="sl-man-center">
                        <img src="<?php bloginfo('template_directory') ?>/img/sport-land-visual-man-right.svg" alt="visual-man" id="sl-man-right">
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="product-dev-combined-bg" class="sport-land">
    <section id="clients">
        <div class="container">
            <div class="section-head">
                CLIENTS
            </div>
            <div class="section-header">
                Proud To Work With
            </div>
            <div class="owl-carousel owl-theme clients-slider">
	
		<?php
			wp_reset_query();
    			$args = array( 'post_type'=> 'clients', 'posts_per_page' => 3,  'orderby'=> 'rand', 'tax_query' => array(
    				array(
    		        	'taxonomy' => 'type clients',
    		        	'field'    => 'slug',
    		        	'terms'    => array( 'sport' )
    		    	)
    			)
    		);
    		    $posts = get_posts($args);
    		    foreach($posts as $post) :setup_postdata($post);
    		    ?>
    		     <div class="clients-slide-wrapper"><?php esc_html(the_post_thumbnail()); ?></div>
    		
    		<?php endforeach; wp_reset_query(); ?>
        </div>
        </div>
    </section>

    
    <section id="sport-approach">
        <div class="container">
            <div class="section-header">
                <?php if(get_post_meta($post->ID, $key = 'step_title', $single = true)){ ?>
                <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_title', $single = true));?>
                <?php }  ?> 

            </div>
            <div class="section-description">
                <?php if(get_post_meta($post->ID, $key = 'step_content', $single = true)){ ?>
                <?php echo esc_attr(get_post_meta($post->ID, $key = 'step_content', $single = true));?>
                <?php }  ?> 
            </div>
            <div class="approach-content-wrapper">
                <div class="approach-step-item">
                    <div class="approach-step-number">
                        1
                    </div>
                    <div class="approach-step-text">
                        <?php if(get_post_meta($post->ID, $key = '1_step', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = '1_step', $single = true));?>
                        <?php }  ?>
                    </div>
                    <div class="approach-step-icon">
                        <img src="<?php bloginfo('template_directory') ?>/img/3-steps-step-1-icon.svg" alt="">
                    </div>
                </div>
                <div class="approach-step-item">
                    <div class="approach-step-number">
                        2
                    </div>
                    <div class="approach-step-text">
                        <?php if(get_post_meta($post->ID, $key = '2_step', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = '2_step', $single = true));?>
                        <?php }  ?>
                    </div>
                    <div class="approach-step-icon">
                        <img src="<?php bloginfo('template_directory') ?>/img/3-steps-step-2-icon.svg" alt="">
                    </div>
                </div>
                <div class="approach-step-item">
                    <div class="approach-step-number">
                        3
                    </div>
                    <div class="approach-step-text">
                        <?php if(get_post_meta($post->ID, $key = '3_step', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = '3_step', $single = true));?>
                        <?php }  ?>
                    </div>
                    
                    <div class="approach-step-icon">
                        <img src="<?php bloginfo('template_directory') ?>/img/3-steps-step-3-icon.svg" alt="">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</section>


<section id="sl-solutions" class="middle-wave-1 middle-wave-2 middle-wave-3">
    <div class="container">
        <div class="section-head text-white">
            Categories
        </div>
        <div class="section-header text-white">
            We Create Solutions For
        </div>
        <div class="sl-solutions-content-wrapper">

        	<?php  
                wp_reset_query();
                    $resent_list = new WP_Query(array('post_type'=> 'solutions_cat', 'order'=> 'ASC', 'posts_per_page'=> 8)); 
                        if ( $resent_list->have_posts() ) :
                            while ( $resent_list->have_posts() ) :
                        $resent_list->the_post();?>

                        <div class="sl-solutions-item">
                			<div class="sl-solutions-item-img">
                    			<?php esc_html(the_post_thumbnail()); ?>
                			</div>

               				<div class="sl-solutions-item-title">
                   				<?php esc_html(the_title()); ?>
               				</div>
            			</div>
                           
            <?php  endwhile; endif;  wp_reset_query(); ?>

        </div>
    </div>
</section>


<section id="it-services" class="it-solutions">
    <div class="container">
        <div class="section-header">
             What do we do
        </div>
        <!--
        <div class="section-description">
            We use best practices in Data-Driven Approach to set maximum efficiency of every business process.
            We don't sell code or development hours,  we share our expertise.
        </div>
        -->
        <div class="grid-services-wrapper">

			<?php
				wp_reset_query();
    			$args = array( 'post_type'=> 'solutions', 'posts_per_page' => 8,  'orderby'=> 'rand', 'tax_query' => array(
    				array(
    		        	'taxonomy' => 'pages-solutions',
    		        	'field'    => 'slug',
    		        	'terms'    => array( 'sport-dev' )
    		    	)
    			)
    		);
    		    $posts = get_posts($args);
    		    foreach($posts as $post) :setup_postdata($post);?>

    		    <div class="grid-services-item">
                	<div class="grid-service-title">
                    	<?php esc_html(the_title()); ?>
                	</div>
                	<div class="grid-service-image">
                    	<?php esc_html(the_post_thumbnail()); ?>
                	</div>
            	</div>
    		
    		<?php endforeach; wp_reset_query(); ?>

        </div>
    </div>
</section>


<section id="showcases" class="middle-wave-1 middle-wave-2 middle-wave-3">
    <div class="container">
        <div class="section-header text-white">
            Showcases
        </div>
        <!--
        <div class="section-description text-white">
            We use best practices in Data-Driven Approach to set maximum efficiency of every business process.<br>
            We don't sell code or development hours, we share our expertise, experience and specific IT domain
            knowledge.<br>
            We are Digital Problem Solvers.
        </div>
        -->
        <div class="showcases-wrapper owl-carousel owl-theme owl-height">
           
            
           <?php
            wp_reset_query();
                $args = array( 'post_type'=> 'showcases', 'posts_per_page' => 3,  'orderby'=> 'rand', 'tax_query' => array(
                    array(
                        'taxonomy' => 'pages-showcases',
                        'field'    => 'slug',
                        'terms'    => array( 'sport-dev' )
                    )
                )
            );
                $posts = get_posts($args);
                foreach($posts as $post) :setup_postdata($post);?>

                        <div class="showcase-item">
                            <div class="showcase-item-scene">
                                <div class="showcase-item-object">

                                    <div class="card-face card-face-front">
                                        <div class="showcase-item-text">
                                            <div class="showcase-item-category">
                                                <?php if(get_post_meta($post->ID, $key = 'sub_title', $single = true)){ ?>
                                                <?php echo esc_attr(get_post_meta($post->ID, $key = 'sub_title', $single = true));?>
                                                <?php }  ?>
                                            </div>
                                            <div class="showcase-item-title">
                                                <?php esc_html(the_title()); ?>
                                            </div>
                                            <div class="showcase-item-description">
                                               <?php esc_html(the_excerpt()); ?>
                                            </div>
                                        </div>
                                        <div class="showcase-item-image">
                                           <?php esc_html(the_post_thumbnail(array(420, 230))); ?>
                                        </div>
                                    </div>


                                    <div class="card-face card-face-back">
                                        <div class="showcase-item-category">
                                            <?php if(get_post_meta($post->ID, $key = 'sub_title', $single = true)){ ?>
                                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'sub_title', $single = true));?>
                                            <?php }  ?>
                                        </div>
                                        <div class="showcase-item-title">
                                            <?php esc_html(the_title()); ?>
                                        </div>
                                        <div class="showcase-item-description">
                                            <?php esc_html(the_content()); ?>
                                        </div>
                                        <div class="showcase-info">
                                            <div class="duration">
                                                <div class="title">
                                                    Duration
                                                </div>
                                                <div class="value">
                                                    <?php if(get_post_meta($post->ID, $key = 'duration', $single = true)){ ?>
                                                    <?php echo esc_attr(get_post_meta($post->ID, $key = 'duration', $single = true));?>
                                                    <?php }  ?>
                                                </div>
                                            </div>
                                            <div class="team">
                                                <div class="title">
                                                    Team
                                                </div>
                                                <div class="value">
                                                    <?php if(get_post_meta($post->ID, $key = 'team', $single = true)){ ?>
                                                    <?php echo esc_attr(get_post_meta($post->ID, $key = 'team', $single = true));?>
                                                    <?php }  ?>
                                                </div>
                                            </div>
                                            <div class="technology">
                                                <div class="title">
                                                    technology
                                                </div>
                                                <div class="value">
                                                    <?php if(get_post_meta($post->ID, $key = 'technology', $single = true)){ ?>
                                                    <?php echo esc_attr(get_post_meta($post->ID, $key = 'technology', $single = true));?>
                                                    <?php }  ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="showcase-button-wrapper">
                                            <a href="<?php esc_html(the_permalink()); ?>" class="showcase-link">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <?php endforeach; wp_reset_query(); ?>
        </div>
        <div class="blue-main-link-wrapper">
            <a href="/showcases" class="blue-main-link">
                View More
            </a>
        </div>
    </div>
</section>


<section id="testimonials">
    <div class="container">
        <div class="section-head">
            Testimonials
        </div>
        <div class="section-header">
            Words From Our Clients
        </div>
        <!--
        <div class="section-description">
            We use best practices in Data-Driven Approach to set maximum efficiency of every business process.<br>
            We don't sell code or development hours, we share our expertise.
        </div>
        -->

    </div>
    <div class="testimonials-3d-carousel">
        <ul>
                <?php
                    wp_reset_query();
                    $args = array( 'post_type'=> 'testimonials', 'posts_per_page' => -1,  'orderby'=> 'rand', 'tax_query' => array(
                            array(
                                'taxonomy' => 'pages',
                                'field'    => 'slug',
                                'terms'   => array( 'sport' )
                            )
                            )       
                    );
                    $posts = get_posts($args);
            foreach($posts as $post) :setup_postdata($post);
            ?>

            <li>
                <div class="testimonials-item-wrapper">
                    <div class="testimonials-object">
                        <div class="quote-icon">
                            <img src="<?php bloginfo('template_directory') ?>/assets/svg/testimonials-quote-icon-red.svg" alt=" quote-icon">
                        </div>
                        <div class="testimonial-text">
                            <p><?php esc_html(the_content()); ?></p>
                        </div>
                        <div class="testimonial-author-wrapper">
                            <?php if( get_field('avatar') ): ?><img src="<?php esc_attr(the_field('avatar')); ?>" /><?php endif; ?>
                            <span class="author-name"><?php the_title(); ?> </span>
                        </div>
                        <div class="testimonial-logo-wrapper">
                            <?php if( get_field('logo') ): ?><img src="<?php esc_attr(the_field('logo')); ?>" /><?php endif; ?>
                         </div>
                    </div>
                </div>
            </li>
    
            <?php endforeach; wp_reset_query(); ?>
           
        </ul>
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