<?php 

/**
* Template name: Outsourcing Template
*/

get_header(); ?>


	<div id="outsourcing-head-position" class="container px-1">
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
                    <?php if( get_field('head_img') ): ?><img src="<?php the_field('head_img'); ?>" /><?php else:?>
                        <img src="<?php bloginfo('template_directory') ?>/img/group-15.svg" alt="visual-bg" id="out-group">
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>


<section id="product-dev-combined-bg" class="outsourcing-land">
    <section id="team-model">
        <div class="container inner-container">

             <?php
                wp_reset_query();
                $args = array( 'post_type'=> 'fetures', 'posts_per_page' => 3,  'orderby'=> 'rand', 'tax_query' => array(
                    array(
                        'taxonomy' => 'pages-fetures',
                        'field'    => 'slug',
                        'terms'   => array( 'outsourcing' )
                    )
                )
            );
                $posts = get_posts($args);
                foreach($posts as $post) :setup_postdata($post);?>

                <div class="section-header">
                    <?php esc_html(the_title());?>
                </div>

                <div class="section-description">
                    <?php esc_html(the_content()); ?>
                </div>

                <div class="philosophy-icon-wrapper">
                    <div class="philosophy-item">
                        <div class="philosophy-icon approach">
                            <?php if( get_field('first_icon') ): ?><img src="<?php esc_attr(the_field('first_icon')); ?>" /><?php endif; ?>
                        </div>
                        <div class="philosophy-item-text">
                            <?php if(get_post_meta($post->ID, $key = 'title_first_icon', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'title_first_icon', $single = true));?>
                            <?php }  ?> 
                        </div>
                    </div>
                    <div class="philosophy-item">
                        <div class="philosophy-icon business">
                            <?php if( get_field('second_icon') ): ?><img src="<?php esc_attr(the_field('second_icon')); ?>" /><?php endif; ?>
                        </div>
                        <div class="philosophy-item-text">
                            <?php if(get_post_meta($post->ID, $key = 'title_second_icon', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'title_second_icon', $single = true));?>
                            <?php }  ?> 
                        </div>
                    </div>
                    <div class="philosophy-item">
                        <div class="philosophy-icon analysis">
                            <?php if( get_field('third_icon') ): ?><img src="<?php esc_attr(the_field('third_icon')); ?>" /><?php endif; ?>
                        </div>
                        <div class="philosophy-item-text">
                            <?php if(get_post_meta($post->ID, $key = 'title_third_icon', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'title_third_icon', $single = true));?>
                            <?php }  ?> 
                        </div>
                    </div>
                </div>
            
            <?php endforeach; wp_reset_query(); ?>
        </div>
    </section>


    <section id="how-it-works">
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
            <div class="how-it-works-content-wrapper">
                <div class="how-it-works-item">
                    <div class="approach-step-number">
                        1
                    </div>
                    <div class="how-it-works-text-wrapper">
                        <div class="how-it-works-title">
                            <?php if(get_post_meta($post->ID, $key = '1_step_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = '1_step_title', $single = true));?>
                            <?php }  ?>
                        </div>
                        <div class="how-it-works-text">
                            <?php if(get_post_meta($post->ID, $key = '1_step', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = '1_step', $single = true));?>
                            <?php }  ?>
                        </div>
                    </div>
                </div>
                <div class="how-it-works-item">
                    <div class="approach-step-number">
                        2
                    </div>
                    <div class="how-it-works-text-wrapper">
                        <div class="how-it-works-title">
                            <?php if(get_post_meta($post->ID, $key = '2_step_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = '2_step_title', $single = true));?>
                            <?php }  ?>
                        </div>
                        <div class="how-it-works-text">
                            <?php if(get_post_meta($post->ID, $key = '2_step', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = '2_step', $single = true));?>
                            <?php }  ?>
                        </div>
                    </div>
                </div>
                <div class="how-it-works-item">
                    <div class="approach-step-number">
                        3
                    </div>
                    <div class="how-it-works-text-wrapper">
                        <div class="how-it-works-title">
                            <?php if(get_post_meta($post->ID, $key = '3_step_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = '3_step_title', $single = true));?>
                            <?php }  ?>
                        </div>
                        <div class="how-it-works-text">
                            <?php if(get_post_meta($post->ID, $key = '3_step', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = '3_step', $single = true));?>
                            <?php }  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="out-services">
        <div class="container">
            <div class="section-header">
                IT Outsource Services
            </div>
            <div class="out-services-wrapper">
                
                <?php  
                    wp_reset_query();
                    $resent_list = new WP_Query(array('post_type'=> 'outsource', 'order'=> 'ASC', 'posts_per_page'=> -1)); 

                        if ( $resent_list->have_posts() ) :
                            while ( $resent_list->have_posts() ) :
                            $resent_list->the_post();?>

            <div class="out-services-item">

                <div class="out-services-text-wrapper">

                    <div class="out-services-text-title">
                        <?php esc_html(the_title()); ?>
                    </div>

                    <div class="out-services-text-description">
                        <?php esc_html(the_content()); ?>
                    </div>

                    <div class="out-services-stack-wrapper">
                        <div class="stack-title">
                            <?php if(get_post_meta($post->ID, $key = 'sub_title', $single = true)){ ?>
                            <?php echo esc_attr(get_post_meta($post->ID, $key = 'sub_title', $single = true));?>
                            <?php }  ?>
                        </div>

                        <div class="stack-tech-wrapper">
                            <div class="stack-col">
                            
                                <?php if(get_post_meta($post->ID, $key = 'tools_col_1_title', $single = true)){ ?>
                                    <div class="stack-inner-title">
                                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'tools_col_1_title', $single = true));?>
                                    </div>
                                <?php }  ?>
                    
                                <div>
                                    <?php if(get_post_meta($post->ID, $key = 'tools_col_1', $single = true)){ ?>
                                    <?php echo get_post_meta($post->ID, $key = 'tools_col_1', $single = true);?>
                                    <?php }  ?>   
                                </div>
                            </div>

                            <div class="stack-col">
                                <?php if(get_post_meta($post->ID, $key = 'tools_col_2_title', $single = true)){ ?>
                                    <div class="stack-inner-title">
                                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'tools_col_2_title', $single = true));?>
                                    </div>
                                <?php }  ?>

                                <div>
                                    <?php if(get_post_meta($post->ID, $key = 'tools_col_2', $single = true)){ ?>
                                    <?php echo get_post_meta($post->ID, $key = 'tools_col_2', $single = true);?>
                                    <?php }  ?> 
                                </div>
                            </div>

                            <div class="stack-col">
                                <?php if(get_post_meta($post->ID, $key = 'tools_col_3_title', $single = true)){ ?>
                                    <div class="stack-inner-title">
                                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'tools_col_3_title', $single = true));?>
                                    </div>
                                <?php }  ?>
                                <div>
                                    <?php if(get_post_meta($post->ID, $key = 'tools_col_3', $single = true)){ ?>
                                    <?php echo get_post_meta($post->ID, $key = 'tools_col_3', $single = true);?>
                                    <?php }  ?>    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    <div class="out-services-img-wrapper">
                        <?php esc_html(the_post_thumbnail()); ?>
                    </div>
            </div>
       
             <?php  endwhile; endif;  wp_reset_query(); ?>
            </div>
        </div>
    </section>
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
                        'terms'   => array( 'outsorcing' )
                    )
                )
            );
                $posts = get_posts($args);
                foreach($posts as $post) :setup_postdata($post);
                ?>
                 <div class="clients-slide-wrapper"><?php esc_html(the_post_thumbnail(array(161, 105))); ?></div>
            
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
                        'terms'   => array( 'outsorcing' )
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
                                           <?php esc_html(the_post_thumbnail( array(420, 230)) ); ?>
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
                            'terms'    => array( 'outsourcing' )
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
                            <p><?php esc_html(the_content()); ?></p>
                        </div>
                        <div class="testimonial-author-wrapper">
                            <?php if( get_field('avatar') ): ?><img src="<?php esc_attr(the_field('avatar')); ?>" /><?php endif; ?>
                            <span class="author-name"><?php the_title(); ?></span>
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