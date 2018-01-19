<?php
/**
 * The header for Application Form page ONLY
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barracuda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="90">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'barracuda' ); ?></a>

	<!--Page Loader-->
<div class="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!--Page Loader ends-->
<div class="parallax-content">
    <header>
    <section class="home-main" id="homeform">
        <h2 class="sr-only">This is home section</h2>
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed navbar-fixed-top ">                
                <div class="container">
                    <div class="navbar-header">
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
	                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );if(!empty($image)):?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" ><img src="<?php echo $image[0]?>" class="logo-display" alt="<?php bloginfo( 'name' );?>"><img src="<?php echo get_theme_mod('header_logo', 'No Logo has been provided yet.')?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>">
                        </a><?php endif;?>
                    </div>
                    <div class="collapse navbar-collapse" id="entry-title">
                    	<div class="nav navbar-nav navbar-right top10">
                    		<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
                    	</div>
                    </div>
                </div>
            </nav>    
        <!--Header ends-->        
    </section>
    </header>
	<div id="content" class="site-content top50">