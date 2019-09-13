<?php get_header(); ?>

<div class="page-title-wrapper">

        <h1 class="page-title">Our Showcases</h1>

        <div class="container">
            <div class="category-selector-wrapper">
                 <div class="navbar-nav">
                    <div class="nav-item">
                         <div class="top-dropdown-item">
                            <a id="drop_menu" class="nav-item dropdown-link category-selector-link" data-toggle="dropdown" href="#" role="button">All Industries</a>
                            <div class="nav-dropdown-menu_filter dropdown-menu submenu-resp">

                            <?php $wcatTerms = get_terms('showcases-filter', 
                            	array(
                            		'hide_empty' => 0,
                            		'parent' 	 => 0,
                            		'orderby'	 => 'count',
                            		'order' 	 => 'ASC',
                            	)); 
   								foreach($wcatTerms as $wcatTerm) : ?>

      								<a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy );?>" class="nav-dropdown-item"><?php echo $wcatTerm->name; ?></a>

								<?php endforeach; ?>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-category-links-wrapper">

            	<?php $wcatTerms = get_terms('showcases-filter', 
                            	array(
                            		'hide_empty' => 0,
                            		'parent' 	 => 0
                            	)); 
   					foreach($wcatTerms as $wcatTerm) : ?>

        			<?php
        			    $wsubargs = array(
        			       'hierarchical' => 1,
        			       'show_option_none' => '',
        			       'hide_empty' => 0,
        			       'parent' => $wcatTerm->term_id,
        			       'taxonomy' => 'showcases-filter'
        			    );
        			    $wsubcats = get_categories($wsubargs);
        			    foreach ($wsubcats as $wsc):
					?>

  				<a href="<?php echo get_term_link( $wsc->slug, $wsc->taxonomy );?>" class="top-category-item"><?php echo $wsc->name;?></a>

         				<?php endforeach; ?>  
					<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<section class="showcases-catalog-section">
    <div class="container">
        <div class="showcases-catalog-wrapper">

            <?php  
                wp_reset_query();
            
                    $resent_list = new WP_Query(array('post_type'=> 'showcases', 'order'=> 'ASC', 'posts_per_page'=> -1)); 
                    
                    if ( $resent_list->have_posts() ) :
                        while ( $resent_list->have_posts() ) :
                        $resent_list->the_post(); ?>
                                    
			<div class="showcases-catalog-item" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center / cover;">
                <div class="showcase-item-overlay">
                    <div class="top-part">
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
                    </div>
                    
                    <div class="showcase-button-wrapper">
                        <a href="<?php esc_html(the_permalink()); ?>" class="showcase-link">See Details</a>
                    </div>
                </div>
                <div class="showcase-item-front">

                    <div class="showcase-item-category">
                        <?php if(get_post_meta($post->ID, $key = 'sub_title', $single = true)){ ?>
                        <?php echo esc_attr(get_post_meta($post->ID, $key = 'sub_title', $single = true));?>
                        <?php }  ?>
                    </div>

                    <div class="showcase-item-title">
                        <?php esc_html(the_title()); ?>
                    </div>
                </div>
            </div>
                 
             <?php  endwhile; endif;  wp_reset_query(); ?>
   
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

