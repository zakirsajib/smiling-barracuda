<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Smiling_Barracuda
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

<body <?php body_class(); ?>>
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
    <section class="home-main" id="home">
        <h2 class="sr-only">This is home section</h2>
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed navbar-fixed-top ">
                <div class="menu-icon-position">
                    <div class="menu-icon">
                        <span></span>
                    </div>
                </div>
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
	                   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" ><img src="<?php echo $image[0]?>" class="logo-display" alt="<?php bloginfo( 'name' );?>"><img src="<?php echo get_theme_mod('header_logo', 'No Logo has been provided yet.')?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>">
                        </a>
                    </div>
                    <?php
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'primary',
			                'items_wrap'		=>	'<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">%3$s</ul>',
			                'container_class'	=>	'collapse navbar-collapse',
			                'container_id'		=>	'navbar-menu'
			            ));
			        ?>
                </div>
            </nav>
        <!--Header ends-->
        <!--Full Menu-->
        <div class="full-menu">
            <div class="menu-icon active">
                <span></span>
            </div>
            <div class="open-full-menu-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 columns half text-center">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-full heading_space"><img src="<?php echo get_theme_mod('header_logo', 'No Logo has been provided yet.')?>" alt="<?php bloginfo( 'name' ); ?>"></a>
                        </div>
                        <?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
								'container_class'	=>	'col-sm-12 columns half text-left',
				                'menu_class'		=>	'full-nav top20 heading_space'
				            ));
				        ?>
                        <?php if( get_theme_mod('url_field_twitter') ||
	                        get_theme_mod('url_field_linkedin') ||
	                        get_theme_mod('url_field_facebook') ||
	                        get_theme_mod('url_field_google')):?>
                        <div class="col-sm-12">
                            <ul class="social">
                                <?php if(get_theme_mod('url_field_twitter')):?>
                                <li>
                                    <a href="<?php echo get_theme_mod('url_field_twitter')?>" target="_blank" class="twitter button">
                                        <i class="fa fa-twitter" ></i>
                                    </a>
                                </li>
                                <?php endif;?>
                                <?php if(get_theme_mod('url_field_linkedin')):?>
                                <li>
                                    <a href="<?php echo get_theme_mod('url_field_linkedin')?>" target="_blank" class="linkedin button">
                                        <i class="fa fa-linkedin" ></i>
                                    </a>
                                </li>
                                <?php endif;?>
                                <?php if(get_theme_mod('url_field_facebook')):?>
                                <li>
                                    <a href="<?php echo get_theme_mod('url_field_facebook')?>" target="_blank" class="facebook button">
                                        <i class="fa fa-facebook" ></i>
                                    </a>
                                </li>
                                <?php endif;?>
                                <?php if(get_theme_mod('url_field_google')):?>
                                <li>
                                    <a href="<?php echo get_theme_mod('url_field_google')?>" target="_blank" class="google button">
                                        <i class="fa fa-google" ></i>
                                    </a>
                                </li>
                                <?php endif;?>
                            </ul>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </header>
    <!--Full Menu-->
    <!-- Navigation End -->
	<div id="content" class="site-content">