
<?php 
/**
* Template name: Home Template
*/

get_header();?>
    <div id="top-slider-wrapper" class="container px-1" style="opacity: 0;">
        <div class="top-slide-scene">
            <div class="top-slide-object active" id="product-dev" data-index="1">
                <div class="row px-lg-2">
                    <div class="col-sm-12 col-md-6 title-wrapper">
                        <?php  
                            wp_reset_query();
            
                                $resent_list = new WP_Query(array('post_type'=> 'cards', 'order'=> 'ASC', 'posts_per_page'=> 1)); 
                                if ( $resent_list->have_posts() ) :
                                    while ( $resent_list->have_posts() ) :
                                    $resent_list->the_post();?>
                                    
                                    <h1 class="title"><?php echo esc_attr(get_post_meta($post->ID, $key = 'title_first_slider', $single = true)); ?></h1>
                            
                                <div class="sub-title">
                                    <?php the_excerpt(); ?>
                                </div>
                       
                                <a href="<?php the_permalink(); ?>" class="btn title-button">learn more</a>
                         <?php  endwhile; endif;  wp_reset_query(); ?>
                    </div>
                            <div class="col-sm-12 col-md-6 p-0 animated-col-wrapper">
                                <img src="<?php bloginfo('template_directory') ?>/img/product-dev-bg.svg" alt="bg" id="product-dev-bg">
                                <img src="<?php bloginfo('template_directory') ?>/img/product-dev-brainstorm.svg" alt="brainstorm" id="product-dev-brainstorm">
                                <img src="<?php bloginfo('template_directory') ?>/img/product-dev-people.svg" alt="people" id="product-dev-people">
                            </div>
                     
                        </div>
                    </div>
                </div>
        <div class="top-slide-scene">
            <div class="top-slide-object" id="sport-dev" data-index="2">
                <div class="row px-lg-2">
                    <div class="col-sm-12 col-md-6 title-wrapper">
                        <?php  
                            wp_reset_query();
            
                                $resent_list = new WP_Query(array('post_type'=> 'cards', 'order'=> 'ASC', 'offset'=> 1, 'posts_per_page'=> 1)); 
                                if ( $resent_list->have_posts() ) :
                                    while ( $resent_list->have_posts() ) :
                                    $resent_list->the_post();?>
                                    
                                    <h1 class="title"><?php echo esc_attr(get_post_meta($post->ID, $key = 'title_first_slider', $single = true)); ?></h1>
                            
                                <div class="sub-title">
                                    <?php the_excerpt(); ?>
                                </div>
                       
                                <a href="<?php the_permalink(); ?>" class="btn title-button">learn more</a>
                         <?php  endwhile; endif;  wp_reset_query(); ?>
                    </div>
                    <div class="col-sm-12 col-md-6 p-0 animated-col-wrapper">
                        <img src="<?php bloginfo('template_directory') ?>/img/sport-running-man.svg" alt="sport-man" id="sport-running-man">
                        <img src="<?php bloginfo('template_directory') ?>/img/sport-man1.svg" alt="sport-man" id="sport-man">
                        <img src="<?php bloginfo('template_directory') ?>/img/sport-phone.svg" alt="sport-phone" id="sport-phone">
                    </div>
                </div>
            </div>
        </div>
        <div class="top-slide-scene">
            <div class="top-slide-object" id="outsourcing" data-index="3">
                <div class="row px-lg-2">
                    <div class="col-sm-12 col-md-6 title-wrapper">
                        <?php  
                            wp_reset_query();
            
                                $resent_list = new WP_Query(array('post_type'=> 'cards', 'order'=> 'ASC', 'offset'=> 2, 'posts_per_page'=> 1)); 
                                if ( $resent_list->have_posts() ) :
                                    while ( $resent_list->have_posts() ) :
                                    $resent_list->the_post();?>
                                    
                                    <h1 class="title"><?php echo esc_attr(get_post_meta($post->ID, $key = 'title_first_slider', $single = true)); ?></h1>
                            
                                <div class="sub-title">
                                    <?php the_excerpt(); ?>
                                </div>
                       
                                <a href="<?php the_permalink(); ?>" class="btn title-button">learn more</a>
                         <?php  endwhile; endif;  wp_reset_query(); ?>
                    </div>
                    <div class="col-sm-12 col-md-6 p-0 animated-col-wrapper">
                        <img src="<?php bloginfo('template_directory') ?>/img/outsourcing-computer.svg" alt="computer" id="outsourcing-computer">
                        <img src="<?php bloginfo('template_directory') ?>/img/outsourcing-woman.svg" alt="woman" id="outsourcing-woman">
                        <img src="<?php bloginfo('template_directory') ?>/img/outsourcing-man.svg" alt="man" id="outsourcing-man">
                    </div>
                </div>
            </div>
        </div>
    </div>             

    <div class="container" id="title-cards">
        <div class="row">
            <div class='section-head'>directions</div>
            <div class="col-12 title-cards-wrapper">

                 <?php

                    wp_reset_query();
                        $resent_list = new WP_Query(array('post_type'=> 'cards', 'order'=> 'ASC', 'posts_per_page'=> 3));
                        $i=0;
                        $data_index;   

                            if ( $resent_list->have_posts() ) :
                                while ( $resent_list->have_posts() ) :
                            $resent_list->the_post();
                           
                            $i++;

                            if($i == 1) { $data_id = 'product-dev'; } 
                            else if ($i == 2) { $data_id = 'sport-dev'; } 
                            else if ($i == 3) { $data_id = 'outsourcing'; }
                            ?>
                        <div class="title-card-item" data-id="<?php echo($data_id); ?>" data-index="<?php echo ($i); ?>">
                    <div class="col-md-8 col-6 title-card-item-text">
                        <span><?php the_title(); ?></span>
                        <a href="#">Learn More</a>
                    </div>
                    <div class="col-md-4 col-6 title-card-item-image"></div>
                </div>

                 <?php  endwhile; endif;  wp_reset_query(); ?>
            
        </div>
    </div>
