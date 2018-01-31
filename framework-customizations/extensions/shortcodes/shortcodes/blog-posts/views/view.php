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
			
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			
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

			$posts = new WP_Query( array( 'post_type' => 'post', 'paged' => $page, 'posts_per_page' => $limit, 'category__in' => $categories_query, 'tag__in' => $tags_query, 'orderby' => $orderby, 'order' => $order ) );
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

				<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title"><h2><?php //jevelin_sticky_post(); ?><?php the_title(); ?></h2>
				</a>

				<div class="post-content">
					<?php echo wp_trim_words( get_the_content() , '45'); ?>
					<div class="fw-read-more"><a href="<?php the_permalink()?>">Read More  <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
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
					<?php elseif( $style == 'classic1' ) : ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
					<div class="post-container-classic-one">
						<div class="post-meta-thumb-classic-one">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
							<?php else:?>
							<a href="<?php echo esc_url( get_permalink() ); ?>"><img src="http://via.placeholder.com/150x150&text=No+Image Found" alt="No Image"></a>
							<?php endif;?>
						</div>
						<div class="post-content-classic-one">
							<div class="post-meta post-meta-one classic-one">
								<?php smiling_barracuda_posted_on(); ?>
							</div><a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title"><h2><?php the_title(); ?></h2></a>

							<div class="post-content classic-one">
								<?php echo wp_trim_words( get_the_content() , '45' ); ?>
							</div>
			
							<div class="post-meta post-meta-two classic-one">
								<?php smiling_barracuda_entry_footer();?>
							</div>
						</div>
					</div>
				</article>
					<?php elseif( $style == 'classic2' ) : ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
					<div class="post-container-classic-two">
						
							<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-meta-thumb-classic-two">
								<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
							</div>
							<?php else:?>
							<div class="post-meta-thumb-classic-two">
								<a href="<?php echo esc_url( get_permalink() ); ?>"><img src="http://via.placeholder.com/1000x1000&text=No+Image Found" alt="No Image"></a>
							</div>
							<?php endif;?>
						<div class="post-content-classic-two">
							<div class="post-meta post-meta-one classic-two">
								<?php smiling_barracuda_posted_on(); ?>
							</div><a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title"><h2><?php the_title(); ?></h2></a>

							<div class="post-content classic-two"><?php echo wp_trim_words( get_the_content() , '45' ); ?>
							</div>
			
							<div class="post-meta post-meta-two classic-two">
								<?php smiling_barracuda_entry_footer();?>
							</div>
						</div>
					</div>
				</article>
					<?php else : ?>
					
					<?php endif; 
				endwhile;
			endif;
		?>
	</div>
	
	<div class="page-load-status">
	  <div class="loader-ellips infinite-scroll-request">
	    <span class="loader-ellips__dot"></span>
	    <span class="loader-ellips__dot"></span>
	    <span class="loader-ellips__dot"></span>
	    <span class="loader-ellips__dot"></span>
	  </div>
	  <p class="infinite-scroll-last">End of content</p>
	  <p class="infinite-scroll-error">No more pages to load</p>
	</div>
	
	<!-- hide pagination with infinite scroll enabled -->
	<div class="navigation">
		<?php //if( get_next_posts_link() ) :?>
			<div class="next"><?php echo get_next_posts_link( '<i class="fa fa-long-arrow-down"></i> Older Entries', $posts->max_num_pages );?></div>
		<?php //endif;?>
		<?php //if( get_previous_posts_link() ) :?>
			<div class="prev"><?php echo get_previous_posts_link( '<i class="fa fa-long-arrow-up"></i> Newer Entries' );?></div>
		<?php //endif;?>
	</div>
	<?php wp_reset_postdata();?>
</div>