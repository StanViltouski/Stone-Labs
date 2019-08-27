<?php 
/**
* Template name: Product-dev Template
*/

get_header();?>

	<div id="product-index" class="container px-1">
        <div class="inner-landing-head">
            <div class="row px-lg-2">
                <div class="col-sm-12 col-md-6 title-wrapper">
                    <h1 class="title"><?php if( get_field('head_title') ): ?><?php the_field('head_title'); ?><?php endif; ?></h1>
                    <div class="sub-title">
                        <?php if( get_field('head_content') ): ?><?php the_field('head_content'); ?><?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 header-images-wrapper">
                    <?php if( get_field('head_img') ): ?><img src="<?php the_field('head_img'); ?>" /><?php else:?>
                    <img src="<?php bloginfo('template_directory') ?>/img/product-dev-land-visual-bg-circles.svg" alt="visual-bg" id="pd-bg">
                    <img src="<?php bloginfo('template_directory') ?>/img/product-dev-visual-man.svg" alt="visual-man" id="pd-man">
                    <img src="<?php bloginfo('template_directory') ?>/img/product-dev-visual-girl.svg" alt="visual-girl" id="pd-girl">
                    <img src="<?php bloginfo('template_directory') ?>/img/product-dev-visual-2-puzzles.svg" alt="visual-2-puzzles" id="pd-puzzles">
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="product-dev-combined-bg">
    <section id="pd-graphics-section">
        <div class="container">
            <div class="section-header">
                Build and Scale Your Startup
            </div>
            <div class="graphics-slider-wrapper">
                <div class="pd-text-part-slider-wrapper">
                    <div class="owl-carousel owl-theme  pd-text-slider">
                        <!--<div class=" pd-text-slider">-->


                         <?php

                             wp_reset_query();
                                $resent_list = new WP_Query(array('post_type'=> 'startup', 'order'=> 'ASC', 'posts_per_page'=> 4));
                                $i=0;
                                $data_index;   

                                    if ( $resent_list->have_posts() ) :
                                        while ( $resent_list->have_posts() ) :
                                    $resent_list->the_post();
                    
                                    $i++;
                                    ?>

                                    <div class="pd-text-slider-object" data-text-index="<?php echo($i); ?>">
                                        <div class="pd-text-slider-title">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="pd-text-slider-description">
                                            <span>
                                                <?php the_content(); ?>
                                            </span>
                                        </div>
                                    </div>
                       
                        <?php  endwhile; endif;  wp_reset_query(); ?>

                    </div>
                </div>
                <div class="pd-graph-part-slider-wrapper">
                    <div class=" pd-graph-slider">
                        <!--<div class="pd-graph-slider">-->
                        <div class="pd-graph-slider-object">
                            <div class="graph-item active" data-text-index="1">
                                <svg width="195px" height="555px" viewBox="0 0 195 555" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>startup graph unselected (1)</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Group-27" transform="translate(0.000000, -3.000000)">
                                            <g id="startup-graph-unselected-(1)">
                                                <rect id="graph-bg" fill="#EAF8FF" x="10" y="31" width="185" height="527" rx="24"></rect>
                                                <text id="Ideation" font-family="Lato-Bold, Lato" font-size="16" font-weight="bold" letter-spacing="1" fill="#232323">
                                                    <tspan x="61" y="16">IDEATIO</tspan>
                                                    <tspan x="131.664" y="16">N</tspan>
                                                </text>
                                                <path d="M192.5,521.296507 L192.5,533.270793 C155.626429,526.592221 136.219286,510.147221 117.307143,494.11865 C91.6771429,472.39365 67.4614286,451.87865 0,451.87865 L0,440.092936 C71.8457143,440.092936 98.8821429,463.004364 125.022857,485.161507 C142.976429,500.372936 160.183571,514.96365 192.5,521.296507" id="Fill-1" fill="#0497F4"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="graph-item" data-text-index="2">
                                <svg width="193px" height="555px" viewBox="0 0 193 555" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>startup graph unselected (2)</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Group-27" transform="translate(-192.000000, -3.000000)">
                                            <g id="startup-graph-unselected-(2)" transform="translate(192.000000, 0.000000)">
                                                <rect id="Rectangle-Copy-29" fill="#EAF8FF" x="6" y="31" width="185" height="527" rx="24"></rect>
                                                <text id="Angel-Round" font-family="Lato-Bold, Lato" font-size="16" font-weight="bold" letter-spacing="1" fill="#232323">
                                                    <tspan x="36" y="16">ANGEL ROUN</tspan>
                                                    <tspan x="148.176" y="16">D</tspan>
                                                </text>
                                                <path d="M193,412.64 L193,433.265 C183.296429,446.763571 173.789286,458.902857 164.407857,469.635714 C143.916429,493.081429 124.100714,509.691429 103.845,520.416429 C83.5578571,531.149286 62.1235714,536.374286 38.3242857,536.374286 C23.8907143,536.374286 11.4292857,535.250714 0.5,533.270714 L0.5,521.296429 C11.2407143,523.394286 23.655,524.588571 38.3242857,524.588571 C82.01,524.588571 117.037143,505.841429 155.427143,461.912143 C167.645,447.934286 180.114286,431.465714 193,412.64" id="Fill-3" fill="#0497F4"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="graph-item" data-text-index="3">
                                <svg width="193px" height="555px" viewBox="0 0 193 555" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>startup graph unselected (3)</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Group-27" transform="translate(-385.000000, -3.000000)">
                                            <g id="startup-graph-unselected-(3)" transform="translate(385.000000, 0.000000)">
                                                <rect id="Rectangle-Copy-30" fill="#EAF8FF" x="1" y="31" width="185" height="527" rx="24"></rect>
                                                <text id="Series-A" font-family="Lato-Bold, Lato" font-size="16" font-weight="bold" letter-spacing="1" fill="#232323">
                                                    <tspan x="57" y="16">SERIES </tspan>
                                                    <tspan x="118.08" y="16">A</tspan>
                                                </text>
                                                <path d="M192.5,115.113571 L192.5,131.212857 C156.42,165.847143 132.102143,207.937857 111.925,245.306429 C70.0228571,322.887857 33.7935714,386.279286 0,433.265 L0,412.64 C30.6742857,367.799286 63.7292857,309.585714 101.451429,239.743571 C123.569286,198.8 150.574286,152.285714 192.5,115.113571" id="Fill-5" fill="#0497F4"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="graph-item" data-text-index="4">
                                <svg width="196px" height="553px" viewBox="0 0 196 553" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>startup graph unselected (4)</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Group-27" transform="translate(-574.000000, -5.000000)">
                                            <g id="startup-graph-unselected-(4)" transform="translate(574.000000, 2.000000)">
                                                <rect id="Rectangle-Copy-20" fill="#EAF8FF" x="0" y="29" width="185" height="527" rx="24"></rect>
                                                <text id="Surging-Growth" font-family="Lato-Bold, Lato" font-size="16" font-weight="bold" letter-spacing="1" fill="#232323">
                                                    <tspan x="12" y="16">SURGING GROWT</tspan>
                                                    <tspan x="159.392" y="16">H</tspan>
                                                </text>
                                                <path d="M196.000079,45.7857143 L196.000079,57.5714286 C122.897221,57.5714286 64.0393643,77.2928571 16.0715071,117.867143 C11.7265071,121.544286 7.53865,125.331429 3.50007857,129.212857 L3.50007857,113.113571 C5.10293571,111.699286 6.72150714,110.292857 8.36365,108.902143 C58.5707929,66.4264286 119.950793,45.7857143 196.000079,45.7857143" id="Fill-7" fill="#0497F4"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="software-solutions">
        <div class="container inner-container">
                    <?php
                wp_reset_query();
                $args = array( 'post_type'=> 'fetures', 'posts_per_page' => 3,  'orderby'=> 'rand', 'tax_query' => array(
                    array(
                        'taxonomy' => 'pages-fetures',
                        'field'    => 'slug',
                        'terms'   => array( 'product-dev' )
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


    <section id="it-services">
        <div class="container">
            <div class="section-header">
                IT Services
            </div>
            <div class="section-description">
                We use best practices in Data-Driven Approach to set maximum efficiency of every business process.
                We don't sell code or development hours,  we share our expertise.
            </div>
            <div class="grid-services-wrapper">
                <?php
                wp_reset_query();
                $args = array( 'post_type'=> 'solutions', 'posts_per_page' => 8,  'orderby'=> 'rand', 'tax_query' => array(
                    array(
                        'taxonomy' => 'pages-solutions',
                        'field'    => 'slug',
                        'terms'   => array( 'product-dev' )
                    )
                )
            );
                $posts = get_posts($args);
                foreach($posts as $post) :setup_postdata($post);?>

                <div class="grid-services-item">
                    <div class="grid-service-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="grid-service-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            
            <?php endforeach; wp_reset_query(); ?>
            </div>
        </div>
    </section>
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
                        'terms'   => array( 'product-dev' )
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
                        'terms'   => array( 'product' )
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
                                'terms'   => array( 'product' )
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
                <a href="/apply-form.html" class="white-button">Send Inquiry</a>
            </div>
        </div>
    </div>


 <?php get_footer(); ?>