</section>


<section id="about-us" style="opacity: 0;">
    <div class="owl-carousel owl-theme  about-us-slider">
        <div class="about-us-slide container inner-container" data-index="1">
            <div class="about-us-image">
                <img src="<?php bloginfo('template_directory') ?>/img/about-us-slider-sport.svg" alt="about-us-slider-item">
            </div>

                <?php  
                    wp_reset_query();
                        $resent_list = new WP_Query(array('post_type'=> 'cards', 'order'=> 'ASC', 'posts_per_page'=> 1)); 
                            if ( $resent_list->have_posts() ) :
                                while ( $resent_list->have_posts() ) :
                            $resent_list->the_post();?>
                            <div class="about-us-text">
                                <div class="about-us-head">
                                    <?php the_title(); ?>
                                </div>

                                <h3 class="about-us-header">
                                    <?php echo esc_attr(get_post_meta($post->ID, $key = 'title_second_slider', $single = true)); ?>
                                </h3>

                                <div class="about-us-description">
                                    <?php the_content(); ?>
                                </div>
                            </div>
             <?php  endwhile; endif;  wp_reset_query(); ?>
            
        </div>
        <div class="about-us-slide container inner-container" data-index="2">
            <div class="about-us-image">
                <img src="<?php bloginfo('template_directory') ?>/img/about-us-slider-sport.svg" alt="about-us-slider-item">
            </div>

            <?php  
                wp_reset_query();
                    $resent_list = new WP_Query(array('post_type'=> 'cards', 'order'=> 'ASC', 'offset'=> 1, 'posts_per_page'=> 1)); 
                        if ( $resent_list->have_posts() ) :
                            while ( $resent_list->have_posts() ) :
                        $resent_list->the_post();?>
                        <div class="about-us-text">
                            <div class="about-us-head">
                                <?php the_title(); ?>
                            </div>
                            <h3 class="about-us-header">
                                <?php echo esc_attr(get_post_meta($post->ID, $key = 'title_second_slider', $single = true)); ?>
                            </h3>
                            <div class="about-us-description">
                                <?php the_content(); ?>
                            </div>
                        </div>
             <?php  endwhile; endif;  wp_reset_query(); ?>
        </div>
        <div class="about-us-slide container inner-container" data-index="3">
            <div class="about-us-image">
                <img src="<?php bloginfo('template_directory') ?>/img/about-us-slider-sport.svg" alt="about-us-slider-item">
            </div>
            <?php  
                wp_reset_query();
                    $resent_list = new WP_Query(array('post_type'=> 'cards', 'order'=> 'ASC', 'offset'=> 2, 'posts_per_page'=> 1)); 
                        if ( $resent_list->have_posts() ) :
                            while ( $resent_list->have_posts() ) :
                        $resent_list->the_post();?>
                        <div class="about-us-text">
                            <div class="about-us-head">
                                <?php the_title(); ?>
                            </div>
                            <h3 class="about-us-header">
                                <?php echo esc_attr(get_post_meta($post->ID, $key = 'title_second_slider', $single = true)); ?>
                            </h3>
                            <div class="about-us-description">
                                <?php the_content(); ?>
                            </div>
                        </div>
             <?php  endwhile; endif;  wp_reset_query(); ?>
        </div>
    </div>
