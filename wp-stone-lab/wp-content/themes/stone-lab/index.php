<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stone-lab
 */

get_header();
?>

	<div class="page-title-wrapper">
        <h1 class="page-title">Our Blog</h1>
    </div>
</section>


<section class="blog-main-section ">
    <div class="container">
        <div class="blog-main-wrapper">

        <?php
        	$i=0;
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post(); 
					$i++;?>

				<div class="blog-main-item" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                	<a href="<?php the_permalink(); ?>" class="blog-item-date">
                    	<?php the_date(); ?>
                	</a>

                	<a href="<?php the_permalink(); ?>" class="blog-item-link">
                    	<span class="blog-item-title">
                        	<?php the_title(); ?>
                    	</span>

                    	<?php  if($i == 1) {?>
							<span class="blog-item-description">
                      			<?php the_excerpt(); ?>
                    		</span>
                    	<?php }?>

                	</a>
            	</div>

			<?php 	endwhile;

		endif;
		?>

        </div>
        <div class="blue-main-link-wrapper">
        	<?php next_posts_link('View More', 0); ?>
        </div>
    </div>
</section>


<footer class="footer-wave-1 footer-wave-2 footer-wave-3 footer_apply">		

<?php get_footer(); ?>
