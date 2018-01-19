<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Smiling_Barracuda
 */

?>
</div><!-- #content -->
</div><!-- end parallax content -->	
<!-- footer starts -->
<div class="footer">
    <div class="container">
        <div class="footer-icon clearfix top50 bottom50">
            <div class="p3 top10">
                <footer id="colophon" class="site-footer">
					<div class="site-info col-lg-4 col-md-12 top25">
						<?php
							$site_name = get_bloginfo( 'name' );
							$current_year = date('Y');
							printf( esc_html__( 'All Rights Reserved. %s', 'barracuda' ), $site_name  );
							printf(esc_html__( ' %s', 'barracuda' ), $current_year);
						?>
					</div><!-- .site-info -->
					<div class="supporters col-lg-8 col-md-12">
						<ul class="list-inline">
							<li><?php echo get_theme_mod('supporter_field')?></li>
							<li><a href="<?php echo get_theme_mod('url_field_ce')?>" target="_blank"><img src="<?php echo get_theme_mod('ce_logo', 'No Capital Enterprise Logo has been provided yet.')?>" alt="Capital Enterprise"></a></li>
							<li><a href="<?php echo get_theme_mod('url_field_casts')?>" target="_blank"><img src="<?php echo get_theme_mod('casts_logo', 'No CASTS Logo has been provided yet.')?>" alt="CASTS"></a></li>
							<li><a href="<?php echo get_theme_mod('url_field_eu')?>" target="_blank"><img src="<?php echo get_theme_mod('eu_logo', 'No EU Logo has been provided yet.')?>"  alt="European Union"></a></li>
						</ul>
					</div>
				</footer><!-- #colophon -->
            </div>
        </div>
    </div>
</div>
<?php if(is_page('15')):?>
	<a href="#page" id="scrollToTop" class="scroll" title="Back to Top"><i class="fa fa-angle-up white" aria-hidden="true"></i></a>
<?php endif;?>
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Open Sans:300,400,600']
    }
  });
</script>
<?php wp_footer(); ?>
</body>
</html>