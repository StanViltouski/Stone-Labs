<?php 
/**
* Template name: Contacts Template
*/

get_header();?>

 <?php
    while ( have_posts() ) :
        the_post(); ?>

	 <div class="page-title-wrapper applyForm_title">
        <h1 class="page-title page-title-contacts"><?php if( get_field('title') ): ?><?php the_field('title'); ?><?php endif;?></h1> 
        <h4 class="page-subtitle"><?php the_content(); ?></h4>
    </div>
</section>

 <?php endwhile; ?>


<section id="form">
	<div class="container container_applyForm">
		<div class="form_wrapper form_wrapper_contacts">

			<div class="form">
				<div class="form_general">
        
					<?php echo do_shortcode('[contact-form-7 id="325" title="Contacts" html_id="form_first"]') ?>	 
				</div>
			</div>
		</div>
	</div>
</section>


<footer class="footer-wave-1 footer-wave-2 footer-wave-3">
    <div class="container inner-container inner-container-contacts">
        <div class="footer-inquiry-contacts row m-0" style="background: #000 url('<?php if( get_field('plate_background') ): ?><?php the_field('plate_background'); ?><?php endif; ?>') center no-repeat;">
        	<div class="col-6 tower-contacts">
        		<?php if( get_field('plate_img') ): ?><img src="<?php the_field('plate_img'); ?>" /><?php endif; ?>
        	</div>
        	<div class="col-6 contact_data">
        		<h3 class="contacts_location"><?php if( get_field('location') ): ?><?php the_field('location'); ?><?php endif; ?></h3>
        		<h4 class="contacts_gmt">GMT +0<?php echo get_option('gmt_offset'); ?>:00</h4>
        		<h3 class="contacts_timer"><?php echo current_time('g:i:s A', 1); ?></h3>
        		<h4 class="contacts_adress"><?php if( get_field('adress') ): ?><?php the_field('adress'); ?><?php endif; ?></h4>
        		<h4 class="contacts_telephone"><?php if( get_field('telephone') ): ?><?php the_field('telephone'); ?><?php endif; ?></h4>
        	</div>
        </div>
    </div>


<?php wp_enqueue_script( 'lab-form'); get_footer(); ?>