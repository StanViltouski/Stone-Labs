<?php 
/**
* Template name: Apply-form Template
*/

get_header(); ?>

	<div class="page-title-wrapper applyForm_title">
        <h1 class="page-title">
        	<?php if(get_post_meta($post->ID, $key = 'title', $single = true)){ ?>
            <?php echo esc_attr(get_post_meta($post->ID, $key = 'title', $single = true));?>
            <?php }  ?> 	
        </h1> 
    </div>
</section>


<section id="form">
	<div class="container container_applyForm">
		<div class="form_wrapper">
			<div class="row m-0 type_forms">
				<div class="big_form type_form col-6" data="true">
					<a href="#" onclick="return false">
						<?php if(get_post_meta($post->ID, $key = 'title_big_form', $single = true)){ ?>
            			<?php echo esc_attr(get_post_meta($post->ID, $key = 'title_big_form', $single = true));?>
            			<?php }  ?> 		
					</a>
				</div>
				<div class="small_form type_form col-6" data="false">
					<a href="#" onclick="return false">
						<?php if(get_post_meta($post->ID, $key = 'title_small_form', $single = true)){ ?>
            			<?php echo esc_attr(get_post_meta($post->ID, $key = 'title_small_form', $single = true));?>
            			<?php }  ?> 
					</a>
				</div>
			</div>

			<div class="form">
				<div class="form_general">

					<?php echo do_shortcode('[contact-form-7 id="339" title="Apply-form" html_id="form_first"]') ?>	
					
				</div>
			</div>
		</div>
	</div>
</section>


<footer class="footer-wave-1 footer-wave-2 footer-wave-3 footer_apply">



<?php wp_enqueue_script( 'lab-form'); get_footer(); ?>