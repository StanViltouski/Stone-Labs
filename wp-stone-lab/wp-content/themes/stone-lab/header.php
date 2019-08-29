<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script type="text/javascript">
        var wayImage = '<?= get_bloginfo("template_url"); ?>';
    </script>
    <?php wp_head(); ?>

</head>
<body>


<?php if ( is_single() ){ ?>

<section id="showcases-header" class="header">
        <div class="mobile-menu-fixed">
            <div class="container navbar-container">
                <div class="top-line">
                    <a class="navbar-brand showcasesBrand-top d-flex align-items-center" href="/">
                        
                    <?php get_template_part( 'template-parts/content-header', 'page' ); ?>


 </section>

<?php } else {?>
    
    <section class="header header-wave-1 header-wave-2 header-wave-3">

    <div class="mobile-menu-fixed">
        <div class="container navbar-container">
            <div class="top-line">
                <a class="navbar-brand d-flex align-items-center" href="<?php echo home_url('/'); ?>">

                   <?php get_template_part( 'template-parts/content-header', 'page' ); ?>
            
<?php } ?>