</section>


<section id="philosophy">
    <div class="container inner-container">
        <div class="section-head">
            PHILOSOPHY
        </div>

        <?php
                wp_reset_query();
                $args = array( 'post_type'=> 'fetures', 'posts_per_page' => 3,  'orderby'=> 'rand', 'tax_query' => array(
                    array(
                        'taxonomy' => 'pages-fetures',
                        'field'    => 'slug',
                        'terms'   => array( 'main' )
                    )
                )
            );
                $posts = get_posts($args);
                foreach($posts as $post) :setup_postdata($post);?>

                <div class="section-header">
                    <?php the_title();?>
                </div>

                <div class="section-description">
                    <?php the_content(); ?>
                </div>

                <div class="philosophy-icon-wrapper">
                    <div class="philosophy-item">
                        <div class="philosophy-icon approach">
                            <?php if( get_field('first_icon') ): ?><img src="<?php the_field('first_icon'); ?>" /><?php endif; ?>
                        </div>
                        <div class="philosophy-item-text">
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'title_first_icon', $single = true)); ?>
                        </div>
                    </div>
                    <div class="philosophy-item">
                        <div class="philosophy-icon business">
                            <?php if( get_field('second_icon') ): ?><img src="<?php the_field('second_icon'); ?>" /><?php endif; ?>
                        </div>
                        <div class="philosophy-item-text">
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'title_second_icon', $single = true)); ?>
                        </div>
                    </div>
                    <div class="philosophy-item">
                        <div class="philosophy-icon analysis">
                            <?php if( get_field('third_icon') ): ?><img src="<?php the_field('third_icon'); ?>" /><?php endif; ?>
                        </div>
                        <div class="philosophy-item-text">
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'title_third_icon', $single = true)); ?>
                        </div>
                    </div>
                </div>
            
            <?php endforeach; wp_reset_query(); ?>

        </div>
</section>
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
    			$args = array( 'post_type'=> 'clients', 'posts_per_page' => -1,  'orderby'=> 'rand', 'tax_query' => array(
    				array(
    		        	'taxonomy' => 'type clients',
    		        	'field'    => 'slug',
    		        	'terms'   => array( 'all' )
    		    	)
    			)
    		);
    		    $posts = get_posts($args);
    		    foreach($posts as $post) :setup_postdata($post);
    		    ?>
    		     <div class="clients-slide-wrapper"><?php the_post_thumbnail(); ?></div>
    		
    		<?php endforeach; wp_reset_query(); ?>
        </div>
    </div>
