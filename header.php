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
    <section>
        <h2 class="sr-only">This is home section</h2>
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed navbar-fixed-top ">
                <div class="menu-icon-position hidden-lg hidden-md hidden-sm">
                    <div class="menu-icon">
                        <span></span>
                    </div>
                </div>
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
	                   <?php if ( function_exists('fw_get_db_settings_option') ):?>
	                   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('logo')['url']?>" alt="<?php bloginfo( 'name' );?>" class="logo-display"><img src="<?php echo fw_get_db_settings_option('logo_sticky')['url']?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>">
	                   </a>
	                   <?php else:
	                   		get_option( 'blogname' );
	                   endif;?>	                                                                 
                    </div>
                    
                    <div class="navbar-search-box-icon" data-aos="fade-down">
                        <a href="#" class="search-icon scroll">
	                        <i class="fa fa-search"> </i>
	                    </a>
                    </div>
                    
                    
                    <?php 
	                    
	                    //$data = fw_get_db_settings_option();

						// or even refer to individual options, for performance's sake
						//$individual_option = fw_get_db_settings_option('logo');
						
						//echo $individual_option['url'];
						
						//fw_print($data);
						//fw_print($individual_option);
	                    
	                    
	                     ?>
                    <?php
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'primary',
			                'items_wrap'		=>	'<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">%3$s</ul>',
			                'container_class'	=>	'collapse navbar-collapse',
			                'container_id'		=>	'navbar-menu'
			            ));
			        ?>
			        
			        <div class="navbar-search-box" id="search-box">
                        <div class="navbar-search-box-data">
                            <form>
                                <input type="search" placeholder="type keyword(s) here" class="form-control" id="search">
                                <div class="navbar-search-box-button">
                                    <a href="#." class="btn button-blue page-buttons button">
                                        Search
                                    </a>

                                </div>
                            </form>
                        </div>
                    </div>
			        
			        
			        
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