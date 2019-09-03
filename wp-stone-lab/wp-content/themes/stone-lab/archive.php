<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stone-lab
 */

get_header(); ?>

	</section>



	<section>
		<div class="container container_arch">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

				<?php
					the_archive_title( '<h1 class="page-title mb-5 pt-5" style="color:#232323;">', '</h1>' );
					the_archive_description( '<h2 class="archive-description" style="color:#232323;">', '</h2>' );
				?>

			</header><!-- .page-header -->

			<div class="row m-0">

			<?php while ( have_posts() ) :
				the_post(); ?>


			<div class="col-12 col-sm-12 col-md-6 mb-5">
				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			</div>

			<?php endwhile;?>

				<div class="col-12">
					<div class="row justify-content-center">
						<div class="col-3">
							<?php esc_html(next_posts_link('View More', 0)); ?>
						</div>
					</div>	
				</div>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

			</div>
		</div>
	</section>

	

	<footer class="footer-wave-1 footer-wave-2 footer-wave-3 footer_apply">

<?php get_footer(); ?>
