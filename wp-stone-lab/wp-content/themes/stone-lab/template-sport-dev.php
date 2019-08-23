<?php 
/**
* Template name: Sport-dev
*/

get_header();?>

<?php while ( have_posts() ) : the_post(); ?>

	      <?php get_template_part( 'content', 'page' ); ?>

	      <?php comments_template( '', true ); ?>

	    <?php endwhile; // end of the loop. ?>



	<div id="seal-index" class="container px-1">
        <div class="inner-landing-head">
            <div class="row px-lg-2">
                <div class="col-sm-12 col-md-6 title-wrapper">
                    <h1 class="title">Seal Your Lead</h1>
                    <div class="sub-title">
                        <p>
                            Being an IT Consultancy and Custom Solution Development company we are fond of sports.
                        </p>
                        <p>
                            We do sport in natural environment for ourselves, and in virtual one for the rest of sports
                            world.
                        </p>
                        <p>
                            Our involvement in natural sports environment helps us keep good shape and gain insight into
                            how it works in practice.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 header-images-wrapper">
                    <img src="<?php bloginfo('template_directory') ?>/img/sport-land-visual-bg-circles.svg" alt="visual-bg" id="sl-bg">
                    <img src="<?php bloginfo('template_directory') ?>/img/sport-land-visual-girl-left.svg" alt="visual-girl" id="sl-girl-left">
                    <img src="<?php bloginfo('template_directory') ?>/img/sport-land-visual-man-center.svg" alt="visual-man-center" id="sl-man-center">
                    <img src="<?php bloginfo('template_directory') ?>/img/sport-land-visual-man-right.svg" alt="visual-man" id="sl-man-right">
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
    			$args = array( 'post_type'=> 'clients', 'posts_per_page' => -1,  'orderby'=> 'rand', 'tax_query' => array(
    				array(
    		        	'taxonomy' => 'type clients',
    		        	'field'    => 'slug',
    		        	'terms'   => array( 'sport' )
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
    <section id="sport-approach">
        <div class="container">
            <div class="section-header">
                3 Steps Of Applying Data-Driven Approach
            </div>
            <div class="section-description">
                Over the years the coaches, athletes and teams have been hard working and trying to take into
                consideration the conditional characteristics of athletes and all other aspects related to the
                training process and performance. But the volume of the information to consider has been growing from
                day to day. To help them we devise tailor-made software for sports data analysis in partnership with
                region`s sport research institutions and federations.
            </div>
            <div class="approach-content-wrapper">
                <div class="approach-step-item">
                    <div class="approach-step-number">
                        1
                    </div>
                    <div class="approach-step-text">
                        Data Mining: setting the effective automatic way of data collection and storing in relation
                        to each athlete involved in the training process.
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
                        Data Analysis and Visualization: searching athlete`s indications for improvement.
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
                        Defining the Training Process: working out personalized training process for each athlete or
                        team based on data collection and processing.
                    </div>
                    <div class="approach-step-icon">
                        <img src="<?php bloginfo('template_directory') ?>/img/3-steps-step-3-icon.svg" alt="">
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
                    				<?php the_post_thumbnail(); ?>
                				</div>
               					<div class="sl-solutions-item-title">
                   					<?php the_title(); ?>
               					</div>
            				</div>
                           
             <?php  endwhile; endif;  wp_reset_query(); ?>

        </div>
    </div>
</section>
<section id="it-services" class="it-solutions">
    <div class="container">
        <div class="section-header">
            IT Solutions
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
    		        	'terms'   => array( 'sport-dev' )
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
            <div class="showcase-item">
                <div class="showcase-item-scene">
                    <div class="showcase-item-object">
                        <div class="card-face card-face-front">
                            <div class="showcase-item-text">
                                <div class="showcase-item-category">
                                    Supply Chain
                                </div>
                                <div class="showcase-item-title">
                                    Music Streamer
                                </div>
                                <div class="showcase-item-description">
                                    Modern medicine has known a rapid progress in the last decades and many traditional
                                    forms.
                                </div>
                            </div>
                            <div class="showcase-item-image">
                                <img src="<?php bloginfo('template_directory') ?>/img/showcase-demo.jpg" alt="showcase-image">
                            </div>
                        </div>
                        <div class="card-face card-face-back">
                            <div class="showcase-item-category">
                                Supply Chain
                            </div>
                            <div class="showcase-item-title">
                                Music Streamer
                            </div>
                            <div class="showcase-item-description">
                                Pain may sometimes be the reason why people change.
                                Getting bad grades make you realize that you need to study.
                                Debts remind you of your inability to look for a source of income.
                            </div>
                            <div class="showcase-info">
                                <div class="duration">
                                    <div class="title">
                                        Duration
                                    </div>
                                    <div class="value">
                                        48 days
                                    </div>
                                </div>
                                <div class="team">
                                    <div class="title">
                                        Team
                                    </div>
                                    <div class="value">
                                        8 people
                                    </div>
                                </div>
                                <div class="technology">
                                    <div class="title">
                                        technology
                                    </div>
                                    <div class="value">
                                        PHP/Laravel
                                    </div>
                                </div>
                            </div>
                            <div class="showcase-button-wrapper">
                                <a href="#" class="showcase-link">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="showcase-item">
                <div class="showcase-item-scene">
                    <div class="showcase-item-object">
                        <div class="card-face card-face-front">
                            <div class="showcase-item-text">
                                <div class="showcase-item-category">
                                    Supply Chain
                                </div>
                                <div class="showcase-item-title">
                                    Music Streamer
                                </div>
                                <div class="showcase-item-description">
                                    Pain may sometimes be the reason why people change.
                                </div>
                            </div>
                            <div class="showcase-item-image">
                                <img src="<?php bloginfo('template_directory') ?>/img/showcase-demo.jpg" alt="showcase-image">
                            </div>
                        </div>
                        <div class="card-face card-face-back">
                            <div class="showcase-item-category">
                                Supply Chain
                            </div>
                            <div class="showcase-item-title">
                                Music Streamer
                            </div>
                            <div class="showcase-item-description">
                                Pain may sometimes be the reason why people change.
                                Getting bad grades make you realize that you need to study.
                                Debts remind you of your inability to look for a source of income.
                            </div>
                            <div class="showcase-info">
                                <div class="duration">
                                    <div class="title">
                                        Duration
                                    </div>
                                    <div class="value">
                                        48 days
                                    </div>
                                </div>
                                <div class="team">
                                    <div class="title">
                                        Team
                                    </div>
                                    <div class="value">
                                        8 people
                                    </div>
                                </div>
                                <div class="technology">
                                    <div class="title">
                                        technology
                                    </div>
                                    <div class="value">
                                        PHP/Laravel
                                    </div>
                                </div>
                            </div>
                            <div class="showcase-button-wrapper">
                                <a href="#" class="showcase-link">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="showcase-item">
                <div class="showcase-item-scene">
                    <div class="showcase-item-object">
                        <div class="card-face card-face-front">
                            <div class="showcase-item-text">
                                <div class="showcase-item-category">
                                    Supply Chain
                                </div>
                                <div class="showcase-item-title">
                                    Music Streamer
                                </div>
                                <div class="showcase-item-description">
                                    Pain may sometimes be the reason why people change.
                                </div>
                            </div>
                            <div class="showcase-item-image">
                                <img src="<?php bloginfo('template_directory') ?>/img/showcase-demo.jpg" alt="showcase-image">
                            </div>
                        </div>
                        <div class="card-face card-face-back">
                            <div class="showcase-item-category">
                                Supply Chain
                            </div>
                            <div class="showcase-item-title">
                                Music Streamer
                            </div>
                            <div class="showcase-item-description">
                                Pain may sometimes be the reason why people change.
                                Getting bad grades make you realize that you need to study.
                                Debts remind you of your inability to look for a source of income.
                                Pain may sometimes be the reason why people change.
                                Getting bad grades make you realize that you need to study.
                                Debts remind you of your inability to look for a source of income.
                            </div>
                            <div class="showcase-info">
                                <div class="duration">
                                    <div class="title">
                                        Duration
                                    </div>
                                    <div class="value">
                                        48 days
                                    </div>
                                </div>
                                <div class="team">
                                    <div class="title">
                                        Team
                                    </div>
                                    <div class="value">
                                        8 people
                                    </div>
                                </div>
                                <div class="technology">
                                    <div class="title">
                                        technology
                                    </div>
                                    <div class="value">
                                        PHP/Laravel
                                    </div>
                                </div>
                            </div>
                            <div class="showcase-button-wrapper">
                                <a href="#" class="showcase-link">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blue-main-link-wrapper">
            <a href="#" class="blue-main-link">
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
            <li>
                <div class="testimonials-item-wrapper">
                    <div class="testimonials-object">
                        <div class="quote-icon">
                            <img src="<?php bloginfo('template_directory') ?>/assets/svg/testimonials-quote-icon-red.svg" alt="quote-icon">
                        </div>
                        <div class="testimonial-text">
                            Stone Labs has been a pleasure to work with at every turn. They bring a rare balance of
                            professionalism, positiveness and insight. Very thorough approach to requirement gathering,
                            efficient and timely delivery of products. No hidden costs or surprises, excellent
                            communication
                            and I look forward to working with the team again with my future projects!
                        </div>
                        <div class="testimonial-author-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/author.jpg" alt="testimonial-author">
                            <span class="author-name">Michael Connor, CEO </span>
                        </div>
                        <div class="testimonial-logo-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/client-1.png" alt="testimonial-logo">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="testimonials-item-wrapper">
                    <div class="testimonials-object">
                        <div class="quote-icon">
                            <img src="<?php bloginfo('template_directory') ?>/assets/svg/testimonials-quote-icon-red.svg" alt="quote-icon">
                        </div>
                        <div class="testimonial-text">
                            Stone Labs has been a pleasure to work with at every turn. They bring a rare balance of
                            professionalism, positiveness and insight. Very thorough approach to requirement gathering,
                            efficient and timely delivery of products. No hidden costs or surprises, excellent
                            communication
                            and I look forward to working with the team again with my future projects!
                        </div>
                        <div class="testimonial-author-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/author.jpg" alt="testimonial-author">
                            <span class="author-name">Michael Connor, CEO </span>
                        </div>
                        <div class="testimonial-logo-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/client-1.png" alt="testimonial-logo">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="testimonials-item-wrapper">
                    <div class="testimonials-object">
                        <div class="quote-icon">
                            <img src="<?php bloginfo('template_directory') ?>/assets/svg/testimonials-quote-icon-red.svg" alt="quote-icon">
                        </div>
                        <div class="testimonial-text">
                            Stone Labs has been a pleasure to work with at every turn. They bring a rare balance of
                            professionalism, positiveness and insight. Very thorough approach to requirement gathering,
                            efficient and timely delivery of products. No hidden costs or surprises, excellent
                            communication
                            and I look forward to working with the team again with my future projects!
                        </div>
                        <div class="testimonial-author-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/author.jpg" alt="testimonial-author">
                            <span class="author-name">Michael Connor, CEO </span>
                        </div>
                        <div class="testimonial-logo-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/client-1.png" alt="testimonial-logo">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="testimonials-item-wrapper">
                    <div class="testimonials-object">
                        <div class="quote-icon">
                            <img src="<?php bloginfo('template_directory') ?>/assets/svg/testimonials-quote-icon-red.svg" alt="quote-icon">
                        </div>
                        <div class="testimonial-text">
                            Stone Labs has been a pleasure to work with at every turn. They bring a rare balance of
                            professionalism, positiveness and insight. Very thorough approach to requirement gathering,
                            efficient and timely delivery of products. No hidden costs or surprises, excellent
                            communication
                            and I look forward to working with the team again with my future projects!
                        </div>
                        <div class="testimonial-author-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/author.jpg" alt="testimonial-author">
                            <span class="author-name">Michael Connor, CEO </span>
                        </div>
                        <div class="testimonial-logo-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/client-1.png" alt="testimonial-logo">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="testimonials-item-wrapper">
                    <div class="testimonials-object">
                        <div class="quote-icon">
                            <img src="<?php bloginfo('template_directory') ?>/assets/svg/testimonials-quote-icon-red.svg" alt="quote-icon">
                        </div>
                        <div class="testimonial-text">
                            Stone Labs has been a pleasure to work with at every turn. They bring a rare balance of
                            professionalism, positiveness and insight. Very thorough approach to requirement gathering,
                            efficient and timely delivery of products. No hidden costs or surprises, excellent
                            communication
                            and I look forward to working with the team again with my future projects!
                        </div>
                        <div class="testimonial-author-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/author.jpg" alt="testimonial-author">
                            <span class="author-name">Michael Connor, CEO </span>
                        </div>
                        <div class="testimonial-logo-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/client-1.png" alt="testimonial-logo">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="testimonials-item-wrapper">
                    <div class="testimonials-object">
                        <div class="quote-icon">
                            <img src="<?php bloginfo('template_directory') ?>/assets/svg/testimonials-quote-icon-red.svg" alt="quote-icon">
                        </div>
                        <div class="testimonial-text">
                            Stone Labs has been a pleasure to work with at every turn. They bring a rare balance of
                            professionalism, positiveness and insight. Very thorough approach to requirement gathering,
                            efficient and timely delivery of products. No hidden costs or surprises, excellent
                            communication
                            and I look forward to working with the team again with my future projects!
                        </div>
                        <div class="testimonial-author-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/author.jpg" alt="testimonial-author">
                            <span class="author-name">Michael Connor, CEO </span>
                        </div>
                        <div class="testimonial-logo-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/client-1.png" alt="testimonial-logo">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="testimonials-item-wrapper">
                    <div class="testimonials-object">
                        <div class="quote-icon">
                            <img src="<?php bloginfo('template_directory') ?>/assets/svg/testimonials-quote-icon-red.svg" alt="quote-icon">
                        </div>
                        <div class="testimonial-text">
                            Stone Labs has been a pleasure to work with at every turn. They bring a rare balance of
                            professionalism, positiveness and insight. Very thorough approach to requirement gathering,
                            efficient and timely delivery of products. No hidden costs or surprises, excellent
                            communication
                            and I look forward to working with the team again with my future projects!
                        </div>
                        <div class="testimonial-author-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/author.jpg" alt="testimonial-author">
                            <span class="author-name">Michael Connor, CEO </span>
                        </div>
                        <div class="testimonial-logo-wrapper">
                            <img src="<?php bloginfo('template_directory') ?>/assets/png/client-1.png" alt="testimonial-logo">
                        </div>
                    </div>
                </div>
            </li>
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