</section>
<section id="showcases" class="middle-wave-1 middle-wave-2 middle-wave-3">
    <div class="container">
        <div class="section-header text-white">
            Showcases
        </div>
        <div class="section-description text-white">
            We use best practices in Data-Driven Approach to set maximum efficiency of every business process.<br>
            We don't sell code or development hours, we share our expertise, experience and specific IT domain
            knowledge.<br>
            We are Digital Problem Solvers.
        </div>
        <div class="showcases-wrapper owl-carousel owl-theme owl-height">

            <?php
            wp_reset_query();
                $args = array( 'post_type'=> 'showcases', 'posts_per_page' => 3,  'orderby'=> 'rand', 'tax_query' => array(
                    array(
                        'taxonomy' => 'pages-showcases',
                        'field'    => 'slug',
                        'terms'   => array( 'main' )
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
                                                <?php echo esc_attr(get_post_meta($post->ID, $key = 'sub_title', $single = true)); ?>
                                            </div>
                                            <div class="showcase-item-title">
                                                <?php the_title(); ?>
                                            </div>
                                            <div class="showcase-item-description">
                                               <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                        <div class="showcase-item-image">
                                           <?php the_post_thumbnail( array(420, 230) ); ?>
                                        </div>
                                    </div>


                                    <div class="card-face card-face-back">
                                        <div class="showcase-item-category">
                                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'sub_title', $single = true)); ?>
                                        </div>
                                        <div class="showcase-item-title">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="showcase-item-description">
                                            <?php the_content(); ?>
                                        </div>
                                        <div class="showcase-info">
                                            <div class="duration">
                                                <div class="title">
                                                    Duration
                                                </div>
                                                <div class="value">
                                                    <?php echo esc_attr(get_post_meta($post->ID, $key = 'duration', $single = true)); ?>
                                                </div>
                                            </div>
                                            <div class="team">
                                                <div class="title">
                                                    Team
                                                </div>
                                                <div class="value">
                                                    <?php echo esc_attr(get_post_meta($post->ID, $key = 'team', $single = true)); ?>
                                                </div>
                                            </div>
                                            <div class="technology">
                                                <div class="title">
                                                    technology
                                                </div>
                                                <div class="value">
                                                    <?php echo esc_attr(get_post_meta($post->ID, $key = 'technology', $single = true)); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="showcase-button-wrapper">
                                            <a href="<?php the_permalink(); ?>" class="showcase-link">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <?php endforeach; wp_reset_query(); ?>
            </div>
        <div class="blue-main-link-wrapper">
            <a href="http://wp-stone-lab/showcases/" class="blue-main-link">
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
        <div class="section-description">
            We use best practices in Data-Driven Approach to set maximum efficiency of every business process.<br>
            We don't sell code or development hours, we share our expertise.
        </div>

    </div>
    <div class="testimonials-3d-carousel">
        <ul>
                <?php
                    wp_reset_query();
                    $args = array( 'post_type'=> 'testimonials', 'posts_per_page' => 3,  'orderby'=> 'rand', 'tax_query' => array(
                            array(
                                'taxonomy' => 'pages',
                                'field'    => 'slug',
                                'terms'   => array( 'main' )
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
                        <img src="<?php bloginfo('template_directory') ?>/assets/svg/testimonials-quote-icon-red.svg" alt="quote-icon">
                    </div>
            <div class="testimonial-text">
                <p><?php the_content(); ?></p>
            </div>
            <div class="testimonial-author-wrapper">
                <?php if( get_field('avatar') ): ?><img src="<?php the_field('avatar'); ?>" /><?php endif; ?>
                <span class="author-name"><?php the_title(); ?> </span>
             </div>
            <div class="testimonial-logo-wrapper">
                <?php if( get_field('logo') ): ?><img src="<?php the_field('logo'); ?>" /><?php endif; ?>
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
  
            <?php dynamic_sidebar( 'Footer nameplate' ); ?>

            <div class="inquiry-button">
                <a href="/apply-form" class="white-button">Send Inquiry</a>
            </div>
        </div>
    </div>
        

 <?php get_footer(); ?>