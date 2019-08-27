<?php  global $stone_lab_option; ?>

<?php $custom_footer_logo = ($stone_lab_option['stone-lab-footer-logo']['url']);
      $custom_social_nets = ($stone_lab_option['social-network']); 
      $custom_adress = ($stone_lab_option['adress']); 
      $custom_email = ($stone_lab_option['email']); 
      $custom_telephone = ($stone_lab_option['telephone']); 
      $custom_icon_geo = ($stone_lab_option['icon_geo']['url']); 
      $custom_icon_email = ($stone_lab_option['icon_email']['url']); 
      $custom_icon_telephone= ($stone_lab_option['icon_telephone']['url']); 
?>

    <div class="container footer-info-container">
        <div class="footer-wrapper">
            <div class="logo-socials">
                <div class="footer-logo">

                    <?php 
                        if($custom_footer_logo){ ?>

                        <img src="<?php echo esc_url($custom_footer_logo); ?>" title="stone-lab" width="168" alt="logo">
                    <?php 
                        } else {
                            echo "No image";
                        } ?>

                </div>
                <div class="footer-socials">

                    <?php 
                    if($custom_social_nets){ ?>

                    <a href="<?php echo esc_url($custom_social_nets['Link facebook']); ?>"><img src="<?php bloginfo('template_directory') ?>/assets/svg/footer-facebook-icon.svg" alt="facebook-footer-logo"></a>

                    <a href="<?php echo esc_url($custom_social_nets['Link linkedin']); ?>"><img src="<?php bloginfo('template_directory') ?>/assets/svg/footer-linkedin-icon.svg" alt="linkedin-footer-logo"></a>

                    <a href="<?php echo esc_url($custom_social_nets['Link twitter']); ?>"><img src="<?php bloginfo('template_directory') ?>/assets/svg/footer-twitter-icon.svg" alt="twitter-footer-logo"></a>

                    <a href="<?php echo esc_url($custom_social_nets['Link skype']); ?>"><img src="<?php bloginfo('template_directory') ?>/assets/svg/footer-skype-icon.svg" alt="skype-footer-logo"></a>

                    <a href="<?php echo esc_url($custom_social_nets['Link github']); ?>"><img src="<?php bloginfo('template_directory') ?>/assets/svg/footer-github-icon.svg" alt="github-footer-logo"></a>
                     <?php 
                        } else {
                            echo "No data";
                        } ?>
            
                </div>
            </div>
            <div class="footer-nav">
                <?php 

                    $menuParameters = array(
                        'menu'            => 'footer-menu', 
                        'container'       => false,
                        'echo'            => false,
                        'items_wrap'      => '%3$s',
                        'depth'           => 0,
                    );

                    echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                ?>
            </div>
            <div class="footer-contacts-wrapper">
                <div class="footer-contacts-left">
                    <span class="footer-address"> 


                       <?php if($custom_adress){ ?><span><?php echo ($custom_adress); ?></span>
                       <?php } else {echo "No adress";} ?>
                    </span>
                </div>
                <div class="footer-contacts-right">

                    <?php if($custom_email){ ?> <a href="mailto:<?php echo ($custom_email); ?>" class="footer-contact-link footer-email"><?php echo($custom_email); ?></a>
                    <?php } else {echo "No email";} ?>


                    <?php if($custom_telephone){ ?><a href="tel:<?php echo ($custom_telephone); ?>" class="footer-contact-link footer-phone"><?php echo($custom_telephone); ?></a>
                    <?php } else {echo "No telephone";} ?>
               
                </div>
            </div>
        </div>
        <div class="footer-copyrights">
            <div class="copyright">
                &copy; 2009-2019 Stone Labs
            </div>
            <div class="privacy">
                <a href="#" class="privacy-link">
                    Privacy Policy
                </a>
                <a href="#" class="privacy-link">
                    Sitemap
                </a>
            </div>
        </div>
    </div>
</footer>


<!-- wp_enqueue_script( 'menu_add_class'); -->
<?php wp_footer();?>
</body>
</html>