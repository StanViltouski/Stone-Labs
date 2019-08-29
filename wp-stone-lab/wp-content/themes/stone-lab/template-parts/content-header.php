<?php  global $stone_lab_option; ?>

<?php $custom_desk_logo = ($stone_lab_option['stone-lab-desk-logo']['url']); ?>
<?php $custom_mob_logo = ($stone_lab_option['stone-lab-mob-logo']['url']); ?>

  <?php 
                        if($custom_mob_logo){ ?>

                        <img src="<?php echo esc_url($custom_mob_logo); ?>" title="stone-lab" width="168" alt="logo">
                    <?php 
                        } else {
                            echo "No image";
                        } ?> 

                </a>
                <a href="#" class="close-button">
                    <img src="<?php bloginfo('template_directory') ?>/img/close-popup-icon.svg" alt="close-button">
                </a>
            </div>
            <div class="mobile-menu-wrapper">

                <?php wp_nav_menu([
                    'theme_location'  => '',
                    'menu'            => 'header-menu', 
                    'container'       => false, 
                    'menu_class'      => false, 
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul class="mobile-menu">%3$s</ul>',
                    'depth'           => 2,

                ]);
                ?>

                <div class="mobile-nav-item-button">
                    <a class="btn" href="/apply-form">Send Inquiry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container navbar-container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand d-flex align-items-center" href="/">

                <?php 
                if($custom_desk_logo){ ?>

                    <img src="<?php echo esc_url($custom_desk_logo); ?>" title="stone-lab" width="310" alt="logo">
                    <?php 
                } else {
                        echo "No image";
                } ?> 

            </a>
            <div class="collapse navbar-collapse">
                <?php wp_nav_menu([
                    'theme_location'  => '',
                    'menu'            => 'header-menu', 
                    'container'       => false, 
                    'menu_class'      => false, 
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul class="navbar-nav">%3$s</ul>',
                    'depth'           => 2,

                ]);
                ?>
             </div>
             
            <div class="nav-item-button">
                <a class="btn" href="/apply-form">Send Inquiry</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>