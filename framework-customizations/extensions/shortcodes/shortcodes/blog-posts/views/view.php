<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$style = esc_attr( $atts['style'] );

$class = '';
if( isset( $atts['columns'] ) && $atts['columns'] == 2 ) :
	$class = ' sh-recent-posts-columns'.$atts['columns'];
elseif( isset( $atts['columns'] ) && $atts['columns'] == 4 ) :
	$class = ' sh-recent-posts-columns'.$atts['columns'];
else:
endif;

?>
<div class="sh-recent-posts<?php echo esc_attr( $class ); ?>" id="recent-posts-<?php echo esc_attr( $atts['id'] ); ?>" data-id="<?php echo intval( $atts['columns'] ); ?>">
	<div class="sh-group blog-list blog-style-<?php echo esc_attr( $style )?>">
		<?php
			set_query_var( 'style', $style );

			$categories_query = array();
			if( isset($atts['categories']) && count($atts['categories']) > 0 ) :
				$categories_query = $atts['categories'];
			endif;

			$tags_query = array();
			if( isset($atts['tags']) && count($atts['tags']) > 0 ) :
				$tags_query = $atts['tags'];
			endif;

			$limit = ( is_numeric($atts['limit']) ) ? intval( $atts['limit'] ) : 6;
			if( $limit == 41 ) {
				$limit = -1;
			}

			$orderby = ( isset($atts['order_by']) && $atts['order_by'] ) ? esc_attr( $atts['order_by'] ) : 'post_date';
			$order = ( isset($atts['order']) && $atts['order'] ) ? esc_attr( $atts['order'] ) : 'desc';

			$posts = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $limit, 'category__in' => $categories_query, 'tag__in' => $tags_query, 'orderby' => $orderby, 'order' => $order ) );
			if( count($posts) > 0 ) :
				while ( $posts->have_posts() ) : $posts->the_post();
					if( $style == 'grid') :?>
				
		<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
		<div class="post-container">
			<?php //jevelin_popover( jevelin_post_option( get_the_ID(), 'post-popover' ) ); ?>

			<div class="post-meta-thumb">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php echo the_post_thumbnail( 'full' ); ?>
				<?php else:?>
					<a href="<?php echo esc_url( get_permalink() ); ?>"><img src="http://via.placeholder.com/1000x1000&text=No+Image Found" alt="No Image"></a>
				<?php endif;?>
				<?php //echo jevelin_blog_overlay( jevelin_get_thumb( get_the_ID() ) ); ?>
			</div>

			<div class="post-content-container">

				<div class="post-meta post-meta-one">
					<?php smiling_barracuda_posted_on(); //jevelin_meta_one(); ?>
				</div>

				<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title">
					<h2>
						<?php //jevelin_sticky_post(); ?>
						<?php the_title(); ?>
					</h2>
				</a>

				<div class="post-content">
					<?php echo wp_trim_words( get_the_content() , '45' ); ?>
				</div>

				<div class="post-meta post-meta-two">
					<?php smiling_barracuda_entry_footer(); //jevelin_meta_two( 0, 'icon icon-bubble' ); ?>
				</div>
			</div>
		</div>
	</article>	
				<?php elseif( $style == 'largeimage' ) : ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
					<div class="post-container">
						<div class="post-meta-thumb xx">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
							<?php else:?>
							<a href="<?php echo esc_url( get_permalink() ); ?>"><img src="http://via.placeholder.com/1000x1000&text=No+Image Found" alt="No Image"></a>
							<?php endif;?>
						</div>
					</div>
				</article>
				<?php else : ?>
					
				<?php endif; endwhile;
				wp_reset_postdata();
			endif;
		?>
	</div>
</div>