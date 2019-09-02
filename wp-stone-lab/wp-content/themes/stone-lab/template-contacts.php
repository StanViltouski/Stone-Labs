<?php 
/**
* Template name: Contacts Template
*/

get_header();?>

 <?php
    while ( have_posts() ) :
        the_post(); ?>

	 <div class="page-title-wrapper applyForm_title">
        <h1 class="page-title page-title-contacts">
            <?php if(get_post_meta($post->ID, $key = 'title', $single = true)){ ?>
            <?php echo esc_attr(get_post_meta($post->ID, $key = 'title', $single = true));?>
            <?php }  ?>   
        </h1> 
        <h4 class="page-subtitle"><?php esc_html(the_content()); ?></h4>
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
        <div class="footer-inquiry-contacts row m-0" style="background: #000 url('<?php if( get_field('plate_background') ): ?><?php esc_attr(the_field('plate_background')); ?><?php endif; ?>') center no-repeat;">
        	<div class="col-6 tower-contacts">
        		<?php if( get_field('plate_img') ): ?><img src="<?php esc_attr(the_field('plate_img')); ?>" /><?php endif; ?>
        	</div>
        	<div class="col-6 contact_data">
        		<h3 class="contacts_location"><?php if( get_field('location') ): ?><?php esc_html(the_field('location')); ?><?php endif; ?></h3>
        		<h4 class="contacts_gmt">GMT +0<?php echo esc_html( get_option('gmt_offset')); ?>:00</h4>
        		<h3 class="contacts_timer"><?php echo esc_html(current_time('g:i:s A', 1)); ?></h3>
        		<h4 class="contacts_adress"><?php if( get_field('adress') ): ?><?php esc_html(the_field('adress')); ?><?php endif; ?></h4>
        		<h4 class="contacts_telephone"><?php if( get_field('telephone') ): ?><?php esc_html(the_field('telephone')); ?><?php endif; ?></h4>
        	</div>
        </div>
    </div>
s

<?php wp_enqueue_script( 'lab-form'); get_footer(); ?>