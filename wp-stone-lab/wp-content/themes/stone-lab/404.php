<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package stone-lab
 */

get_header(); ?>

	<div class="page-title-wrapper">
        <h1 class="page-title">Page Not Found</h1>
   </div>
</section>

		<section>
			<div class="container container_nopage">

				<img class="nopage_title_img" src="<?php bloginfo('template_directory') ?>/assets/svg/404 visual.svg" alt="img-404">

				<div class="articleFooter_button_wrapper">
        	    	<a  id="botton_back" href="/" class="botton_back"><img src="<?php bloginfo('template_directory') ?>/assets/svg/arrow_back.svg" alt="arrow_back">Back to home page</a>
        		</div>

			</div>
		</section>

	<footer class="footer-wave-1 footer-wave-2 footer-wave-3 footer_apply">

<?php get_footer(); ?>
