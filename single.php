<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Smiling_Barracuda
 */

get_header('form'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_type() );?>
				<div class="container">
					<?php the_post_navigation();
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;?>
				</div>
			<?php endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();