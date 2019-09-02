<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stone-lab
 */

get_header(); ?>

	<div class="for_height"></div>
</section>

	<?php
		while ( have_posts() ) : the_post(); ?>

<section>
	<div class="container container_article">
		<div class="article_plate" style="background: linear-gradient(to bottom, rgba(4, 151, 244, 0.5), rgba(4, 151, 244, 0.5)),linear-gradient(to top, #006eb4, rgba(11, 203, 249, 0)), url(<?php esc_html(the_post_thumbnail_url()); ?>">

			<div class="articlePlate_button_wrapper">
                <a href="/blog" class="botton_back"><img src="<?php bloginfo('template_directory') ?>/assets/svg/arrow_back.svg" alt="arrow_back">Back to all articles</a>
            </div>

            <div class="articlePlate_title">
            	<?php esc_html(the_title()); ?>
            </div>

            <div class="articlePlate_date">
            	<?php esc_html(the_date()); ?>
            </div>

            <div class="articlePlate_author">
            	<div class="articlePlate_author_avatar">
            		<?php echo get_avatar( $user_ID); ?>
            	</div>

            	<div class="articlePlate_author_name">
					<?php esc_html(the_author()); ?>
            	</div>
            </div>

		</div>
	</div>
</section>


<section>	
	<div class="container container_article">
		<?php the_content(); ?>
	</div>
</section>

<?php endwhile; ?>	

<section>	
	<div class="container container_article container_article-footer">
		<div class="article_footer">

			<div class="articleFooter_button_wrapper">
        	    <a href="/blog" class="botton_back"><img src="<?php bloginfo('template_directory') ?>/assets/svg/arrow_back.svg" alt="arrow_back">Back to all articles</a>
        	</div>
	
        	<div class="articleFooter_socialNets">
        	 	<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/svg/fb_article.svg" title="facebook" alt="facebook"></a>
        	 	<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/svg/in_article.svg" title="linkedin" alt="linkedin"></a>
        	 	<a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/svg/tw_article.svg" title="twitter" alt="twitter"></a>
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
